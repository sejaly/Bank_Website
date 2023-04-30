<?php
  include 'data.php';
  include 'transc.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
* {
  padding: 0;
  margin: 0;
  font-family: "Roboto", sans-serif;
}
nav {
  width: 100vw;
  height: 9vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 40px;
  background-color: black;
  color:white;
}
.container {
  height: 91vh;
  width: 100vw;
  background: linear-gradient(#cc2b5e , #753a88);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "Roboto", sans-serif;
  font-size: 18px;
}
.container table {
  width: 70vw;
}
.container table, th, td {
  border: 2px solid rgb(30, 0, 52);
  border-collapse: collapse;
}
.container th{
  text-align: center;
  padding: 10px 0;
}
.container td{
  text-align: center;
  padding: 10px 0;
}
.cusbtn {
  padding: 8px 10px;
  color: rgb(178, 192, 205);
  background-color: rgb(30, 0, 52);
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition-duration: 0.3s;
}
.cusbtn:hover {
  background-color: rgb(50, 53, 56);
}
.cus-main {
  border-bottom: 3.5px solid rgb(28, 43, 56);
}
.cus-main span {
  padding: 15px 0;
}
  </style>
</head>

<body>
  <nav>
    <i class="fa-solid fa-building-columns"></i>
  </nav>

<div class="container">
  <div class="head"><?php $row['name']; ?></div>
<table>
  <tr><th>Sr.no</th><th>Transaction time</th><th>From</th><th>To</th><th>Current balance</th></tr>
  <?php 
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th>". $sno . "</th>
            <td>". $row['Trans-ID'] . "</td>
            <td>". $row['name'] . "</td>
            <td>". $row['balance']. "</td>
            <td> <a href='cus".$sno.".php'><button class='cusbtn'>View Account</button></a> </td>
          </tr>";
        } 
  ?>
</table>
</div>

</body>
<script src="https://kit.fontawesome.com/13dda6b84a.js" crossorigin="anonymous"></script>
</html>
