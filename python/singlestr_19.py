s1=input("enter the first string: ")
s2=input("enter the second string: ")

a = s1[0]
b = s2[0]

new_s1 = s1.replace(a , b)
new_s2 = s2.replace(b , a)


s3 = new_s1+new_s2
print(s3)
