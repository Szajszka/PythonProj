from scrapper import scrapper
from fileReader import fileReader
import mysql.connector

url_list = list(fileReader("urls.txt."))
for i in range(0, len(url_list), 2):
    print(url_list[i])
    scrapper(url_list[i+1])

cnx = mysql.connector.connect(
    user='porownywarka',
    password='Zaq12wsx',
    host='37.48.70.83',
    database='szajszka')

mycursor = cnx.cursor()
mycursor.execute("SHOW TABLES")
for db in mycursor:
    print(db)
cnx.close()
