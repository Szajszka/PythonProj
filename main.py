from fileReader import fileReader
from scrapper import scrapper

url_list = list(fileReader("urls.txt."))
for i in range(0, len(url_list), 2):
    print(url_list[i])
    scrapper(url_list[i+1])
