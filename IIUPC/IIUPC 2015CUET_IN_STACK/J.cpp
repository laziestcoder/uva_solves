#include<stdio.h>
#include<stdlib.h>
#include<iostream>
#include<string.h>
#include<math.h>
#include<algorithm>
#include<string>
#include<map>
#include<queue>
#include<stack>
#include<set>
#include<vector>
#include<iomanip>

using namespace std;

#define  mem(x,y) memset(x,y,sizeof(x))
#define sn scanf
#define pf printf
#define pb push_back

typedef long long int ll;

const double pi2=acos(0.0);

int main()
{
    int t,T;
    scanf("%d",&t);
    T=t;
    double V,R;
    while(t--)
    {
        scanf("%lf %lf",&R,&V);
        printf("Case %d: %0.8lf\n",T-t,pi2/V*R);
    }

    return 0;
}
