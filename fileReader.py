import re


def fileReader(filename):
    file = open(filename, "r")
    contents = file.read()
    tmp = re.sub(r'[\n]+', ",", contents)
    contents_list = tmp.split(",")
    file.close()
    return contents_list
