<?php
if (($_SERVER["REQUEST_METHOD"] == "POST") && (array_key_exists('addbtn', $_POST))) {
 $old_amount = $row['balance'];
 $withdraw_amount = $_POST['addfund'];
 $srno = $row['srno'];
 $new_add_amount = $old_amount + $withdraw_amount;
 $s = "UPDATE `bankrecord` SET `balance` = '$new_add_amount' WHERE `bankrecord`.`srno` = $srno";
 $result = mysqli_query($conn, $s);
 $s = "UPDATE `bankrecord` SET `mstamp` = current_timestamp() WHERE `bankrecord`.`srno` = $srno";
 $result = mysqli_query($conn, $s);
 $insert = "INSERT INTO `bankdata` (`srno`, `tra`, `fromthe`, `tothe`, `amount`, `current balance`) VALUES (NULL, current_timestamp(), 'self', 'self', $withdraw_amount, $new_add_amount)";
 $result = mysqli_query($conn, $insert);
 }



  if ($_SERVER["REQUEST_METHOD"] == "POST" && array_key_exists('withdrawbtn', $_POST)) {
  $old_amount = $row['balance'];
  $withdraw_amount = $_POST['withdrawfund'];
  $srno = $row['srno'];
  $new_withdraw_amount = $old_amount - $withdraw_amount;
  $s1 = "UPDATE `bankrecord` SET `balance` = '$new_withdraw_amount' WHERE `bankrecord`.`srno` = $srno";
  $result = mysqli_query($conn, $s1);
  $s = "UPDATE `bankrecord` SET `mstamp` = current_timestamp() WHERE `bankrecord`.`srno` = $srno";
  $result = mysqli_query($conn, $s);
  $insert = "INSERT INTO `bankdata` (`srno`, `tra`, `fromthe`, `tothe`, `amount`, `current balance`) VALUES (NULL, current_timestamp(), 'self', 'self',-1*($withdraw_amount), $new_withdraw_amount)";
  $result = mysqli_query($conn, $insert);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && array_key_exists('transferbtn', $_POST)) {
   $lenewala = $_POST['holders'];
   $old_amount = $row['balance'];
   $withdra_amount = $_POST['tname'];
   $srno = $row['srno'];
   $sql1 = "SELECT * FROM `bankrecord` WHERE `bankrecord`.`srno` = $lenewala";
   $result1 = mysqli_query($conn, $sql1);
   $row1 = mysqli_fetch_assoc($result1);
   $new_withdraw_amount = $old_amount - $withdra_amount;
   $add_amount_lenewala = $row1['balance'] + $withdra_amount;
   $s3 = "UPDATE `bankrecord` SET `balance` = '$new_withdraw_amount' WHERE `bankrecord`.`srno` = $srno";
   $s4 = "UPDATE `bankrecord` SET `balance` = '$add_amount_lenewala' WHERE `bankrecord`.`srno` = $lenewala";
   $result = mysqli_query($conn, $s3);
   $result = mysqli_query($conn, $s4);
   $name = $row1['name'];
   $insert = "INSERT INTO `bankdata` (`srno`, `tra`, `fromthe`, `tothe`, `amount`, `current balance`) VALUES (NULL, current_timestamp(), 'self', $name,-1*($withdra_amount), $new_withdraw_amount)";
   $result = mysqli_query($conn, $insert);
  }


?>