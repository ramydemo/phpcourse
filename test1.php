<?php
$string='hello World! <br />';
echo $string;
$string=709;
print $string;
echo '<br />' ;
printf('%s',$string);
$x='toothpath';
$bb='cup $x <br />';
echo $bb;
$bb="cup $x";
echo $bb;
echo '<br />';
$x=10;
++$x;
echo $x;
echo '<br />';
$x--;
echo $x;
echo "توضح للزائد والناقص للمتغير ,<br /> this is test";
$string="تجربة\nلطباعة\nسطر\nجديد\n";
$string=nl2br($string);
echo $string;
$string="تجربة &tab; لطباعة &tab; سطر &tab; جديد";
echo $string;
 
function print_two_strings($var1='hellow world', $var2='how are you')
{
echo "<br>";
echo $var1;
echo "<br>";
echo $var2;
return NULL;
}
print_two_strings('aly');

$a = 5;
$b =& $a;
$b = 3;

echo $a; // 3
echo $b; // 3

$function_name=create_function('$one, $two','return $one+$two;');
echo $function_name."\n\n";
echo $function_name("1.5", "2");
?>
