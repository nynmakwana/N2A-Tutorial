<?php


require_once('dbconnection.php');
include("sc.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // $city = $_POST['city'];
    // $gender = $_POST['gender'];
    // $hobby = $_POST['hobby'];

    $sql = "INSERT INTO n2a  (fname,lname,email,mobile,password) VALUES ( '$fname','$lname','$email', '$mobile', '$password')";
    // echo $sql;

    if (!mysqli_query($con, $sql)) {
        echo "Error" . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N2A TUTORIALS</title>
    <link rel="stylesheet" href="css/main.css">

    <script type="text/javascript">

        function changeText(text) {
            var display = document.getElementById('text-display');
            display.innerHTML = "";
            display.innerHTML = text;
        }

        function defaultText() {
            var display = document.getElementById('text-display');
            display.innerHTML = "";
            display.innerHTML = "";
        }

    </script>
    

</head>

<body>
    
    <header>
        <div>
            <h3>
                <img src="img/booklogo.jpg" alt="this image is not loading !" width="120px" height="70px">
                <p>
                    <b><u>N2A TUTORIALS</u></b>
                </p>
            </h3>
            <!-- <script>document.write(' <h3>Welcome !</h3>');</script> -->
            <script src="js/greeting.js"></script>
            <h6 class="p1">Free E-Books | Tutorial Videos | Easy Learning | Top Educators</h6>
        </div>
    </header>

    <div class="navbar">
        <ul>
            <li><a href="aboutus.php">About Us</a></li>
            <li>&VerticalLine;</li>
            <li><a href="ebooks.php">E-Books</a></li>
            <li>&VerticalLine;</li>
            <li><a href="#contact">Contact us</a></li>
            <div class="search">
                <input type="text" name="search" id="search" placeholder="Search this website">
            </div>
        </ul>
    </div>

    <div class="wallpaper">
        <img src="img/bookwallpaper.jpg" alt="this image is not loading !" width="100%" height="671px">
    </div>

    <div class="courses">
        <h2>COURSES</h2>
        <ul>
            <li class="courseblock" id="courseblock1">
                <div>
                    <img src="img/digitalelectronics.png" alt="">
                    <h4>Digital Electronics</h4>
                    <button class="ebook">
                        <a href="ebooks.php#de">📑E-books</a>
                    </button>
                    <button class="video">
                        <a href="https://youtube.com/playlist?list=PLBlnK6fEyqRjMH3mWf6kwqiTbT798eAOm" target="_blank">▶
                            Tutorial Video</a>
                    </button>
                </div>
            </li>
            <li class="courseblock" id="courseblock2">
                <div>
                    <img src="img/cpplogo.jpg" alt="">
                    <h4>OOP with C++</h4>
                    <button class="ebook">
                        <a href="ebooks.phpl#oopwcpp">📑E-books</a>
                    </button>
                    <button class="video">
                        <a href="https://www.youtube.com/watch?v=wN0x9eZLix4&t=3712s" target="_blank">▶ Tutorial
                            Video</a>
                    </button>
                </div>
            </li>
            <li class="courseblock" id="courseblock3">
                <div>
                    <img src="img/dsalogo.jpg" alt="">
                    <h4>Data Structures and Algorithms</h4>
                    <button class="ebook">
                        <a href="ebooks.php#dsa">📑E-books</a>
                    </button>
                    <button class="video">
                        <a href="https://www.youtube.com/watch?v=8hly31xKli0" target="_blank">▶ Tutorial Video</a>
                    </button>
                </div>
            </li>
            <li class="courseblock" id="courseblock4">
                <div>
                    <img src="img/weblogo.jpg" alt="">
                    <h4>Web Technology</h4>
                    <button class="ebook">
                        <a href="ebooks.php#wt">📑E-books</a>
                    </button>
                    <button class="video">
                        <a href="https://www.youtube.com/watch?v=lxjvkLoH8cg&list=PLftJ4X48yC1kgIhfQT-YyvKFqnsCywLDU"
                            target="_blank">▶ Tutorial Video</a>
                    </button>
                </div>
            </li>
            <li class="courseblock" id="courseblock5">
                <div>
                    <img src="img/mathslogo.jpg" alt="">
                    <h4>Mathematics</h4>
                    <button class="ebook">
                        <a href="ebooks.php#maths">📑E-books</a>
                    </button>
                    <button class="video">
                        <a href="https://www.youtube.com/watch?v=2SpuBqvNjHI" target="_blank">▶ Tutorial Video</a>
                    </button>
                </div>
            </li>
            <li class="courseblock" id="courseblock6">
                <div>
                    <img src="img/clogo.jpg" alt="">
                    <h4>C-Programming</h4>
                    <button class="ebook">
                        <a href="ebooks.php#c">📑E-books</a>
                    </button>
                    <button class="video">
                        <a href="https://www.youtube.com/watch?v=ZSPZob_1TOk" target="_blank">▶ Tutorial Video</a>
                    </button>
                </div>
            </li>
            <li class="courseblock" id="courseblock7">
                <div>
                    <img src="img/cslogo.jpg" alt="">
                    <h4>Communication Skills</h4>
                    <button class="ebook">
                        <a href="ebooks.php#cs">📑E-books</a>
                    </button>
                    <button class="video">
                        <a href="https://youtube.com/playlist?list=PLOaeOd121eBEEWP14TYgSnFsvaTIjPD22" target="_blank">▶
                            Tutorial Video</a>
                    </button>
                </div>
            </li>
            <li class="courseblock" id="courseblock8">
                <div>
                    <img src="img/beeelogo.jpg" alt="">
                    <h4>BEEE</h4>
                    <button class="ebook">
                        <a href="ebooks.php#beee">📑E-books</a>
                    </button>
                    <button class="video">
                        <a href="https://youtube.com/playlist?list=PL0s3O6GgLL5cLAfoALo36QVhy1oM5NZsP" target="_blank">▶
                            Tutorial Video</a>
                    </button>
                </div>
            </li>
        </ul>
    </div>

    <br><br>

    <footer>
        <h3>Contact us</h3>

        <div class="row" style="display: flex" id="contact">

            <div class="column" style="background-color:rgb(26, 26, 66);">
                <h4><b>NAYAN MAKWANA</b> </h4>
                <p>+91 59643 12345</p>
                <p><b><a href="mailto:20BT04021@gsfcuniversity.ac.in"><u>20BT04021@gsfcuniversity.ac.in</u></a></b></p>
            </div>

            <div class="column" style="background-color:rgb(26, 26, 66);">
                <h4><b>NALIN JAYSWAL</b> </h4>
                <p>+91 59643 12365</p>
                <p><b><a href="mailto:20BT04016@gsfcuniversity.ac.in"><u>20BT04016@gsfcuniversity.ac.in</u></a></b></p>
            </div>

            <div class="column" style="background-color:rgb(36, 36, 66);">
                <h4><b>AYUSH CHAUHAN</b> </h4>
                <p>+91 59643 12345</p>
                <p><b><a href="mailto:20BT04009@gsfcuniversity.ac.in"><u>20BT04009@gsfcuniversity.ac.in</u></a></b></p>
            </div>
        </div>

        <div class="address" onmouseover="changeText('this link will open MAPS')" onmouseout="defaultText()">
            <p>SOT, GSFC University, P. O, Fertilizer Nagar, Vigyan Bhavan, Vadodara, Gujarat 391750</p>
            <p><a href="https://goo.gl/maps/9Uce5LZrL2hC2ohF9" target="_blank"><u>Click here to see the Location</u></a>
            </p>
            <div id="text-display">
            </div>
        </div>
    </footer>
</body>

</html>