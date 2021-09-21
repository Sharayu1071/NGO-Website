<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparkone";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo "conn ok";
}
else{
    echo "failed conn".mysqli_connect_error();
}

?>