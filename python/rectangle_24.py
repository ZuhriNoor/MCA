class rectangle:
    def __init__(self,  length, breadth):
        self.length = length
        self.breadth = breadth
    def area(self):
        return self.length * self.breadth
    def perimeter(self):
        return 2 * (self.length + self.breadth)
    def compare(self,rect):
        area1 = self.area() 
        area2 = rect.area()
       
        if area1 > area2:
            return "Rectangle 1 is larger"
        elif area1 < area2:
            return "Rectangle 2 is larger"
        else:
            return "Both rectangles are equal in size"
    
rect1=rectangle(5,6)
rect2=rectangle(6,7)
print("Area of the rectangle 1 is ", rect1.area())
print("area of the rectangle 2 is ", rect2.area())
print("perimeter of the rectangle 1 is " , rect1.perimeter())
print("perimeter of the rectangle 2 is " ,rect2.perimeter())
print(rect1.compare(rect2))

