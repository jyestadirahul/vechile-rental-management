<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'config.php';

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICLES RENTALS</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome\css\all.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   VEHICLES RENTAL </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

           

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="driver_login.php">Driver</a>
                    </li>
                    <li>
                        <a href="user_login.php">Customer</a>
                    </li>
                    <li>
                        <a href="admin_login.php"> Admin </a>
                    </li>
                </ul>
            </div>
                
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="bgimg-1">
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading" style="color: black">vehicle Rentals</h1>
                            <p class="intro-text">
                                Online Vehicle Rental Service
                            </p>
                            <a href="#sec2" class="btn btn-circle page-scroll blink">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Available Vehicles</h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = mysqli_query($mysqli, "SELECT * FROM car");
            $sql2 ="SELECT * FROM car";
                  
            
                while($row1 = mysqli_fetch_array($sql1)){
                    $cid = $row1["cid"];
                    $cname = $row1["cname"];
                    $v2 = $row1["v2"];
                    $v3 = $row1["v3"];
                    $v4 = $row1["v4"];
                    $v5 = $row1["v5"];
                    $v6= $row1["v6"];
               
                    ?>
            <a href="user_login.php">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $v6; ?>" alt="Card image cap">
            <h5><b> <?php echo $cname; ?> </b></h5>
            <h6> AC Fare: <?php echo ("Rs. " . $v2 . "/km & Rs." . $v3 . "/day"); ?></h6>
            <h6> Non-AC Fare: <?php echo ("Rs. " . $v4 . "/km & Rs." . $v5 . "/day"); ?></h6>

            
            </div> 
            </a>
            <?php }
            ?>                                   
        </section>
                    
    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
    </div>

    
    <!-- Container (Contact Section) -->
    <!-- -->
    <div class="container-fluid" style="background-color: #414140;">
        
        <div class="row">
            <div class="col-sm-4">
                <h3 style="color:pink;">About Us</h3>
<p>
A vehicle rental, hire vehical, or vehicle hire agency is a company that rents automobiles for short periods of time to the public, generally ranging from a few hours to a few weeks. It is often organized with numerous local branches (which allow a user to return a vehicle to a different location), and primarily located near airports or busy city areas and often complemented by a website allowing online reservations. 
</p>
            </div>
            <div class="col-sm-4 line-height">
                <h3 style="color:pink;">Contact Us</h3>
                praneeth vehicle rentals<br>
                chennai-600119<br>
                inturipranith2456@gmail.com<br>
                8008720400
            </div>
            <div class="col-sm-4">
                <h3 style="color:pink;">Social Media</h3>
                <div class="row">
                    <div class="col-sm-1">
                        <a href="#"><i class="fab fa-facebook bg-light"></i></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><i class="fab fa-reddit"></i></a>
                    </div>

                </div>


            </div>

        </div>
        <hr>
        <div class="col-sm-12 text-center">
                    <h5>© <?php echo date("Y"); ?> vehicle Rental</h5>
                </div>
    </div>
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(25.614744, 85.128489);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <script>
        function sendGaEvent(category, action, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuoe93lQkgRaC7FB8fMOr_g1dmMRwKng&callback=myMap" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>
<style>
  
    i {
        font-size: 30px;
    }

    .col-sm-4.line-height, .col-sm-12 {
        line-height: 200%;
        color:#CDCDBC;

    }

    .col-sm-4 img {

        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 300px;
    }
    .col-sm-4 .box1{
        background: #fff;
  box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
    }
    .col-sm-4 .box1:hover {
  box-shadow: 0 1px 20px rgba(104, 104, 104, 0.8);
}
</style>