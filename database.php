<?php 

$url='localhost';
$username='root';
$password='';
$dbname = "register";
$conn=mysqli_connect($url,$username,$password,"register");
if(!$conn){
    die('could not connect My Sql:' .mysql_error());
}

?>