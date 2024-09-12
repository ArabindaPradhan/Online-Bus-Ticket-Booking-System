<?php

$conn = mysqli_connect("localhost","root","","online bus ticket booking system");
if(!$conn){
    die("error:".mysqli_error($conn));
}

if(isset($_POST['Add'])){
    $b_name = $_POST['b_name'];
    $regd = $_POST['regd'];
    $route = $_POST['route'];
    $bus_type = $_POST['bus_type'];
    $type = "";
    foreach($bus_type as $type1){
        $type.=$type1.","; 
    }
    $d_time=$_POST['d_time'];
    $a_time=$_POST['a_time'];
    $facilities=$_POST['Facilities'];
    $check = "";
    foreach($facilities as $check1){
        $check.=$check1.","; 
    }

    $sql = "insert into add_bus values('$b_name','$regd','$route','$type','$d_time','$a_time','$check')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('new record inserted')</script>";
        echo "<script>window.open('add_bus.html','_self')</script>";
    }else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>