class clock:
    def __init__(self,hour=0,min=0,sec=0):
        self.__hour=hour
        self.__min=min
        self.__sec=sec
    def __add__(self, other):
        c3=clock()
        c3.__hour=self.__hour + other.__hour
        c3.__min=self.__min + other.__min
        c3.__sec=self.__sec + other.__sec
        if c3.__sec >= 60:
            c3.__min += c3.__sec // 60
            c3.__sec = c3.__sec % 60

        if c3.__min >= 60:
            c3.__hour += c3.__min // 60
            c3.__min = c3.__min % 60
        return c3
    
    def display(self):
        print(f"{self.__hour}:{self.__min}:{self.__sec}")

c1=clock(51,23,59)
c2 = clock(51,55,38)

c3  = c1 + c2
c3.display()

