from fileReader import fileReader
from scrapper import scrapper
from sqlSocket import (getTable, sqlInput)

url_list = list(fileReader("urls.txt."))
for i in range(0, len(url_list), 4):
    sqlInput(url_list[i+3], url_list[i+2], scrapper(url_list[i+1]))

getTable()
