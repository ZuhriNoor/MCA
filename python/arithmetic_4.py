
num1 = int(input("Enter first number: "))

num2 = int(input("Enter second number: "))

print("Choose operation: ")
print("1. Addition\n2.Subtraction\n3.Multiplication\n4.Division\n5.Exit")
choice = int(input("Enter choice: "))
        
    
if choice == 1:
    print(f"{num1} + {num2} = {num1 + num2}")
elif choice == 2:
    print(f"{num1} - {num2} = {num1 - num2}")
elif choice == 3:
    print(f"{num1} * {num2} = {num1 * num2}")
elif choice == 4:
    print(f"{num1} / {num2} = {round(num1 / num2, 3)}")
else:
     print("Enter a valid choice!")
    
