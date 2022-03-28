#importing pandas as pd
import pandas as pd
  
file_name="BloodPressure_202108-202201"
read_file = pd.read_excel(file_name+".xlsx")
  
read_file.to_csv (file_name+".csv",index=False)
