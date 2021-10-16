<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sparks Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" imageContent="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <style>
   body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.bank-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/bankimg.jpg");
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.bank-text {
  text-align: center;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
 </style> 
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SPARKS BANKING SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
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
            <a class="nav-link" href="History.php">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          
        </ul>
        
      </div>
    </div>
  </nav>
  <div class="bank-image">
  <div class="bank-text">
    <h1 style="font-size:40px"><b>WELCOME TO</b></h1><br>
    <h1 style="font-size:50px"><b>SPARKS BANKING SYSTEM</b></h1>
    <p><br></p>
  </div>
</div>
  
 
 
  
  <footer class="text-center">
  <h5 class="p-3 bg-dark text-white">Made by <b><u> Vedanti Korekar</u></b> <br>The Web Developer Intern at Spark Foundation</h5>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 