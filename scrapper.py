import requests
from html.parser import HTMLParser
import re


def scrapper(url):

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
                        price = li[li.index(word)+1]
                        # not great, always rouding down the price
                        print("Price is: ", price[:-2])

    parser = MyHTMLParser()
    parser.feed(requests.get(url).text)


# clean stuff up a bit
