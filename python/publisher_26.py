class publisher:
    def __init__(self, name, address):
        self.name = name
        self.address = address

    def display(self):
        print(f"Name: {self.name}")
        print(f"Address: {self.address}")

class book(publisher):
    def __init__(self, publisher, title, author):
        super().__init__(publisher.name, publisher.address)
        self.title=title
        self.author=author

    def display(self):
        print(f"Title: {self.title}")
        print(f"Author: {self.author}")

class python(book):
    def __init__(self, publisher, book, price, numofpages):
        super().__init__(publisher, book.title, book.author)
        self.price=price
        self.numofpages=numofpages

    def display(self):
        print(f"Price: {self.price}")
        print(f"Pages: {self.numofpages}")


dcbooks = publisher("DC Books", "Trivandrum")
dcbooks.display()
python_book = book(dcbooks, "Python Guide", "Abhishek")
python_book.display()
python1 = python(dcbooks, python_book, 1000, 290)
python1.display()




