import cmath

print("Enter co-efficients of quadratic equation")
a = int(input("a = "))
b = int(input("b = "))
c = int(input("c = "))

if a == 0:
    print("No solution")
else:
    d = (b * b) - (4 * a * c)
    root = cmath.sqrt(d)
    r1 = (-b + root) / (2 * a)
    r2 = (-b - root) / (2 * a)
    print(f"The roots are {r1} and {r2}")
