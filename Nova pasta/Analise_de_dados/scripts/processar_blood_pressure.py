import pandas as pd
import sys

df=pd.read_csv(sys.argv[1])

sys_max_pessoa,sys_min_pessoa=140,90
dia_max_pessoa,dia_min_pessoa=89,60


dates=df['Measurement Date'].unique()
dates=list(dates)

new_dates=[]
for x in dates:
	new_dates.append(x[0:10])

df['day']=new_dates
dates=list(df['day'].unique())

days,pulses_mean,SYS_mean,DIA_mean=[],[],[],[]
SYS_min,SYS_max,DIA_min,DIA_max=[],[],[],[]
for x in dates:
	df_date=df.loc[df['day']==x]
	days.append(x)
	pulses_mean.append(df_date['Pulse(bpm)'].mean())
	SYS_mean.append(df_date['SYS(mmHg)'].mean())
	SYS_max.append(df_date['SYS(mmHg)'].max())
	SYS_min.append(df_date['SYS(mmHg)'].min())
	DIA_mean.append(df_date['DIA(mmHg)'].mean())
	DIA_min.append(df_date['DIA(mmHg)'].min())
	DIA_max.append(df_date['DIA(mmHg)'].max())

lim_max_dia,lim_max_sys=[],[]
lim_min_dia,lim_min_sys=[],[]
for x in range(len(days)):
	lim_max_sys.append(sys_max_pessoa)
	lim_max_dia.append(dia_max_pessoa)
	lim_min_sys.append(sys_min_pessoa)
	lim_min_dia.append(dia_min_pessoa)

new_df=pd.DataFrame()
new_df['Date']=days
new_df['Pulse_mean']=pulses_mean
new_df['DIA_mean']=DIA_mean
new_df['DIA_min']=DIA_min
new_df['DIA_max']=DIA_max
new_df['SYS_mean']=SYS_mean
new_df['SYS_max']=SYS_max
new_df['SYS_min']=SYS_min
new_df['SYS_max_lim']=lim_max_sys
new_df['DIA_max_lim']=lim_max_dia
new_df['SYS_min_lim']=lim_min_sys
new_df['DIA_min_lim']=lim_min_dia

new_df.to_csv(sys.argv[1][:-4]+'_calculado.csv',index=False)
print(new_df)
