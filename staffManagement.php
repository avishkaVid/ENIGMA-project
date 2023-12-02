<?php
    include("conncetion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


   <style>
        .container{
            margin-top:15px;
            font-family:Arial;
        }

   </style>


</head>


<body>
    <div class="container">
        <h1>Staff Management</h2>
        <a class="btn btn-primary my-5" href="backEndSignUp.php" role="button">New Staff Registration</a>
        
        <table class="table">
            <thead >
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Password</th>
                    <th>Phone No</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql = "select * from staff_members";
                    $result=mysqli_query($conn,$sql);

                    if($result){
                       // $row=mysqli_fetch_assoc($result);
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $first_name=$row['first_name'];
                            $last_name=$row['last_name'];
                            $email=$row['email'];
                            $role=$row['role'];
                            $pass=$row['password'];
                            $phoneNo=$row['phone_no'];

                            echo'<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$first_name.'</td> 
                            <td>'.$last_name.'</td>   
                            <td>'.$email.'</td>  
                            <td>'.$role.'</td>  
                            <td>'.$pass.'</td>
                            <td>'.$phoneNo.'</td>  

                             <td>
                                <button class="btn btn-primary"><a href="edit.php? editid='.$id.'" class="text text-light">Edit</a></button>
                                <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text text-light">Delete</a></button>
                            </td>
                            </tr>';
                        }
                    }

                ?>
                
                   
            </tbody>
                    
                        
        </table>
    </div>
    
</body>
</html>