s = input("Enter a word: ")

end = s[-3:]

if end == "ing":
    s += "ly"
else:
    s+= "ing"
print(s)
