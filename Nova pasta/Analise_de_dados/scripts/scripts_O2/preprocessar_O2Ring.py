import sys
import pandas as pd
import json
import csv
import os

file=sys.argv[1]
destino=sys.argv[2]

df=pd.read_csv(file)#,delimiter=';')

df=df.loc[df['Pulse Rate(bpm)']<65535]

print(df)
df.to_csv(sys.argv[1][:-4]+'_processado.csv',index=False)
print("wrote to :"+destino+sys.argv[1][:-4]+'_processado.csv')
