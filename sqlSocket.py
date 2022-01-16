import mysql.connector
from datetime import datetime

cnx = mysql.connector.connect(
    user='porownywarka',
    password='Zaq12wsx',
    host='37.48.70.83',
    database='szajszka')

mycursor = cnx.cursor()
mycursor.execute("SHOW TABLES")
for table in mycursor:
    print(table)

print(datetime.now().strftime("%Y/%m/%d %H:%M:%S"))
cnx.close()
