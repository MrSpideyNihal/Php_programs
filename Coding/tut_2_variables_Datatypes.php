<?php

//variables are nothing but a container used to store data
//syntax : $var_name = value;
define('P',3.14); //ignore it until line 45


$name = "Mrspidey";
echo"$name";

/*
DataTypes their are total no. of 8 datatypes in php !
   
1)Integer
2)Float
3)String
4)Boolean

we will do this all later---->
5)Array
6)Object
7)Resource
8)Null

*/

$a = 10;             //1)Integer
$b = 10.5;          //2)Float
$Name = "Nihal";   //3)String
$mvp = True;      //4)Boolean

//var_dump is used to know dataType of Variable_
echo"<br>"; // for print in newline try it yourself without it!
echo "$a is an ",var_dump($a);
echo"<br>";
echo "$b is an ",var_dump($b);
echo"<br>";
echo "$Name is an ",var_dump($Name);
echo"<br>";
echo "$mvp is an ",var_dump($mvp);


// Now we will know about Constants :
//a var which has a constant value :
// syntax : 
//          define('P',3.14);
//now if i used word P it will be value 3.14 (check line 5)
echo"<br>";

echo P;//what will it print? : 'P' or 3.14 

?>