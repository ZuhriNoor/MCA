class Fan:
    
    SLOW = 1
    MEDIUM = 2
    FAST = 3
    
    def __init__(self, color, speed, on, size):
        self.__color = color
        self.__speed = speed
        self.__on = True
        self.__size = size

    def getColor(self):
        return self.__color
    
    def setColor(self, color):
        self.__color = color
        

fan2 = Fan("blue", "slow", True, 5)

fan2.setColor("yelow")

print(fan2.getColor())