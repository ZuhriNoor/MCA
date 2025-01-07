num= int(input("Enter the numbers factorial required: "))
factorial=1
if num<0:
    print("factorial doesn't exist")
elif num==0:
    print("factorial of 0 is 1")
else:
    for i in range(1,num+1):
        factorial=factorial*i
print("factorial of the ",num,"is:",factorial)
