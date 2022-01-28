from datetime import datetime
import mysql.connector


def sqlInput(cardId, manufacturerId, price):

    cnx = mysql.connector.connect(
        user='p578288_user',
        password='Zaq12wsx!@#',
        host='94.23.90.35',
        database='p578288_karty')

    mycursor = cnx.cursor()

    now = datetime.now()

    sql = "INSERT INTO kartygraf (id, date, id_karty, id_producenta, cena) VALUES (%s, %s, %s, %s, %s)"
    val = (0, now.strftime("%Y/%m/%d %H:%M:%S"),
           cardId, manufacturerId, price)

    mycursor.execute(sql, val)
    cnx.commit()

    print(mycursor.rowcount, "row inserted via Python")

    cnx.close()

# Debugging purposes


def getTable():

    cnx = mysql.connector.connect(
        user='p578288_user',
        password='Zaq12wsx!@#',
        host='94.23.90.35',
        database='p578288_karty')

    mycursor = cnx.cursor()

    mycursor.execute("SELECT * FROM kartygraf")
    result = mycursor.fetchall()

    for x in result:
        print(x)

    cnx.close()
