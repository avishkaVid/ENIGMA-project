<?php
include("conncetion.php");

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql="delete from staff_members where id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        //echo "Delete successfully!!";
        header("location:staffManagement.php");
    }else{
        die("Conncection failed".$conn->connect_error);
    }
}
?>