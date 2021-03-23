import mysql.connector
db=mysql.connector.connect(
    user="root",
    host="localhost",
    passwd="root",
    database="kiranbase"
   )
mycursor=db.cursor()
#mycursor.execute("CREATE DATABASE kiranbase")
#mycursor.execute("CREATE TABLE Person (name VARCHAR(50),age smallint UNSIGNED,personID int PRIMARY KEY AUTO_INCREMENT)")
#mycursor.execute("INSERT Person (name,age) VALUES (%s,%s)",("kiran",20))
#db.commit()
mycursor.execute("SELECT * FROM Person")
for i in mycursor:
    print(i)

