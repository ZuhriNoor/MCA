num1 = int(input("Enter first number: "))
num2 = int(input("Enter second number: "))

for i in range(1, num1 // 2 + 1):

    if num1 % i == 0 and num2 % i == 0:
        gcd = i

print(f"The GCD of the two numbers is {gcd}")
    
