#include <stdio.h>
#include <stdlib.h>

void printSet(int[], int size);
void createSet(int[], int[], int size);
int isPresent(int[], int size, int element);


int size, sizeA, sizeB;

int main()
{

    printf("Enter the size of the universal set: ");
    scanf("%d", &size);
    int u[size];
    createSet(u, NULL, size);
    printSet(u, size);

    printf("Enter the size of set A: ");
    scanf("%d", &sizeA);
    int a[sizeA];
    createSet(a, u, sizeA);
    printSet(a, sizeA);

    printf("Enter the size of set B: ");
    scanf("%d", &sizeB);
    int b[sizeB];
    createSet(b, u, sizeB);
    printSet(b, sizeB);
}

void createSet(int s[], int u[], int size)
{
    int element;
    for (int i = 0; i < size; i++)
    {
        printf("Element %d: ", i + 1);
        scanf("%d", &element);

        if (!isPresent(s, i, element) && (u == NULL || isPresent(u, size, element)))
        {
            s[i] = element;
        }
        else
        {
            printf("Invalid entry!\n");
            i--;
        }
    }
}

void printSet(int s[], int size)
{
    for (int i = 0; i < size; i++)
    {
        printf("%d ", s[i]);
    }
    printf("\n");
}

int isPresent(int s[], int size, int element)
{
    for (int i = 0; i < size; i++)
    {
        if (s[i] == element)
        {
            return 1;
        }
    }
    return 0;
}