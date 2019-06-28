#include<stdio.h>
//Sequential Search
void seq()
{
int arr[50],k,i,l,pos=0;
printf("\nEnter limit For SEQUENTIAL SEARCH\n");
scanf("%d",&l);
printf("Enter %d elements\n",l);
for(i=0;i<l;i++)
{
scanf("%d",&arr[i]);
}
printf("Enter a number to be search\n");
scanf("%d",&k);
for(i=0;i<l;i++)
{
if(arr[i]==k)
{
pos=i+1;
break;
}
}
if(pos!=0)
printf("%d is found in the list, at position %d\n",k,pos);
else
printf("%d is not in the list\n",k);

}
//binary search
void bin()
{
{
   int c, first, last, middle, n, search, array[100];

   printf("\nEnter number of elements\n");
   scanf("%d",&n);

   printf("Enter %d integers\n", n);

   for (c = 0; c < n; c++)
      scanf("%d",&array[c]);

   printf("Enter value to find\n");
   scanf("%d", &search);

   first = 0;
   last = n - 1;
   middle = (first+last)/2;

   while (first <= last) {
      if (array[middle] < search)
         first = middle + 1;
      else if (array[middle] == search) {
         printf("%d found at location %d.\n", search, middle+1);
         break;
      }
      else
         last = middle - 1;

      middle = (first + last)/2;
   }
   if (first > last)
      printf("Not found! %d is not present in the list.\n", search);

   return 0;
}
}
//buble sort
void bub()
{
  int array[100], n, c, d, swap;

  printf("\nEnter number of elements\n");
  scanf("%d", &n);

  printf("Enter %d integers\n", n);

  for (c = 0; c < n; c++)
    scanf("%d", &array[c]);

  for (c = 0 ; c < ( n - 1 ); c++)
  {
    for (d = 0 ; d < n - c - 1; d++)
    {
      if (array[d] > array[d+1]) /* For decreasing order use < */
      {
        swap       = array[d];
        array[d]   = array[d+1];
        array[d+1] = swap;
      }
    }
  }

  printf("Sorted list in ascending order:\n");

  for ( c = 0 ; c < n ; c++ )
     printf("%d\n", array[c]);

  return 0;
}
void ui(){
printf("******************************\n");
printf("What do you want to do?select one from menu\n1>Sequential Search\n2>Binary Search\n3>Bubble Sort\n");
}
int main(){
int sel;
ui();
printf("Enter your choice :" );
scanf("%d",&sel);
switch(sel){
case 1:seq();break;
case 2:bin();break;
case 3:bub();break;
}
}
