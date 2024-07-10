<?php

include  'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['FName'];
    $lastName=$_POST['LName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    
$checkEmail="SELECT * from user where email='$email'";
$result=$conn->query($checkEmail);
if($result->num_rows>0){
    echo "email address already exist!";
}
else{
    $insertQuery="INSERT INTO user(firstName,lastName,email,password)
    VALUES('$firstname','$lastName','$email','$password')";
    if($conn->query($insertQuery)==TRUE){
        header("location:index.php");

    }
    else{
        echo "Error:".$conn->error;
    }
}
}
if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location:homepage.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or password";
    }
}
?>