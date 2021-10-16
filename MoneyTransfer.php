<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="caa/table.css">
    <link rel="stylesheet" type="text/css" href="css/styling.css">
    
</head>

<body>

<?php
  include 'configure.php';
  $sql = "SELECT * FROM `transaction`";
  $result=$con->query($sql);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container-fluid">
  <a class="navbar-brand" href="#">Sparks Banking System</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="index.php">Home</a>

      </li>

      <li class="nav-item">
        <a class="nav-link" href="Login.php">Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="customer.php">Transaction</a>
      </li>

       <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="History.php">History</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
    </div>

</div>
</nav>


	<div class="container">
        <h3 class="text-center pt-5"><br><b>TRANSACTION HISTORY</b></h3>

       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'configure.php';
            $sql = "SELECT * FROM `transaction`";
            $result=$con->query($sql);

            while($rows=mysqli_fetch_assoc($result)){

        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
            </tr>   
        <?php
            }

        ?>
        </body>
    </table>
         
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html> 