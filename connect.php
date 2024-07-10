<?php

$host="localhost";
$user="root";
$pass="";
$db="form";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "fail to cannect db".$conn->connect_error;
}
?>