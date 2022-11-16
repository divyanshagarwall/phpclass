<?php
  

//   echo // multiple data work no return
//   print  // single argument always return 1
//   printf // multiple argumennt length of / formating printitng support // suppot multipe parameter with there specifier otherwise use first argument
//   sprintf// 

    $var="hello 56";
  // echo $var,"hello ";
   echo(print($var)); // hello561
   echo(print(print($var)));
   echo(print("hello"($var)));

   echo(print(printf("hello").print($var)))
   sprintf(printf("$var","hello"));  //
    //printf("hello");// use first argument working
   sprintf(printf("%f",printf("hello",$var));  // hello5.000000 to manage 00 we use%2f,3f,6f
   sprintf(printf("%d %s", printf("hello"),("hi")));  // hello 5 hi  worked bcoz we provided foormate specifier
    echo(print(print(printf("%d%x","hello class php", print("hello class php"))))); 
    echo(print(print(sprintf("%d%x","hello class php", print("hello class php")))));
    echo(print(print(printf("%d%x","hello class php", sprintf("hello class php")))));
    $result= 15>2?(print(print(printf("%d%x","hello class php", sprintf("hello class php"))))):5;
    echo $result
    // null coilcing 

    $var1="hellow 56";
    $value=null;
    if($value ?? $var1){
        $result= 15>2?(print(print(printf("%d%x","hello class php", printf($var=34))))):5;
        echo $result,$value;
    }else{
        $var;
    }

    // ifesle-:_> try it with functions with argument 
    










int main()
{
 int n;
 float f;
 char d;
 scanf("%d",&n);
 
 scanf("%f",&f);
 
 scanf("%c",&c;
 
 scanf("%d",&d);
 

    return 0;
}