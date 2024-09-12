<?php

$conn = mysqli_connect("localhost","root","","online bus ticket booking system");
if(!$conn){
    die("error:".mysqli_error($conn));
}

if(isset($_POST['Add'])){
    $r_name = $_POST['r_name'];
    $r_id = $_POST['r_id'];
    $start_point = $_POST['start_point'];
    $end_point = $_POST['end_point'];
    $Stoppage = $_POST['Stoppage'];
    $opt = "";
    foreach($Stoppage as $opt1){
        $opt.=$opt1.",";
    }

    $sql = "insert into add_route values('$r_name','$r_id','$start_point','$end_point','$opt')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('new record inserted')</script>";
    }else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>