import requests
from html.parser import HTMLParser
import re

url = "https://www.morele.net/karta-graficzna-gigabyte-geforce-rtx-3070-gaming-oc-8gb-gddr6-gv-n3070gaming-oc-8gd-5944660/"


def crawler(url):
    page = requests.get(url)

    def stringParser(string):
        tmp = re.sub(r'[=\n{}]+', "", string)
        li = list(tmp.split(" "))
        li = list(filter(None, li))
        return li

    class MyHTMLParser (HTMLParser):
        def handle_data(self, data):
            if ("priceGross" in data):
                li = stringParser(data)
                for word in li:
                    if word == "priceGross":
                        print("Price is: ", li[li.index(word)+1])

    parser = MyHTMLParser()
    parser.feed(page.text)


crawler(url)  # later remove url variable in order to use crawler func with an input
# rename stuff a bit
