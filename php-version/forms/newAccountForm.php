
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
</head>


<div class="text-white">
    <?php
        //set credentials with the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "accountData";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);


        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        

        $error = "default status";

        //extract data from the input tags
        $user = $pass = $passVer = false;

        if(isset($_POST['name'])){
            $user= $_POST['name'];
        }
        
        if(isset($_POST['pass'])){
            $pass= $_POST['pass'];
        }
        if(isset($_POST['verifypassword'])){
            $passVer= $_POST['verifypassword'];
        }  


        //stop the connection if any of the fields are empty.
        if(strlen($user)== 0 ||  strlen($pass)== 0   || strlen($passVer)== 0 ){
            $error =  "All the fields must be completed!";
            $conn->close();

        //password match verification
        }elseif($pass != $passVer){
            $error = "The passwords don't match!";
            $conn->close();
        }else{
            // insert into database(from the form)
            $sql = "INSERT INTO accounts (id, username, password, passwordAgain, email, gender)
            VALUES ('','$user', '$pass', '$passVer','','')";

            if ($conn->query($sql) === TRUE) {
                $error = "Account created!";
            } else {
                $error = "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }

    ?>
</div>


<div class="container-fluid text-white text-center">

    <h1 class="display-4">Login Project</h1>
    <p class="lead">Welcome to my simple project that includes a login form, registration form and a welcome page.</p>

</div>


<div class="login">
  
  <h3  class="text-white text-center mb-4">Create A New Account</h3>



<form action="#" method="post">

    <div class="form-group mb-4">
    <input type="text" name="name" class="form-control" class="form-control" placeholder="Enter Your Name"> 
    </div>

    <div class="form-group mb-4">
    <input type="password" name="pass" class="form-control" placeholder="Enter Your Password">
    </div>

    <div class="form-group mb-4">
    <input type="password" name="verifypassword"  class="form-control" placeholder="Re-enter Your Password">
    </div>

    <div class="form-group form-check mb-4">
      <small class="form-text text-danger"><?php echo $error; ?></small>
    </div>


    <input type="submit"  value="Create New Account" class="btn btn-danger col-md-12">
</form>
    <a href="../index.php">Go Back to Login Page</a>
</div>






