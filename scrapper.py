from html.parser import HTMLParser
import requests
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
                        self.price = "{:.2f}".format(
                            float(li[li.index(word)+1])/100)

    parser = MyHTMLParser()
    parser.feed(requests.get(url).text)
    print(parser.price)
