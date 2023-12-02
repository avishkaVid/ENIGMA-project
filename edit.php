<?php
include("conncetion.php");

$id = $_GET['editid'];

$sql = "select * from staff_members where id = $id";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$fname = $row['first_name'];
$lname = $row['last_name'];
$email = $row['email'];
$role  = $row['role'];
$pass = $row['password'];
$phone = $row['phone_no'];


if(isset($_POST['update'])){
    $firstName= $_POST['fname'];
    $lastName= $_POST['lname'];
    $email= $_POST['email'];
    $role=$_POST['role'];
    $pass= $_POST['pass'];
    $phoneNo= $_POST['phone'];

$sql="update staff_members set id=$id , first_name='$firstName', last_name='$lastName', email='$email',role='$role', password='$pass',
phone_no='$phoneNo' where id=$id";

$result=mysqli_query($conn,$sql);
if($result){

    //echo "Update successfully!!!";

    header("location:staffManagement.php");
    
}else{
    die("Conncection failed".$conn->connect_error);
}
}
?>
<!DOCTYPE html>

<head>
    <title>Staff Maintanance</title>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



</head>
<body>
    <div class="wrapper">
    <form  method="post">
    <h1>Staff Maintanance</h1>

    <div class="input-box">
        <input type ="text" placeholder="First Name" required name="fname" autocomplete="off" value= <?php echo $fname;?>>
        <i class='bx bxs-user'></i>
    </div>

    <div class ="input-box">
        <input type ="text" placeholder="Last Name" required name="lname" autocomplete="off" value=<?php echo $lname;?>>
        <i class='bx bxs-user'></i>
    </div>

    <div class ="input-box">
        <input type ="text" placeholder="Email" required name="email" autocomplete="off" value = <?php echo $email;?>>
        <i class='bx bx-envelope'></i>
    </div>

    <div class ="dropdown">
            <select class="role" required name="role" value = <?php echo $role;?>>
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
        <input type ="text" placeholder="Phone No" required name="phone" autocomplete="off" value = <?php echo $phone;?>>
        <i class='bx bxs-phone-call'></i>
    </div>

    <button class="btn" type="submit" name="update">Update</button>

   

    </form>
    </div>
</body>


</html>