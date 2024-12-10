class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

firstnode = Node(12)
secondnode = Node(13)
thirdnode = Node(14)

firstnode.next = secondnode
secondnode.next = thirdnode

node = firstnode
node.data = 20
print(firstnode.data)
arr = [5,6,7]
arr.sort()

# while node != None:
#     print(node.data , " ")
#     node = node.next

