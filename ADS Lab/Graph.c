#include <stdio.h>
#include <stdlib.h>

typedef struct Node
{
    int data;
    struct Node *next;
} node;

node *new, *temp;
int size;

node *createNode(int data)
{
    new = (node *)malloc(sizeof(node));
    new->data = data;
    new->next = NULL;
    return new;
}

int findIndex(node *V[], int size, int data)
{
    for (int i = 0; i < size; i++)
    {
        if (V[i]->data == data)
            return i;
    }
    return -1;
}

node *addedge(node *V[], int v1, int v2)
{
    new = createNode(v2);
    int i = findIndex(V, size, v1);
    if (i != -1)
    {
        new->next = V[i]->next;
        V[i]->next = new;
    }

    new = createNode(v1);
    i = findIndex(V, size, v2);
    if (i != -1)
    {
        new->next = V[i]->next;
        V[i]->next = new;
    }
}

void printGraph(node *V[], int size)
{
    for (int i = 0; i < size; i++)
    {
        printf("%d - ", V[i]->data);
        temp = V[i]->next;
        while (temp)
        {
            printf("%d , ", temp->data);
        }
        if (temp == NULL)
            printf("NULL");
        printf("\n");
    }
}

void main()
{
    printf("Enter Number of Vertex : ");
    scanf("%d", &size);
    node* V[size];

    for (int i = 0; i < size; i++)
    {   
        int data;
        printf("Enter vertex %d: ", i + 1);
        scanf("%d", &data);
        V[i] = createNode(data);
    }

    printf("Enter number of edges: ");


}