#include<stdio.h>
void add(int a,int b)
{
    printf("%d",a+b);
}
int main()
{
    int x,y;
    scanf("%d%d",&x,&y);
    add(x,y);
    return 0;
}
