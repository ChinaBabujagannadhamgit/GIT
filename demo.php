<!DOCTYPE html>
<html>
<body>

<?php
/*$c = "Hello world!";
$v = 'Hello world!';

var_dump($c);
echo "<br>";
var_dump($v);
echo "<br>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";

$x = null;
var_dump($x);
echo "<br>";

$y = 5;
var_dump($y);
echo "<br>";

$y= "Hello";
var_dump($y);
echo "<br>";

$q = 5;
$q = (string) $q;
var_dump($q);
echo "<br>";

echo "Hello@<br>";
echo 'Hello@<br>';

$d = "John";
echo "Hello $d";
*/

$upper="Chinni Is a Good Boy";

echo strtoupper($upper);

echo "<br>";

echo strtolower($upper);

echo "<br>";

echo str_replace("Chinni","Anees",$upper);

echo "<br>";

echo strrev($upper);

echo "<br>";

echo trim($upper);

echo "<br>";

$hen= explode(" ",$upper);

print_r($hen);

echo "<br>";

$a = "Hello";
$n = "World";

$z = $a.$n;
echo $z;

echo "<br>";

$z = "$a $n";
echo $z;

echo "<br>";

$k = $a." ".$n;
echo $k;

echo "<br>";

$x = "Hello World!";

echo substr($x, 6, 5);

echo "<br>";

$x = "Hello World!";

echo substr($x,0);

echo "<br>";

$x = "Hello World!";

echo substr($x, -5, 3);

echo "<br>";

$x = "Hi, how are you?";

echo substr($x, 5, -3);

echo "<br>";

$x = 5985;
var_dump(is_int($x));

echo "<br>";

$x = 59.85;
var_dump(is_int($x));

echo "<br>";

define("greeting","Welcome to ChinniTutorial");

echo "greeting";

echo "<br>";

const myvar="volvo";

echo myvar;

echo "<br>";

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}

myTest();

echo "<br>";

$e=10;

$E=20;

echo $e += $E;

echo "<br>";

echo $e -=$E;

echo "<br>";

if ($e<$E) {
  echo "Have a good day!";
}

echo "<br>";

$t = date("H");

print $t;

echo "<br>";

if ($t < "20")
{
  echo "Have a good day!";
}
else
{
  echo "good night!";
}

echo "<br>";

$t = date("H");

if ($t < "10") 
{
  echo "Have a good morning!";
}
elseif ($t < "20") 
{
  echo "Have a good day!";
}
else
{
  echo "Have a good night!";
}

echo "<br>";

$favcolor = "red";

switch ($favcolor) 
{
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br>";

$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}

echo "<br>";

function setHeight($minheight = 50) 
{
  echo "The height is : $minheight <br>";
}

setHeight(350);

setHeight(); // will use the default value of 50

setHeight(135);

setHeight(80);

echo "<br>";

function sum($x, $y) 
{
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";

echo "<br>";

echo "7 + 13 = " . sum(7, 13) . "<br>";

echo "<br>";

echo "2 + 4 = " . sum(2, 4);

echo "<br>";

function add_five(&$value)
{
  $value += 5;
}

$num = 2;

add_five($num);

echo $num;

echo "<br>";

$str = "Visit W3Schools";

$pattern = "/w3schools/i";

echo preg_match($pattern, $str);

echo "<br>";

$str = "The rain in SPAIN falls mainly on the plains.";

$pattern = "/ain/i";

echo preg_match_all($pattern, $str);

echo "<br>";

$str = "Visit Microsoft!";

$pattern = "/microsoft/i";

echo preg_replace($pattern, "W3Schools", $str);



?>
</body>
</html>
