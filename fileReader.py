def fileReader(filename):
    file = open(filename, "r")
    contents = file.read()
    contents_list = contents.split(",")
    file.close()
    return contents_list
