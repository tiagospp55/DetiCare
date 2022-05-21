import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="peebd"
)

'localhost','root','','peebd'

mycursor = mydb.cursor()

sql = "SELECT * FROM users"

mycursor.execute(sql)

myresult = mycursor.fetchall()


for x in myresult:
  print(x)

delimiter = ','
delimiter.join(myresult)