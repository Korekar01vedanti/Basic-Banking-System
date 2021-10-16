<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/newuser.css">
 <style>
    .bank1-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/login_img.jpg");
  height: 600px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
} 

</style>
</head>

<body>



  <?php
    include 'configure.php';
    if(isset($_POST['submit']))
    {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";

    $result=$con->query($sql);

    if($result){
               echo "<script> alert('Hurray! User created Successfully');
                               window.location='customer.php';
                     </script>";

    }
  }
?>  

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sparks Banking System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customer.php">Transaction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="History.php">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <div class="bank1-image">




  <h3 class="text-center text-white pt-5" style="font-size:35px"><b>CREATE NEW USER</b></h3>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">

      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="images/login_logo.png" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input  class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>

  </div>
</div>
</div>
</body>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html> 