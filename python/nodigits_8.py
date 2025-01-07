
num = int(input("Enter a number: "))
digits = 0

while num != 0:
    num = num // 10
    digits = digits + 1

print(f"No of digits = {digits}")
