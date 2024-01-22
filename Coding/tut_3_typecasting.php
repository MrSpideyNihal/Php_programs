<?php
// Type casting means changing datatype of a var no the value!
/*

we can perform it in  6 ways : 
1)Integer
2)Float
3)String
4)Boolean
we will do this later---->(you will use this 2 rarely)
5)Array
6)Object

*/

$num = 1;
$float_num = (double)$num; 
$string_num = (String)$num;
$Boolean_num = (Boolean)$num;

echo"<br>"; 
echo "$num is an ",gettype($num);
echo"<br>";
echo "$float_num is an ",gettype($float_num);
echo"<br>";
echo "$string_num is an ",gettype($string_num);
echo"<br>";
echo "$Boolean_num is an ",gettype($Boolean_num);
echo"<br>"; 
settype($num,'string');
echo "$num is an ",gettype($num);



//imp methods gettype()
//settype()
?>