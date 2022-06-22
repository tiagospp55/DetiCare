import sys
import pandas as pd

file_name=sys.argv[1]
id_=sys.argv[2]
diretorio_final=sys.argv[3]

nome_final=diretorio_final+id_+'_'+file_name[-35:-20]

print(file_name[-5:])
if file_name[-5:] == '.xlsx':
	print(1)
	read_file = pd.read_excel(file_name)
	read_file.to_csv(nome_final+'.csv',index=False)

elif file_name[-4:]=='.csv':
	print(2)
	with open(file_name,'r') as f:
		lines=f.readlines()
		with open(nome_final+'.csv','w') as out:
			for line in lines:
				out.write(line)

"""
file_csv=0
try:
	read_file = pd.read_excel(file_name)

	read_file.to_csv(file_name[:-5]+'.csv',index=False)

except Exception as E:
	file_csv=1
	print(E)

try:
	if file_csv==1:
		jsonFilePath = "./"+file_name[:-4]+".json"
	else:
		jsonFilePath = "./"+file_name[:-5]+".json"

	if file_csv==1:
		csv_to_json(file_name[:-4]+".csv", jsonFilePath)
	else:
		csv_to_json(file_name[:-5]+".csv", jsonFilePath)

except Exception as E:
	print(E)


"""