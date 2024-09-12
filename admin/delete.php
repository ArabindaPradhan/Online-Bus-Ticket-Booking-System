<?php

$conn = mysqli_connect("localhost","root","","online bus ticket booking system");
if(!$conn){
    die("error:".mysqli_error($conn));
}

if ($_GET['Regd_number']) {
    $Regd_number = $_GET['Regd_number'];
    $sql = "DELETE FROM `add_bus` WHERE `Regd_number` = '$Regd_number'";
    if(mysqli_query($conn,$sql)){
        header("location: See_details.php");
    }else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>