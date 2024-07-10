<?php 
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
   <div style="text-align:center ; padding:15%">
    <p style="font-size:50px; font-weight:bold;">
Hellow  <?php 
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $query=msqli_query($conn, "SELECT user.* FROM 'user' WHERE user.email='$email'");
    while($row=mysqli_array($query)){
        echo $row['firstName'].''.$row['lastName'];
    }
}

:)
?>
    </p>
    <a href="logout.php">logout</a>
   </div> 
</body>
</html>