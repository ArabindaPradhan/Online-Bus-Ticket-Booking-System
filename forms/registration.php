<?php
//Database connection
$conn = mysqli_connect('localhost','root','','online bus ticket booking system');
if(!$conn){
    die("Error :".mysqli_error($conn));
}

if(isset($_POST['Register'])){
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "insert into user_registration values('$f_name','$l_name','$mob','$email','$password')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('new record inserted')</script>";
        echo "<script>window.open('login.html','_self')</script>";
    }else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>