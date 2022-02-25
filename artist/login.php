<?php
session_start();
$fname1=$_POST["txtloginid"];
$artistid=$_POST["txtpassword"];

$hostname="localhost";
$username="root";
$passwd="";

$array_login=array();
$conn=new PDO("mysql:host=$hostname;dbname=art_gallery",$username,$passwd);
$stmt=$conn->prepare("select * from artist where fname1=? and artistid=?");
$stmt->bindParam(1,$fname1);
$stmt->bindParam(2,$artistid);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($array_login,$row);
}
$c=count($array_login);

$conn=null;

if($c==0)

{

    echo "<script>alert('Invalid Login');</script>";

}

else

{
    $_SESSION["fname1"]=$fname1;

    $_SESSION["artistid"]=$artistid;

    $_SESSION["array_login"]=$array_login[0]["artistid"];

    header("Location:artist.html");

}

$conn=null;

?> -->



