my_dict = {
    3: "three",
    1: "one",
    4: "four",
    2: "two",
    7: "seven"
}

num_keys = list(my_dict.keys())
num_keys.sort()

print("Dictionary values in ascending order: ")
for key in num_keys:

    print(my_dict[key])

num_keys.reverse()
print("Dictionary values in descending order: ")
for key in num_keys:

    print(my_dict[key])
