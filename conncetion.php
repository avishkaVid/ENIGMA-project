<?php

$severname='localhost';
$dbuser='root';
$dbpass='root';
$dbname='mydb';


$conn= new mysqli($severname,$dbuser,$dbpass,$dbname,3307);
if($conn->connect_error){
    die("Conncection failed".$conn->connect_error);
}
else{
    //echo "Conncetion successful!!";

}

