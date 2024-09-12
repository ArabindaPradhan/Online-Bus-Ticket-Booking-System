<?php

$conn = mysqli_connect("localhost","root","","online bus ticket booking system");
if(!$conn){
    die("error".mysqli_error($conn));
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $feed = $_POST['feed'];

    $sql = "insert into contact_us values('$name','$email','$mob','$feed')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('new record inserted')</script>";
    }else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
    }
?>