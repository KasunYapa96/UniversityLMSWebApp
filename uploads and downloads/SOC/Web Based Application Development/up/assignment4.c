#include<stdio.h>
void add(float x,float y){
     float z=x+y;
     printf("Answer is : %.2f",z);
}
void sub(float x,float y){
     float z=x-y;
     printf("Answer is : %.2f",z);
}
void mul(float x,float y){
     float z=x*y;
     printf("Answer is : %.2f",z);
}
void div(float x,float y){
     float z=x/y;
     printf("Answer is : %.2f",z);
}
void mod(int x,int y){
     int z=x%y;
     printf("Answer is : %d",z);
}
void ui(){
printf("***************CALCULATOR***************\n");
printf("What do you want to do?select one from menu\n1>ADD\n2>SUB\n3>MUL\n4>DIV\n5>MOD\n");
}
int main()
{
int sel;
float a,b;
ui();
printf("Enter your choice :" );
scanf("%d",&sel);
printf("enter no1: ");
scanf("%f",&a);
printf("enter no2: ");
scanf("%f",&b);
switch(sel){
case 1:add(a,b);break;
case 2:sub(a,b);break;
case 3:mul(a,b);break;
case 4:div(a,b);break;
case 5:mod(a,b);break;
}

}
