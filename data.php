<?php
$servername = "localhost";
$username = "root";
$password = "9769616714";
$database = "bank";
$conn = mysqli_connect( $servername, $username, $password, $database);
if( ! $conn){
  die("Error Occured Please Try again Later");
}
$sql = "SELECT * FROM `bankrecord`";
        $result = mysqli_query($conn, $sql);

        $trans = "SELECT * FROM `bankdata`";
        $r = mysqli_query($conn, $trans);
?>
