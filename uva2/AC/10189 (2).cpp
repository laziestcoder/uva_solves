/************************************************************************/
/*	Name: Towfiqul Islam 												*/
/*	uva id: 448714 														*/
/*	email id: towfiq.106@gmail.com										*/
/*	institute: IIUC														*/
/*	address: Chittagong, Bangladesh										*/
/*																		*/
/************************************************************************/

#include<bits/stdc++.h>
using namespace std;
int main ()
{
    int n,m,f=0,i,j;
    char x[1000][1000]={'0'},c;
    while(scanf("%d%d",&n,&m)==2)
    {
        if(n==0 || m==0)
            return 0;
        for(i=1; i<=n; i++)
        {
            for(j=1; j<=m; j++)
            {
                cin>>c;
                if(c=='.')
                    x[i][j]='0';
                else
                    x[i][j]=c;
            }
        }
        for(i=1; i<=n; i++)
        {

            for(j=1; j<=m; j++)
            {
                if(x[i][j]=='*')
                {
                    if(x[i-1][j]!='*')
                        x[i-1][j]++;

                    if(x[i+1][j]!='*')
                        x[i+1][j]++;

                    if(x[i][j-1]!='*')
                        x[i][j-1]++;

                    if(x[i][j+1]!='*')
                        x[i][j+1]++;

                    if(x[i-1][j-1]!='*')
                        x[i-1][j-1]++;

                    if(x[i-1][j+1]!='*')
                        x[i-1][j+1]++;

                    if(x[i+1][j+1]!='*')
                        x[i+1][j+1]++;

                    if(x[i+1][j-1]!='*')
                        x[i+1][j-1]++;
                }

            }
        }
        if(f>0)
            cout<<endl;
        f++;
        cout<<"Field #"<<f<<":"<<endl;
        for(i=1; i<=n; i++)
        {

            for(j=1; j<=m; j++)
            {
                cout<<x[i][j];
            }
            cout<<endl;
        }
    }


    return 0;

}
