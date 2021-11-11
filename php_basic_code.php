
<?php
// php basic code sample
echo "<h3>Hello World !!!</h3> <br>";
echo  strlen("hey it's me smiley");
echo "<br>";
echo str_word_count("Medha paul is my name");
echo "<br>";
echo strrev("Aninda Bhattachajee");
echo "<br>";

 $text= "Medha Paul";
 $x= 10;
 var_dump($x);
 var_dump(is_int($x));
 $y=2.5;
  $z=10+2.5;
  var_dump($z);
 echo " My name  is $text <br>";
 echo " sum is= $x+$y";
 echo "$z";
 $value= True;
 $val= null;
 var_dump($val);

 $x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
echo "$x";
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));

echo "<br>";
echo(min(2,4,0,1,-1));
echo "<br>";
echo(max(1000,-1,0,2034));
echo(abs(-9));
echo "<br>";
echo(sqrt(90));
echo "<br>";
echo(rand(10, 100));
 
echo "<br>";

$t = date("H");
 echo "$t";

$value=10;

if($value==10)
{
    echo "True";
}
else {
    echo "Flase";
}
for($i=0;$i<5;$i++)
echo " the number is $i";

$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

$values= array("Medha","Aninda","Love");
echo "$values[0]";

for($x=0;$x<3;$x++)
echo"$values[$x]";

echo "<br>";

function fun($z)
{
    echo "$z";
}
fun("my hero");


function add($x,$y){

    return $sum= $x+$y;
}

echo add(10,10.2);

?>