import mysql.connector

DB = mysql.connector.connect (
    host="localhost",
    user="root",
    passwd="Pn022216"
)

DBcursor = DB.cursor()

print(DB)
