<?php
include("conncetion.php");

if(isset($_POST['create'])){
    $firstName= $_POST['fname'];
    $lastName= $_POST['lname'];
    $email= $_POST['email'];
    $role=$_POST['role'];
    $pass= $_POST['pass'];
    $phoneNo= $_POST['phone'];

$sql="insert into staff_members (first_name,last_name,email,role,password,phone_no)
values('$firstName','$lastName','$email','$role','$pass','$phoneNo')";
$result=mysqli_query($conn,$sql);
if($result){
    //echo "Registration successful!!!";

    header("location:staffManagement.php");
    
}else{
    '<script>
        window.location.href="backEndSignUp.php";
        alert("Something went wrong!! Please try again");
    </script>';
}
}
?>
<!DOCTYPE html>

<head>
    <title>Back end Sign up</title>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<script>
 
   
</script>

</head>
<body>
    <div class="wrapper">
    <form  method="post">
    <h1>Staff Registration</h1>

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

    <div class ="dropdown">
            <select class="role" required name="role">
                <?php
                    include('connection.php');
                    $role = mysqli_query($conn,"Select * from tbl_staff_role");
                    while($r=mysqli_fetch_array($role)) {

                ?>
                
                <option value="<?php echo $r['id']?>"><?php echo $r['role']?></option>
                <?php } ?>

            </select>
            <div class="icon-con">
                <i class='bx bx-menu'></i>
            </div>

        
    </div>

    <div class ="input-box">
        <input type ="password" placeholder="Password" required  name="pass" autocomplete="off">
        <i class='bx bxs-lock'></i>
    </div>

    <div class ="input-box">
        <input type ="text" placeholder="Phone No" required name="phone" autocomplete="off">
        <i class='bx bxs-phone-call'></i>
    </div>

    <button class="btn" type="submit" name="create">Create</button>

   

    </form>
    </div>
</body>


</html>