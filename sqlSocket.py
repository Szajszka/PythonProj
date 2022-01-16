import mysql.connector

cnx = mysql.connector.connect(
    user='porownywarka',
    password='Zaq12wsx',
    host='37.48.70.83',
    database='szajszka')

mycursor = cnx.cursor()
mycursor.execute("SHOW TABLES")
for table in mycursor:
    print(table)


cnx.close()
