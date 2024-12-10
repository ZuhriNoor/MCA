#include <stdio.h>

void displaybit(int[], int limit);
void unioning(int[], int[], int limit);
void intersection(int[], int[],int limit);

void main()
{
    int limit, i;
    printf("Enter upper limit of universal set: ");
    scanf("%d", &limit);

    int sub1[limit], sub2[limit];
    int num1, num2;

    for (i = 0; i < limit; i++)
    {
        sub1[i] = 0;
        sub2[i] = 0;
    }

    printf("Enter number of elements in subset A: ");
    scanf("%d", &num1);
    i = 0;
    while (i < num1)
    {
        int element;
        printf("Enter element %d: ", i + 1);
        scanf("%d", &element);
        if (element >= limit || element < 0)
            printf("Element cannot be inserted. Out of range!");
        else
        {
            sub1[element] = 1;
            i++;
        }
            
    }

    printf("Enter number of elements in subset B: ");
    scanf("%d", &num2);
    i = 0;
    while (i < num2)
    {
        int element;
        printf("Enter element %d: ", i + 1);
        scanf("%d", &element);
        if (element >= limit || element < 0)
            printf("Element cannot be inserted. Out of range!");
        else
        {
            sub2[element] = 1;
            i++;
        }
    }

    printf("\nThe set a is: ");
    displaybit(sub1, limit);
    printf("\nThe set b is: ");
    displaybit(sub2, limit);

    printf("\nA union B is : ");
    unioning(sub1, sub2, limit);
    printf("\nA intersection B is : ");
    intersection(sub1, sub2, limit);
}

void displaybit(int s[], int limit)
{
    for (int i = 0; i < limit; i++)
    {
        if (s[i] == 1)
        {
            printf("%d ", i);
        }
    }
}

void unioning(int a[], int b[], int limit)
{
    for (int i = 0; i < limit; i++)
    {
        if (a[i] == 1 || b[i] == 1)
        {
            printf("%d ", i);
        }
    }
}

void intersection(int a[], int b[], int limit)
{
    for (int i = 0; i < limit; i++)
    {
        if (a[i] == 1 && b[i] == 1)
        {
            printf("%d ", i);
        }
    }
}