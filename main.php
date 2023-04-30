<?php include 'transc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
      color: white;
    }

    .container1 {
      height: 91vh;
      width: 100vw;
      background: linear-gradient(#cc2b5e, #753a88);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-family: "Roboto", sans-serif;
      font-size: 18px;
    }

    .con-main1 {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 50vw;
      height: 85.5%;
      box-shadow: 0 0 5px 1px black;
      background: linear-gradient(white, rgb(183, 183, 183), rgb(126, 126, 126));
    }

    .con-main1 .con1 {
      padding: 12px 0;
      background-color: rgb(183, 183, 183);
      width: 100%;
      text-align: center;
      font-weight: bold;
      font-size: 20px;
    }

    .con-main1 .con2 {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      margin: 15px 0 15px 0;
    }

    .image {
      margin-right: 120px;
    }

    .image img {
      width: 160px;
      height: 190px
    }

    .detail p {
      /* padding:7px; */
    }

    .con-main1 .con3 {
      width: 77%;
    }

    .con-main1 .con4 {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
    }

    .con-main1 .con4 .btn-con4 {
      padding: 9px;
      width: 130px;
      border: none;
      margin: 15px 15px;
      transition-duration: 0.3s;
      cursor: pointer;
      font-size: 15px;
    }

    .con4 button:hover {
      background-color: rgb(219, 218, 218)
    }

    .addfundinput {
      width: 90%;
      padding: 5px;
      outline: none;
    }

    .container1 table {
      width: 70vw;
    }

    .container1 table,
    th,
    td {
      border: 2px solid rgb(30, 0, 52);
      border-collapse: collapse;
    }

    .container1 th {
      text-align: center;
      padding: 10px 0;
    }

    .container1 td {
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

    .con-main2 {
      display: none;
      /* font-size: 18px; */
    }
  </style>
</head>

<body>
  <!-- Modal -->
  <form class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Funds</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><b>Enter Amount</b></p>
          <input type="number" class="addfundinput" name="addfund">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" name="addbtn">Add Fund</button>
        </div>
      </div>
    </div>
  </form>

  <!-- Modal -->
  <form class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true"
    method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModal1Label">Withdraw Funds</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><b>Enter Amount</b></p>
          <input type="number" class="addfundinput" name="withdrawfund">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" style="background:red;border:none" name="withdrawbtn">Withdraw
            Funds</button>
        </div>
      </div>
    </div>
  </form>



  <nav>
    <i class="fa-solid fa-building-columns"></i>
  </nav>
  <div class="container1">
    <?php
  if(array_key_exists('addbtn', $_POST)){
    echo
    '
    <div class="alert alert-success" role="alert">
     Money has been added Successfully !
    </div>
    ';
  }
  ?>
    <div class="con-main1">
      <div class="con1">Customer Account Details</div>
      <div class="con2">
        <div class="image"><img src="<?php echo $row['image']; ?>" alt=""></div>
        <div class="detail">
          <?php
        echo 
        "<p> <b>Name :</b> " . $row['name'] .  "</p>".
        "<p> <b>Date Of Birth :</b> ". $row['dob'] ."</p>".
        "<p> <b>Gender :</b> ". $row['gender'] ."</p>".
        "<p> <b>Created on :</b> " .$row['tstamp']. "</p>".
        "<p> <b>Modified on :</b> " .$row['mstamp']. "</p>";
        ?>
        </div>
      </div>
      <div class="con3">
        <?php
        echo 
        "<p> <b>Transaction ID :</b> " . $row['Trans-ID'] .  "</p>".
        "<p> <b>Email ID :</b> ". $row['email'] ."</p>".
        "<p> <b>Address :</b> ". $row['address'] ."</p>".
        "<p> <b>Contact no :</b> ". $row['contact'] ."</p>".
        "<p> <b>Current Balance :</b> " .$row['balance']. "</p>";
        ?>
      </div>
      <form class="con4">
        <input type="button" value="View Transaction" class="btn-con4" id="View_Transaction">
        <button type="button" class="btn-con4" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add Funds
        </button>
        <button type="button" class="btn-con4" data-bs-toggle="modal" data-bs-target="#exampleModal1"> Withdraw Funds
        </button>
        <button type="button" class="btn-con4" data-bs-toggle="modal" data-bs-target="#exampleModal2"> Transfer Funds
        </button>
      </form>
    </div>

    <div class="con-main2">
      <div class="head">
        <?php $row['name']; ?>
      </div>
      <table>
        <tr>
          <th>Sr.no</th>
          <th>Transaction time</th>
          <th>From</th>
          <th>To</th>
          <th>Amount</th>
          <th>Current balance</th>
        </tr>
        <?php 
              while($col = mysqli_fetch_assoc($r)){
                echo "<tr>
              <th>". $col['srno'] . "</th>
              <td>". $col['tra']. "</td>
              <td>". $col['fromthe'] . "</td>
              <td>". $col['tothe'] . "</td>
              <td>". $col['amount']. "</td>
              <td>". $col['current balance']. "</td>
            </tr>";
              }
    ?>
      </table>
    </div>
  </div>

  <!-- Modal -->
  <form class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true"
    method="post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModal2Label">Transfer Funds to</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><b>Beneficitary Account </b></p>
          <select class="addfundinput" id="cars" name="holders">
            <option value="1">Rajkamal Yadav</option>
            <option value="2">Sejal Yadav</option>
            <option value="3">Vansh Yadav</option>
            <option value="4">Shasank Yadav</option>
            <option value="5">Ashutosh Pandey</option>
            <option value="6">Anjeeta Goud</option>
            <option value="7">Kiara Advani</option>
            <option value="8">Akash Vishwakarma</option>
            <option value="9">Emma Watson</option>
            <option value="10">Sonam Bajwa</option>
          </select>
          <br><br>
          <p><b>Enter Amount</b></p>
          <input type="number" class="addfundinput" name="tname">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" style="background:red;border:none" name="transferbtn">Transfer
            Funds</button>
        </div>
      </div>
    </div>
  </form>

</body>
<?php include 'data.php'; ?>
<script src="https://kit.fontawesome.com/13dda6b84a.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>


<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
  con_main1 = document.getElementsByClassName('con-main1')
  con_main2 = document.getElementsByClassName('con-main2')
  document.getElementById('View_Transaction').addEventListener('click', () => {
    con_main1[0].style.display = "none";
    con_main2[0].style.display = "block";
  })
</script>