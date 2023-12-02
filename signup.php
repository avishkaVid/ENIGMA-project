<?php
include("conncetion.php");

if(isset($_POST['sign'])){
    $firstName= $_POST['fname'];
    $lastName= $_POST['lname'];
    $email= $_POST['email'];
    $pass= $_POST['pass'];
    $phoneNo= $_POST['phone'];

$sql="insert into users (first_name,last_name,email,password,phone_no)
values('$firstName','$lastName','$email','$pass','$phoneNo')";
$result=mysqli_query($conn,$sql);
if($result==1){
    header("location:index.html");
    
}else{
    echo'<script>
        window.location.href="signup.php";
        alert("Something went wrong!! Please try again");
    </script>';
}
}
?>
<!DOCTYPE html>

<head>
    <title>Sign up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<script>
 
   
</script>

</head>
<body>
    <div class="wrapper">
    <form  method="post">
    <h1>Sign up</h1>

    <div class="input-box">
        <input type ="text" placeholder="First Name" required name="fname" autocomplete="off">
        <i class='bx bxs-user'></i>
    </div>

    <div class ="input-box">
        <input type ="text" placeholder="Last Name" required name="lname" autocomplete="off">
        <i class='bx bxs-user'></i>
    </div>

    <div class ="input-box">
        <input type ="text" placeholder="Email" required name="email" autocomplete="off">
        <i class='bx bx-envelope'></i>
    </div>

    <div class ="input-box">
        <input type ="password" placeholder="Password" required name="pass" autocomplete="off">
        <i class='bx bxs-lock'></i>
    </div>

    <div class ="input-box">
        <input type ="text" placeholder="Phone No" required name="phone" autocomplete="off">
        <i class='bx bxs-phone-call'></i>
    </div>

    <button class="btn" type="submit" name="sign">Sign up</button>

    <div class="register">
        <p><a href="index11.html">Login </a></p>
    </div>


    </form>
    </div>
</body>


</html>