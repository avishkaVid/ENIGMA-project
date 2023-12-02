<?php
    include("conncetion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Item Management</title>
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
        <h1>Store item Management</h2>
        <a class="btn btn-primary my-5" href="backEndSignUp.php" role="button">Add new Item</a>
        
        <table class="table">
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql = "select * from tbl_item";
                    $result=mysqli_query($conn,$sql);

                    if($result){
                       // $row=mysqli_fetch_assoc($result);
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $itemCode=$row['item_code'];
                            $itemName=$row['Item_name'];
                            

                            echo'<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$itemCode.'</td> 
                            <td>'.$itemName.'</td>   

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