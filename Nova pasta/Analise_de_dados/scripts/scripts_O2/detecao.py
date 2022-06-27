import pandas as pd
import numpy as np
from scipy.fft import fft,fftfreq,ifft
import matplotlib.pyplot as plt
import sys

file=sys.argv[1]
destino=sys.argv[2]

df=pd.read_csv(file)#,delimiter=';')

df=df.loc[df['Pulse Rate(bpm)']<65535]

o2values=df['SpO2(%)'].values
t=df['Time']


o2values=o2values- o2values.mean()

#from itertools import groupby
#o2values=[key for key, _group in groupby(o2values)]

print(o2values)
#plt.plot(o2values,linewidth=0.5)
#plt.show()

n=len(o2values)
print(n)

n=250
i=0
intervalos=[]
while i < len(o2values)-n:
	window=o2values[i:i+n]
	t_window=t[i:i+n]

	yf= fft(window)[:n//2]
	xf=fftfreq(n,1)[:n//2]
	yf_abs=abs(yf)
	
	"""
	## metodo 1
	for x in range(len(xf)):
		if xf[x]>0.056:
			if yf[x] > 65:
				print(x,'detetado')
	##
	"""
	#### metodo 2
	_max=0
	index_max=0
	for x in range(len(xf)):
		if yf_abs[x]>_max and xf[x] > 0.056:
			index_max=x
			_max=yf_abs[x]

	"""
	# show in frequency domain
	plt.plot(xf,yf_abs)
	plt.title(str(i)+'-'+str(i+n))
	plt.plot(xf,yf_abs,linewidth=1)
	plt.show()
	"""

	if index_max > 10 and yf_abs[index_max]>55:
		print(index_max,yf_abs[index_max],'detetado')
		
		t_window=list(t_window)
		intervalos.append(t_window[0])
		intervalos.append(t_window[-1])

		# show in frequency domain
		plt.plot(xf,yf_abs)
		plt.title(str(i)+'-'+str(i+n))
		plt.plot(xf,yf_abs,linewidth=1)
		plt.show()
		"""
		# show in time domain
		plt.title('inverso FFT')
		plt.plot(t_window[:n//2],ifft(yf),linewidth=1)
		plt.show()
		"""
	i=i+n
print(intervalos)

flags_periodic=[]
labels=[]
for x in range(len(df)):
	if df.loc[x,'Time'] in intervalos:
		flags_periodic.append(1)
		labels.append(df.loc[x,'Time'])
	else:
		flags_periodic.append(0)
		labels.append('0')
	#days.append(x)
	#pulses_mean.append(df_date['Pulse(bpm)'].mean())

df['PERIODIC_BREATHING']=flags_periodic
df['labels_periodic']=labels
df.to_csv(destino+file_name[:-4]+'_detetado.csv')




import csv,json,os
def csv_to_json(csvFilePath, jsonFilePath):
    data = {}
    with open(csvFilePath, encoding='utf-8') as csvf:
        csvReader = csv.DictReader(csvf)
        key=0;
        for rows in csvReader:
            data[key] = rows
            key=key+1
 
    with open(jsonFilePath, 'w', encoding='utf-8') as jsonf:
        jsonf.write(json.dumps(data, indent=4))


df.to_csv('tmp.csv',index=False)
csv_to_json("tmp.csv",destino+file_name[:-4]+'_detetado.json')
#csv_to_json("tmp.csv",destino+'file_para_usar_no_graph.json')
os.remove("tmp.csv")