import pandas as pd

file='./originais/O2Ring-20220207053010_OXIRecord.csv'

df=pd.read_csv(file)#,delimiter=';')

df=df.loc[df['Pulse Rate(bpm)']<65535]

df.to_csv('O2Ring-20220207053010_OXIRecord_processado.csv',index=False)

#plt.plot(df['Motion'])
#plt.show()

print(df)
