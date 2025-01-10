class Bankaccount:
    def __init__(self, accno, name, acctype, balance = 0):
        self.accno = accno
        self.name = name
        self.acctype = acctype
        self.__balance = balance
        
    def getBalance(self):
        return self.__balance
    
    def withdraw(self, amount):
        self.__balance-=amount
        
    def deposit(self, amount):
        self.__balance+=amount
        
    def accdetails(self):
        print(f"Account number - {self.accno}")
        print(f"Account name - {self.name}")
        print(f"Account type - {self.acctype}")
        print(f"Account balance - {self.__balance}")
        
acc_no =  10002
name = input("Enter account name: ")
account_type = ""

while account_type.lower() not in ["savings","current"]:
    account_type = input("Enter account type (Savings/Current): ")

account_type.lower()

acc1 = Bankaccount(acc_no + 1, name, account_type )

is_running = 1

while is_running:
    print("\n\nEnter operations: ")
    print("1. Check Balance")
    print("2. Deposit")
    print("3. Withdraw")
    print("4. Display account details")
    print("5. Exit")

    ch = int(input("Enter your choice: "))
    

    if ch == 1:
        print(f"Your balance is {acc1.checkbalance()}")
    elif ch == 2:
        amount = float(input("Enter amount to deposit: "))
        acc1.deposit(amount)
        print("Amount succesfully deposited.")
    elif ch == 3:
        amount = float(input("Enter amount to withdraw: "))
        if acc1.checkbalance() < amount:
            print("Insufficient balance")
        else:
            acc1.withdraw(amount)
            print("Amount successfully withdrawn.")

    elif ch == 4:
        acc1.accdetails()
    elif ch == 5:
        is_running = 0
    else:
        print("Invalid choice. Please try again.")

