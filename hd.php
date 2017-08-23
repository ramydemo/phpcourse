
<!doctype html>


<html> 

<body>
<h1> Hellow world </h1>
<wbr>
<h1> this is testig</h1>
<?php
error_reporting(E_ALL);
error_reporting(E_NOTICE);
	echo 'hellow wolrd';
	
	echo '<br>' ;
	$room = 'Class a';
	echo $room;
	$room = 150;
	echo '<br>';
	echo $room;
	$room= 123.25;
	echo '<br>';
	echo $room;
	$first_name= 'ahmed';
	$last_nme= 'aly';
	echo '<br>' ;
	echo $first_name . $last_nme;
	$x = 100 ;
	echo '<br>' ;
	echo 'this is variable concontanate '.$x.' this is test' ;
	echo '<br>' ;
	//=
	//==
	//!=
	//if ($x ==100)
//
//		{
//			echo 'x=100';
//		}
//		else
//		{
//			echo 'x false';
//		}
		function condion($var1,$var2)
		{
			if($var1==$var2)
			{
				return 'equal';
			}
		  
		if ($var1 > $var2)
		{
			return 'var1 greater than var2';
		}
		else
		{
			return 'var1 less than var2';
		}
	}
echo condion(230,210);

//$mary =array();
echo "<br />";
$array =
array("name"=>"Toyota","type"=>"Celica","colour"=>"black","manufactured"=>"1991");
$array2 = array("Toyota","Celica","black","1991");
print_r ($array2 );
echo '<br />';
echo "Manufacturer: <b> {$array['name']} </b> <br />";
echo '<br />';

echo "Manufacturer: &lt;b&gt;{$array2[0]}&lt;/b&gt;&lt;br /&gt;\n";

$cars = array(
"car1" => array("make" => "Toyota","colour" => "Green","year" => 1999,"engine_cc" =>1998),
"car2" => array("make" => "BMW","colour" => "RED","year" => 2005,"engine_cc" =>2400),
"car3" => array("make" => "Renault","colour" => "White","year" => 1993,"engine_cc" =>1395),);

echo '<br />' . $cars['car1']['make'] . '<br />';
echo $cars['car3']['engine_cc'];

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";

// loop to read array reverse order
$my_array = array('a', 'b', 'c');
end($my_array);
while($i = current($my_array)) {
echo $i."\n";
prev($my_array);
}

// function read array by array_walk
function myfunction($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");

// another example array_walk with third paramter
function myfunction1($value,$key,$p)
{
echo "$key $p $value <br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction1","has the value");

// loop  for read array
for($i = 0; $i < 5; $i++)
{
echo($i . "<br />");
}
// loop for with array
$menu = array("Toast and Jam", "Bacon and Eggs", "Homefries", "Skillet", "Milk and
Cereal");
// note to self: get breakfast after writing this article
$count = count($menu);
for($i = 0; $i < $count; $i++)
{
$j=$i+1;
echo "$j. {$menu[$i]} <br />";
}
// for each loop throgh array
$array = array(
"1st" => "My House",
"2nd" => "My Car",
"3rd" => "My Lab"
);
// get all the array keys
$arrayKeys = array_keys($array);
// loop through the keys
for ($i=0; $i<count($array); $i++) {
// get each array value using its key
echo $array[($arrayKeys[$i])] . "<br />";
}

// but with for each :
foreach ($array as $someVar) {
echo $someVar . "<br />";
}
// another example for each
$array = array("1st" => "My House", "2nd" => "My Car", "3rd" => "My Lab");
foreach ($array as $i => $someVar) {
echo $i . ": " . $someVar . "<br />\n";
}
// dunamic function arguments
function mean()
{
$sum = 0;
$param_count = func_num_args();
for ($i = 0; $i < $param_count; $i++)
{
$sum += func_get_arg($i);
}
$mean = $sum / $param_count;
echo "Mean: {$mean}";
return NULL;
}
mean(6,4,2,8);
// class
class Some_Class
 {
	function my_function($text1,$text2,$text3)
	 {
	$return = $text1."\n\n".$text2."\n\n".$text3;
	return $return;
	 }
}
$my_class=new Some_Class();

$one = "One";
$two = "Two";
$three = "Three";
//$callback_func = "my_function";
$callback_func = array(&$my_class,"my_function");
$result = call_user_func($callback_func,$one,$two,$three);
echo $result;
// dynamic function php create name from itself in memory
$function_name=create_function('$one, $two','return $one+$two;');
echo '<br>' . $function_name."\n\n";
echo '<br>' . $function_name("1.5", "2");

// read number of character from file
$Handle = fopen('data.txt', 'r');
$String = fread($Handle, 154);
fclose($Handle);
echo $String;
// read file as array with for each
$Lines = file('data.txt');
foreach($Lines as $Key => $Line) {
$LineNum = $Key + 1;
echo "Line $LineNum: $Line";
}
// read and print all file content
echo '<br>'.file_get_contents('data.txt');
// check ending of file
function DetectLineEndings($String) {
if(false !== strpos($String, "\r\n")) return "end with r n";
elseif(false !== strpos($String, "\r")) return "end with r";
else return "\n";
}
echo '<br>'.DetectLineEndings($String);
// replace part of string
$String = str_replace(array("\n", "\r"), '', $String);

/* This part of the script saves the data to a file */
$Data = array(
'id' => 114,
'first name' => 'Foo',
'last name' => 'Bartholomew',
'age' => 21,
'country' => 'England'
);
$String = serialize($Data);
$Handle = fopen('data.dat', 'w');
fwrite($Handle, $String);
fclose($Handle);
/* Then, later on, we retrieve the data from the file and output it */
$String = file_get_contents('data.dat');
$Data = unserialize($String);
$Output = '';
foreach($Data as $Key => $Datum)
 {
	$Field = ucwords($Key);
	$Output .= "$Field: $Datum\n";
}
echo $Output;
if (1=='1') // === identical but '=='' compare value only
{
	echo 'true';
}
else
{
	echo 'false';
}
$myry=array('red','green','blue');
echo'<br>';
 var_dump($myry);// dispaly all content of array
echo '<br>'.$myry[0];
 
  $now = date('l, F jS, Y H:i A');
   $now1 = date('H:i');
  echo '<br>' . $now;
    echo '<br>' . $now1;
	?>
	<p><em>Right now</em> is <?php echo $now?>. <?php echo $now?> is a very important time,
because <?echo $now?> is the exact time you visited our wonderful web page.</p>



<?php
//if (isset($color = $_REQUEST["color"]));
IF (isset($color)):
IF ($color == ""):
echo "<p>You need to enter a color!</p>\n";
ELSE:
IF ($color == "white"):
$bgcolor = "grey";
ELSE:
$bgcolor = "white";
ENDIF;
?>
<p style="color: <?echo $color?>">
You said your favorite color was <?php echo $color?>.
</p>
<?php
ENDIF;
ELSE:
echo "<p>Welcome to our color extravaganza!</p>\n";
ENDIF;
?>
<form method="post" action="test.php">
<p>
What is your favorite color?
<input type="text" name="color" value="<?php echo $color?>" />
</p>
<input type="submit" />
</form>


</body>
 
</html>