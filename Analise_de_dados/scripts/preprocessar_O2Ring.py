import sys
import pandas as pd

file=sys.argv[1]

df=pd.read_csv(file)#,delimiter=';')

df=df.loc[df['Pulse Rate(bpm)']<65535]

print(df)
df.to_csv(sys.argv[1][:-4]+'_processado.csv',index=False)

print("wrote to :"+sys.argv[1][:-4]+'_processado.csv')
