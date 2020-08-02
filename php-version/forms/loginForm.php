
<?php

//set credentials with the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accountdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$errorLogin = "";

//we use this to check the first text box value. If this textbox is empty
if(isset($_POST['user'])){
  
  $uname=$_POST['user']; //we first need to clear the variable
  $password = $_POST['pass'];

  $query = mysqli_query($conn, "SELECT * FROM accounts WHERE username='".$uname."' AND password='".$password."' " );
  

  //now we check the record

  $rows = mysqli_num_rows($query); //verifies the query integrity. If good it spits 1, if bad spits 0.

  if($rows == 1){
      header("Location: mainPage.php");
      $errorLogin = "you are logged in!";
      $conn->close();

  }else{
    $errorLogin = "You have entered the wrong credentials!";
    $conn->close();
  }
}

  
?>

<style>
body{
   
    background-image: url(img/ugur-akdemir-FABH5NJEMGM-unsplash.jpg);
    background-size: cover;
    background-attachment: fixed;
    
  }
  
  
  .login{
  
    width:360px;
    margin: 50px auto;
    border-radius: 10px;
    
    padding: 12px 35px 26px;
    margin-top:70px;
    background-color: rgba(0,0,0,0.7);
  
  }

</style>


<div class="container-fluid text-white text-center">

    <h1 class="display-4">Login Project</h1>
    <p class="lead">Welcome to my simple project that includes a login form, registration form and a welcome page.</p>

</div>


<div class="login">
  
  <h2  class="text-white text-center mb-4">Login Here</h2>
      
  <form method="post" action="#">
    <div class="form-group mb-5">
      <input type="text" class="form-control" name="user" aria-describedby="emailHelp" placeholder= "Enter your Account or Username">
    </div>
    <div class="form-group mb-4">
      <input type="password" class="form-control" name="pass" placeholder= "Enter Your Password">
    </div>
    <div class="form-group form-check mb-4">
      <small class="form-text text-white">You don't have an account? Press <a href="forms/newAccountForm.php">here!</a></small>
      <small class="form-text text-danger"><?php echo $errorLogin; ?></small>
    </div>
    <button type="submit" class="btn btn-primary col-md-12">Login</button>
  </form>
    
</div>