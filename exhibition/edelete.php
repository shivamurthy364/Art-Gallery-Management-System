<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8"><meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Exhibition Deletion</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/table.css" type="text/css">

</head>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="logo">
                    <a href="../FrontEnd.html">
                        <img src="img/logo1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="main-menu mobile-menu">
                    <ul>
                        <li><a href="exhibition.html">Home</a></li>
                        <li><a href="../about-us.html">About Us</a></li>
                        <li><a href="../gallery/gallery.html">Gallery</a>
                        </li>
                        <li><a href="../contact.html">Contact</a></li>
                        <li class="active"><a href="#">Exhibitiom</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->



<div class="gal">
    <form action="artdelete.php" method="post">
        <br/><br/><br/>
        <div class="lbl"> <label>Enter Exhibition ID:</label> </div>
        <div class="search-box">
            <input type="text" name="E_ID" placeholder="Exhibition_ID">
        </div>
        <br><br><br/><br><br><br/>
        <button type="submit" value ="Delete" class="btn">DELETE</button>
        <button type="reset" value ="Reset" class="btn">RESET</button>
    </form>
</div>




 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "art_gallery";


$con = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $a=$_POST['E_ID'];

    if($a!="")
        {
            $sql1 = "SELECT * from Exhibition where eid='$a'";
            $result = mysqli_query($con,$sql1);

            if(mysqli_num_rows($result)>0)
            {
            $sql3="DELETE from Exhibition where eid='$a'";   // student is the table name
            mysqli_query($con,$sql3);
            echo "<b>Record with E_ID = $a is deleted successfully.<b>";
            }
           else
        {
            echo "<b>!!!Error in Deleting Record!!!<br> Record '$a' was not found in database.<b>" ;
        }
        }else{
                echo "USER_ID Field is Empty";
            }
$con->close();
}
?>

<a href="artwork.html"><u><-- Go Back </u></a>


<!-- Footer Section Begin -->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-option">
                    <div class="fo-logo">
                        <a href="#">
                            <img src="img/logo1.png" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>Address: Vidyaranyapuram, Mysuru.</li>
                        <li>Phone: +91 7406859461</li>
                        <li>Email: shiremath043@gmail.com</li>
                    </ul>
                    <div class="fo-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget fw-links">
                    <h5>Useful Links</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Model</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Serivius</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5>Join The Newsletter</h5>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#" class="news-form">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5>Instagram</h5>
                    <div class="insta-pic">
                        <img src="img/instagram/instagram-1.jpg" alt="">
                        <img src="img/instagram/instagram-2.jpg" alt="">
                        <img src="img/instagram/instagram-3.jpg" alt="">
                        <img src="img/instagram/instagram-4.jpg" alt="">
                        <img src="img/instagram/instagram-5.jpg" alt="">
                        <img src="img/instagram/instagram-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="ti-art" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Art Gallery Management</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
    </div>
</section>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>
</html>
