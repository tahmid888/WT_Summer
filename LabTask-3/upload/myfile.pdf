#include <bits/stdc++.h>
#define endl '\n'
using namespace std;



int main() {
  ios::sync_with_stdio(false);
	cin.tie(0);


    int n,c,i;
  cin>>n>>c;
  int s[n];
  for(int i=0;i<n;i++)
    {
      cin>>s[i];
    }

int count=0;

  for(int i=0;i<n;i++)
    {

  if(s[i]-s[i-1] <=c)
  {
    count++;
  }
      else {
        count=1;
      }
    }

  cout<<count<<endl;

  return 0;
  }
