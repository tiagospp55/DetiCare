import datetime
import pandas as pd
import sys

# example
	# python3 ./base_temporal.py nome_ficheiro delta
	# (delta= numero de dias a ver, por exemplo: uma semana = 7)

file_name=sys.argv[1]
#file_name="../BloodPressure_202108-202201.csv"

#### get arg date
arg_date=datetime.date.today()

df=pd.read_csv(file_name)

dates=list(df['Measurement Date'])

delta=sys.argv[3]
#delta=14
month_ago =  arg_date - datetime.timedelta(days=delta)

new_dates=[]
for x in dates:
	year=int(x[0:4])
	month=int(x[5:7])
	day=int(x[8:10])

	d=datetime.date(year,month,day)
	
	if d<arg_date and month_ago<d:
		new_dates.append(x)
		#print(1)

#print(new_dates)

new_df=df[df['Measurement Date'].isin(new_dates)]

print(new_df)