#include<stdio.h>
int main ()
{
    long long int t,a,b,i;
    scanf("%lld",&t);
    for(i=1; i<=t; i++)
    {
        scanf("%lld%lld",&a,&b);
        if(a==b)
            printf("=\n");
        else if(a>b)
            printf(">\n");
        else
            printf("<\n");
    }
    return 0;
}
