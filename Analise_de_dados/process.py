import pandas as pd

df=pd.read_csv('BloodPressure_202108-202201.csv')

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


new_df=pd.DataFrame()
new_df['day']=days
new_df['Pulse_mean']=pulses_mean
new_df['DIA_mean']=DIA_mean
new_df['DIA_min']=DIA_min
new_df['DIA_max']=DIA_max
new_df['SYS_mean']=SYS_mean
new_df['SYS_max']=SYS_max
new_df['SYS_min']=SYS_min

new_df.to_csv('teste_blood_presure_processado.csv',index=False)
print(new_df)
