<?php
require_once('dbconnection.php');

session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $sql    = "SELECT * FROM `n2a` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $sql) or die();
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Email/password.</h3><br/>
                  </div>";
        }
    } else {
  }
?>
<!DOCTYPE html>
<html>

<head>
<title>N2A TUTORIALS Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>

header{
    background-color: black;
    color: white;
    text-align: center;
    margin: 20px 20px 20px 20px;
    padding: 15px 15px 15px 15px 15px;
    font-family: 'Times New Roman', Times, serif;
    font-size: 25px;
    border: 2px solid black;

}

header img{
    margin: -20px 20px 20px 20px;
    padding: 15px 15px 15px 15px 15px;

}

header p{
    margin: -20px 20px 20px 20px;
    padding: 15px 15px 15px 15px 15px;
}

header h6{
    margin-bottom: 3px;
    color: yellow;
}

    body,
    h1 {
        font-family: 'Times New Roman', Times, serif;
    }

    body,
    html {
        background-color: black;
       
    }

    .bgimg {

        min-height: 100%;
        background-position: center;
        background-size: cover;
    }

    .form-body{
        width: 100%;
        margin: auto; 
        padding: 20px 150px 20px 150px;
        border-style: solid; 
        border-color:2px solid white; 
        background-color:rgb(26, 26, 66);
    }

</style>

<body>
    <div class="body" style="margin: auto;width: max-content; padding: 2px; background-color: black;">
    <script src="Validation.js"> </script>

    <header>
        <div>
            <h3>
                <img src="img/booklogo.jpg" alt="this image is not loading !" width="120px" height="70px">
                <p>
                    <b><u>N2A TUTORIALS</u></b><br><br>
                    <b><u>LOGIN</u></b>
                </p>
            </h3>
            <!-- <script>document.write(' <h3>Welcome !</h3>');</script> -->
            <script src="js/greeting.js"></script>
            <h6 class="p1">Free E-Books | Tutorial Videos | Easy Learning | Top Educators</h6>
        </div>
    </header>

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">


                        <form action="" method="post" class="requires-validation"  name="login" enctype="multipart/form-data">

                            

                            <div class="col-md-12">
                                <b> <label for="email" style="color: white;">Email :</label></b>
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                <div class="valid-feedback">Email field is valid!</div>
                                <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div><br>


                            <div class="col-md-12">
                                <b> <label for="mobile" style="color: white;">Passsword :</b>
                                <input class="form-control" type="password" name="password" min="0" placeholder="Enter Your Password" required>
                                <br>

                                    <div class="form-button mt-3">
                                        <button id="submit" type="submit" name="login" value="login" class="btn btn-primary">
                                            <!-- <a href="show.php" style="color: white;">  -->
                                            login
                                            <!-- </a>  -->
                                        </button>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="register.php">
                                            <div style="color:white;"> <b>New User ? <u>click here to Register</u>

                                            </div>
                                        </a>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>