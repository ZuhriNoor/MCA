str1=input("enter the string: ")
str_list = list(str1)

temp = ""
temp = str_list[0]
str_list[0] = str_list[-1]
str_list[-1] = temp

new_string = ""

for char in str_list:
    new_string += char
    
print(f"The new string is: {new_string}")
