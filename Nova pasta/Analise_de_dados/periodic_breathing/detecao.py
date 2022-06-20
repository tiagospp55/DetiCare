import pandas as pd
import numpy as np
from scipy.fft import fft,fftfreq
import matplotlib.pyplot as plt


df=pd.read_csv('../teste/O2Ring-20220207053010_OXIRecord_processado.csv')

o2values=df['SpO2(%)'].values
o2values=o2values- o2values.mean()

#from itertools import groupby
#o2values=[key for key, _group in groupby(o2values)]

print(o2values)
plt.plot(o2values)
plt.show()


n=len(o2values)
print(n)

n=250
i=0
while i < len(o2values)-n:
	window=o2values[i:i+n]

	yf= fft(window)
	xf=fftfreq(n,1)[:n//2]

	plt.plot(xf,1/n * np.abs(yf[0:n//2]))
	plt.show()
	i=i+n

"""
yf= fft(o2values)
xf=fftfreq(n,1)[:n//2]

plt.plot(xf,1/n * np.abs(yf[0:n//2]))
plt.show()

from scipy.fft import fft, fftfreq
# Number of sample points
N = 600
# sample spacing
T = 1.0 / 800.0
x = np.linspace(0.0, N*T, N, endpoint=False)
y = np.sin(50.0 * 2.0*np.pi*x) + 0.5*np.sin(80.0 * 2.0*np.pi*x)
yf = fft(y)
xf = fftfreq(N, T)[:N//2]
import matplotlib.pyplot as plt
plt.plot(xf, 2.0/N * np.abs(yf[0:N//2]))
plt.grid()
plt.show()
"""