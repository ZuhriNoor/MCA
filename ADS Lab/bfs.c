#include <stdio.h>
#include <stdlib.h>

void displayGraph();
void createGraph();
void bfs();

int graph[100][100] = {0}, vertices;

int main()
{
    printf("How many vertices are there? :");
    scanf("%d", &vertices);
    createGraph();
    displayGraph();
    bfs();
}

void bfs()
{
    int queue[vertices], visited[vertices], front = 0, rear = 0, pop, start;

    for (int i = 0; i < vertices; i++)
    {
        visited[i] = 0;
    }

    printf("Enter the vertex to start bfs from: ");
    scanf("%d", &start);
    queue[rear] = start;
    visited[start] = 1;
    while (front <= rear)
    {
        pop = queue[front++];
        printf("%d ", pop);
        for (int i = 0; i < vertices; i++)
        {
            if (graph[pop][i] == 1 && !visited[i])
            {
                queue[++rear] = i;
                visited[i] = 1;
            }
        }
    }
}
void createGraph()
{
    int a, b;
    while (1)
    {
        printf("Enter the first end point of the edge: ");
        scanf("%d", &a);
        if (a == -1)
            break;
        printf("Enter the second end point of the edge: ");
        scanf("%d", &b);
        if (a >= vertices || b >= vertices || a < 0 || b < 0)
        {
            printf("\ninvalid choice\n");
        }
        else
        {
            graph[a][b] = 1;
            graph[b][a] = 1;
        }
    }
}

void displayGraph()
{
    for (int i = 0; i < vertices; i++)
    {
        for (int j = 0; j < vertices; j++)
        {
            printf("%d ", graph[i][j]);
        }
        printf("\n");
    }
}