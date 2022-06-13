

<?php

$name1=$_POST["num1"];
$name2=$_POST["num2"];
$buttonr=$_POST["button"];

echo $name1;
echo $name2;
echo $submit;



if($buttonr=="+")
{
    echo $name1+$name2
}
if($buttonr=="-")
{
    echo $name1-$name2
}
if($buttonr=="*")
{
    echo $name1*$name2
}
if($buttonr=="/")
{
    echo $name1/$name2
}


?>