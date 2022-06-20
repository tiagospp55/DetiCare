import datetime
import pandas as pd
import sys
import os
import csv
import json

file_name=sys.argv[1]
destino=sys.argv[2]
delta=sys.argv[3]

arg_date=datetime.date.today()

### para teste
"""
arg="2021-09-29"
arg_year=int(arg[0:4])
arg_month=int(arg[5:7])
arg_day=int(arg[8:10])
arg_date=datetime.date(arg_year,arg_month,arg_day)
print(arg_date)
"""

df=pd.read_csv(file_name)
dates=list(df['Date'])

month_ago =  arg_date - datetime.timedelta(days=int(delta))

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

new_df=df[df['Date'].isin(new_dates)]
print(new_df)

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


new_df.to_csv('tmp.csv',index=False)
csv_to_json("tmp.csv",destino+file_name[:-4]+'_'+delta+'.json')
#csv_to_json("tmp.csv",destino+'file_para_usar_no_graph.json')
os.remove("tmp.csv")
