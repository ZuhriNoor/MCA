struct node
{
    int data;
    struct node *left;
    struct node *right;
} *root = null, *current,*new, *temp;


ch == 4:
    scanf(elememt)
    root = delete(root, element)

void insert()
{
    new = malloc(sizeof(struct node));
    printf("Enter the data:");
    scanf("%d", &new->data);
    new->left = null;
    new->right = null;
    if (root == null)
    {
        root = new;
    }
    else
    {
        current = root;
        while (current != null)
        {
            if (current->data > new->data)
            {
                if (current->left == null)
                {
                    current->left = new;
                    break;
                }
                else
                {
                    current = current->left;
                }
            }
            else
            {
                if (current->data < new->data)
                {
                    if (current->right = null)
                    {
                        current->right = new;
                        break;
                    }

                    else
                    {
                        current = current->right;
                    }
                }
            }
        }
    }
}
void inorder(struct node *){
    if(root==NULL){
        return;
    }
    inorder(root->left);
    printf("%d",root);
    inorder(root->right);
}
void search(){
    printf("Enter the key:");
    scanf("%d",&key);
    current=root;
    while(current!=NULL){
        if(current->data==key){
            printf("search element found");
            return;
        }
        else if(current->data > key){
            current=current->left;
        }
        else{
            current=current->right;
        }

        }
    printf("Element not found");
    }
    




struct node *delete(struct node *root, int x)
{

    if (root == NULL){
        return;
    }
    if(x > root->data){
        root->right = delete(root->right, x);
    }
    else if (x < root->data){
        root->left = delete(root->left ,x );
    }
    else{
        if(root->left == NULL){
            temp = root->right;
            free(root);
            return temp;
        }
        else if(root->right == NULL){
            temp = root->left;
            free(root);
            return temp;
        }
        else{
            succ = successor(root);
            temp = root->data;
            root->data = succ->data;
            root->right = delete(root->right, temp);
        }
    }
    return root;
}



struct node *findSucc(struct node * root){
    current = root;
    current = current->right;
    while(current->left != NULL){
        current = current->left;
    }
    return current;
}