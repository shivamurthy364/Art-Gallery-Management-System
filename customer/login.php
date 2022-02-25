<?php
session_start();
$fname=$_POST["txtloginid"];
$custid=$_POST["txtpassword"];

$hostname="localhost";
$username="root";
$passwd="";

$array_login=array();
$conn=new PDO("mysql:host=$hostname;dbname=art_gallery",$username,$passwd);
$stmt=$conn->prepare("select * from customer where fname=? and custid=?");
$stmt->bindParam(1,$fname);
$stmt->bindParam(2,$custid);
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
    $_SESSION["fname"]=$fname;

    $_SESSION["custid"]=$custid;

    $_SESSION["array_login"]=$array_login[0]["custid"];

    header("Location:customer.html");

}

$conn=null;

?>


