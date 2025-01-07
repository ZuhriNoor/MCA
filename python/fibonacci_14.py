n=int(input("enter the number of terms required in fibonacci series: "))
a,b=0,1

if n<=0:
    print("enter a positive number")
else:
    for i in range (n):
        print(a)
        c = a + b
        a = b
        b = c

        
        
        
