<?php
include("conncetion.php");
if(isset($_POST['log'])){
    $username=$_POST['username'];
    $password = $_POST['pass'];

    $sql="select * from users where first_name='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count>0){
        header("location:index.html");
    }else{
        echo '<script>
        window.location.href="index.html"
        alert("User name or Password is incorrect!!")
        </script>';
    }
}

?>