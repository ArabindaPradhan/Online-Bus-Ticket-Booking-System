<?php
//Database connection
$conn = mysqli_connect('localhost','root','','online bus ticket booking system');
if(!$conn){
    die("Error :".mysqli_error($conn));
}