
<?php
session_start();

$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$dataerr="";
$value="";
if(isset($_POST["sm"]))
{
$FL=$_REQUEST["fn"];
$LN=$_REQUEST["ln"];
$em=$_REQUEST["em"];
$ag=$_REQUEST["age"];
$pas=$_REQUEST["pass"];

$pattern = "([0-9])";
if(!empty($FL))
{
if(preg_match($pattern, $FL))
{
    echo "First Name Contains Numbers<br>";
}
else
{
 $_SESSION["fn"]=$FL;   
 //echo $FL." ";
}
}
else
{
    $err1="Empty Box";
}
if(!empty($FL))
{
if(preg_match($pattern,$LN))
{
    echo "Last Name Contains Numbers <br>";
}
else
{
    $_SESSION["ln"]=$LN;
 //echo $LN."<br>";
}
}
else
{
    $err2="Empty Box";
}

if(isset($_REQUEST["des"]))
{
    echo $_REQUEST["des"]."<br>";
}
else
{
    $err3="DESIGNATION NOT SET<br>";
}
if(isset($_REQUEST["prel"]))
{
$PL=$_REQUEST["prel"];

foreach($_REQUEST['prel'] as $PL)
{

    echo $PL;
}
}
else
{
    $err4= "PREFERRED LANGUAGE Not Selected<br>";
}

if(strlen($em)==0)
{
    $err5="Must enter E-Mail<br>";
}
else
{
    echo $em."<br>"; 
}
if(strlen($pas)==0)
{
    $err6="!!!Enter Password!!!<br>";
}
else if(strlen($pas)<7)
{
    echo "Password must be more than 6 characters<br>";
}
else
{
    echo $pas;
}
echo $_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../upload/myfile.pdf"))
{
    $err8=" file uploaded";

}
else
{
    $err7=" uploading error";
    //echo $_FILES["fl"]["error"];
}
if($hasError==0)
{
    header("Location: ../view/page2.php");
}
$formdata=array(
    'First Name: '=>$FL,
    'Last Name: '=>$LN,
    'Age: '=>$ag,
    'Designation: '=>$_REQUEST["des"],
    'Preferred Language '=>$_REQUEST["prel"],
    'E-Mail: '=>$em,
    'Password: '=>$pas,
    'Files: ' => $_FILES["myfile"]["name"]
);
$existingdata = file_get_contents("../data/data.json");
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;
//Convert updated array to JSON
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$jsondata))
{
    $dataerr="Data Saved";

}
else
{
    $dataerr="no data saved";
}
}

?>