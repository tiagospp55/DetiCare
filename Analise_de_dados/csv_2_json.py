import csv
import json
import pandas as pd 
 
file_name="BloodPressure_202108-202201"
file_name="teste_blood_presure_processado"

def csv_to_json(csvFilePath, jsonFilePath):
    data = {}
    # Open a csv reader called DictReader
    with open(csvFilePath, encoding='utf-8') as csvf:
        csvReader = csv.DictReader(csvf)
         
        # Convert each row into a dictionary
        # and add it to data
        key=0;
        for rows in csvReader:
            data[key] = rows
            key=key+1
 
    # Open a json writer, and use the json.dumps() function to dump data
    with open(jsonFilePath, 'w', encoding='utf-8') as jsonf:
        jsonf.write(json.dumps(data, indent=4))

csvFilePath = "./"+file_name+".csv"
jsonFilePath = "./"+file_name+".json"

csv_to_json(csvFilePath, jsonFilePath)
