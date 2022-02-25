<html>
<head>

    <meta charset="UTF-8"><meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Search Artist</title>

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
                        <li><a href="../FrontEnd.html">Home</a></li>
                        <li><a href="../about-us.html">About Us</a></li>

                        <li><a href="./gallery.html">Gallery</a>

                        </li>
                        <li><a href="../contact.html">Contact</a></li>
                        <li class="active"><a href="#">Artwork</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->

<body>
<table class="table">
    <tr>
        <th><br>Art ID<br><br></th>
        <th><br>Title<br><br></th>
        <th><br>Year<br><br></th>
        <th><br>Type of Art<br><br></th>
        <th><br>Price<br><br></th>
        <th><br>E_ID<br><br></th>
        <th><br>G_ID<br><br></th>
        <th><br>Artist ID<br><br></th>
        <br><br>
    </tr>



<?php
$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"art_gallery");
if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $n=$_POST['artid'];
    echo "<b><br>Entered Art ID is $n and the Corresponding table is shown Below <br><br></b>";
    
    $sql="select * from artwork where artid='$n'";

                $result = $con->query($sql);

            if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
               echo "<tr><td>" . $row["artid"]. "</td><td>" . $row["title"]. "</td><td>" . $row["year"]. "</td><td>" . $row["type_of_art"]. "</td><td>" . $row["price"]. "</td><td>" . $row["eid"]. "</td><td>" . $row["gid"]. "</td><td>" . $row["artistid"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please Enter Correct Art ID</p>";
        }
        }

        $con->close();
?>

    <a href="artwork.html"><u><-- Go Back </u></a>

</table>
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