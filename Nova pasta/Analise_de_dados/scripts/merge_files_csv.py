import pandas as pd
import sys
import glob

#### exemplo de utilização ####

#  python3 merge_files_csv.py ./teste_merged/ id_do_joao o2ring ./teste_merged_files/

#### exemplo de utilização ####


diretorio_inicial=sys.argv[1]
id_cliente=sys.argv[2]
tipo_de_dados=sys.argv[3]
destino=sys.argv[4]


string_diretorio=diretorio_inicial+id_cliente+'_'+tipo_de_dados+'*.csv'
print("abrindo os ficheiros em :",string_diretorio)

files=[]
for filename in glob.glob(string_diretorio):
	print("a ler o ficheiro ",filename)
	files.append(filename)

df=pd.read_csv(files[0])
#print(df)

for name in files[1:]:
	temp=pd.read_csv(name)
	df = pd.concat([temp, df], axis=0)

#print(length(df))
df=df.drop_duplicates()
#print(length(df))

nome_final=destino+id_cliente+'_'+tipo_de_dados+'_merged.csv'

df.to_csv(nome_final,index=False)
print("wrote to:",nome_final)