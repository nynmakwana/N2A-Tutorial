<?php
session_start();

require_once('dbconnection.php');

if (isset($_REQUEST['email'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    // $email = $_POST['email'];
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $mobile = $_POST['mobile'];
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    // $password = $_POST['password'];

    // $city = $_POST['city'];
    // $gender = $_POST['gender'];
    // $hobby = $_POST['hobby'];

    $sql = "INSERT INTO n2a  (fname,lname,email,mobile,password) VALUES ( '$fname','$lname','$email', '$mobile', '" . md5($password) . "')";

    $sql1 = "select * from n2a where (email='$email');";
    $res = mysqli_query($con, $sql1);

    if (mysqli_num_rows($res) > 0) {

        $row = mysqli_fetch_assoc($res);
        if ($email == isset($row['email'])) {
            echo "email already exists";
        }
    }
    // echo $sql;

    if (!mysqli_query($con, $sql)) {
        echo "Error" . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
<title>N2A TUTORIALS Sign Up</title>
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
        background-color:black;
    }

    .bgimg {

        min-height: 100%;
        background-position: center;
        background-size: cover;
    }

</style>

<body> 
    <div class="body" style="margin: auto;width: max-content; padding: 2px;">
    <script src="validation.js"> </script>

    <header>
        <div>
            <h3>
                <img src="img/booklogo.jpg" alt="this image is not loading !" width="120px" height="70px">
                <p>
                    <b><u>N2A TUTORIALS</u></b><br><br>
                    <b><u>REGISTER YOURSELF</u></b>
                </p>
            </h3>
            <!-- <script>document.write(' <h3>Welcome !</h3>');</script> -->
            <script src="js/greeting.js"></script>
            <h6 class="p1">Free E-Books | Tutorial Videos | Easy Learning | Top Educators</h6>
        </div>
    </header>

    <div class="form-body" style="width: 100%; margin: auto; padding: 20px 150px 20px 150px;
    border-style: solid; border-color:2px solid white; background-color:rgb(26, 26, 66);">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">


                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="requires-validation" name="form1" enctype="multipart/form-data" onsubmit="return matchPassword()">

                            <div class="col-md-12">
                                <b> <label for="fname" style="color: white;">First Name :</label></b>
                                <input class="form-control" type="text" name="fname" placeholder="Enter Your Fisrt Name" required>
                                <p id="demo" style="color:white;"></p>
                                <div class="valid-feedback">name field is valid!</div>
                                <div class="invalid-feedback">name field cannot be blank!</div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <b> <label for="lname" style="color: white;">Last Name :</label></b>
                                <input class="form-control" type="text" name="lname" placeholder="Enter Your Last Name" required>
                                <div class="valid-feedback">name field is valid!</div>
                                <div class="invalid-feedback">name field cannot be blank!</div>
                            </div>
                            <br>

                            <div class="col-md-12">
                                <b> <label for="email" style="color: white;">Email :</label></b>
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                <div class="valid-feedback">Email field is valid!</div>
                                <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div><br>

                            <div class="col-md-12">
                                <b> <label for="mobile" style="color: white;">Mobile Number :</b>
                                <input class="form-control" type="tel" name="mobile" min="0" placeholder="Enter Your Number" required>
                                <!-- <div class="valid-feedback">name field is valid!</div>
                <div class="invalid-feedback">name field cannot be blank!</div> -->
                            </div><br>

                            <div class="col-md-12">
                                <b> <label for="pwd" style="color: white;">Passsword :</b>
                                <input class="form-control" id="pwd" type="password" name="password" min="0" placeholder="Enter Your Password">
                                <p id="message"></p>
                                <br>
                                </div>

                                <div class="col-md-12">
                                    <b> <label for="cpwd" style="color: white;">Confirm Passsword</b>
                                    <input class="form-control" id="cpwd" type="password" name="cpassword" placeholder="Re-Enter Your Password">
                                    <br>
                                    </div>


                                    <div class="form-button mt-3">
                                        <button id="submit" type="submit" value="register" name="submit" class="btn btn-primary">
                                            <!-- <a href="show.php" style="color: white;"> -->
                                            Register
                                            <!-- </a> -->
                                        </button>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="login.php">
                                            <div style="color:white;"> <b>already a user ? <u>click here to login.</u>

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