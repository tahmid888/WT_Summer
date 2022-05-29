<?php
$name1=$_POST["num1"];
$name2=$_POST["num2"];
$func=$_POST["func"];




echo $name1;
echo" ";
echo $name2;
echo"<br>";
echo "1st number ".$name1;
echo"<br>";
echo "1st number ".$name2;
echo"<br>";




if ($func == "+")
{
    echo $name1 + $name2;
    
}

if ($func == "-")
{
    echo $name1 - $name2;
}
if ($func == "*")
{
    echo $name1 * $name2;
}
if ($func == "/")
{
    echo $name1 / $name2;
}
?>
