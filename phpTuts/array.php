<?php


//array_change_key_case //

//$arr1=array(100,20,300,400,500);
//$arr2=[10,20,30,40,50];
//$rem=[30,40];
//$asso=array("peter"=>"35","ben"=>"47" ,"surya"=>"a");

//print_r(array_change_key_case($asso,1));//if we pass 1 too then it will print keys int capital otherwise small letter

//print_r(array_chunk($asso,2)) ;// works with both (usually split the array into parts of given length)
//print_r(array_chunk($arr2,2));

//print_r(array_combine($arr1,$arr2));//we pass two array of same length then first array will be key and the values are of the second array if case of associative works with value only
//print_r(array_column($data,"uname"));

//print_r(array_count_values$arr1);//it will check the frequency of the every number that means how many times will the occurence comes 

//print_r(array_diff($arr2,$rem));//it will return the value only between the array which are not common like output will 10,30,40  if both array are different then  return only first array it works.

//print_r(array_diff_assoc(["garry=>10","harry"=>20],["jerry"]=>20));//pehle value check krega fir key dono same toh terminate  it is also case sensitive
//print_r(array_diff_key(["garry=>10","harry"=>20],["jerry"]=>20));//pehle key check krega fir value dono same toh terminate 
//$arr1=(array_fill(5,8,89));/* it can create array or edit an array too (index where to start,no.of elements,fill the value with ) replace or add the same value on every place , let the array be made first then print
 //POORA ARRAY UDA DEGA OR NEW DEDEGA*/
//print_r($arr1);
//print_r(array_intersect($arr1,$arr2));// return common between two array
//print_r(array_intersect_assoc()); // value pehle fir key
//print_r(array_intersect_key());//key pehle fir value
//print_r(array_key_exists("peter",$asso));// only work on asso and return 1 or 0 true or false 
//print_r(array_flip($asso)); //interchange keys to value and values to key
//print_r(array_keys($asso));// return all the keys with the index startin with zero
//print_r(array_sum($asso));// works with both type of array but needs to be numeric values , do only for numeric and leave rest
// product also
// for now first let the function workk then print 

//$data=[100,200,300,400];
//array_push($data,600);//push the elemnt at last 
//print_r($data);
//array_pop($data);
//print_r($data);

//unset($data[1]);// we can also remove att any index with key in assoo or by index in indexed no change in indexing
//print_r($data);

//print_r(array_reverse($data));
//$rep1=[1,3,5];
//$rep2=[6,5,4];
//print_r(array_replace($rep1,$rep2)); // some time works on staack so use print sath me ,replace first arrray with the values of second firts change ho jaegi second same rehgi 
//print_r($rep1);
//print_r(array_merge($rep1,$rep2));//merge two array
//print_r(array_search(3,$rep1));// value need to be searched then array name return 1 if duplicate return first ocurence


// array_splice it substitue the second array to the first array with 4 parameters 
//$data=[100,200,300,400];
//$rep1=[1,3];
//array_splice($data,1,2,$rep1);//(first array, first index of replacement , number of elements to be changed, second array)
//print_r($data);

// array_slice takes three parameeter and display elemnt on the basis of it
//print_r(array_slice($data,1,));//(array , from where to start , flase by default means change array index true no change index)

/////////////////////////////////////////////////////////////////////////
//sort()asending
//rsort() desending

//$data=[50,30,35,26,8];
//sort($data);// assending indexed


//rsort($data);// reverse inddeexedd;;
$new=["y"=>80,"m"=>90,"o"=>85];
ksort($new);// assending asso 
krsort($new);// reverse asso

//natsort()//this is case sensitive // sort according value 
//natcasesort()// case inssensitive

//shuffle()// shuffle the elements in the array 
//$arr=range((1,100))   // ek array bana dega waha se waha tk


// decision making 
/* like if else (ladders) nested is else swith nested switch ....



*/

