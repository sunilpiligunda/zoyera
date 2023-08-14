<?php error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>zoyera | Car Wash</title>


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
<?php include_once('includes/header.php');?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Washing place</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="location.php">Location</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <iframe class="w-100"
                    src="https://www.google.com/maps/place/Mangaluru,+Karnataka/@12.9230045,74.7821592,12z/data=!4m6!3m5!1s0x3ba35a4c37bf488f:0x827bbc7a74fcfe64!8m2!3d12.9141417!4d74.8559568!16zL20vMDFzdjZr"  
                    frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe> -->
                        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.5388769891324!2d74.84866777494166!3d12.873032687433339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35bc20fdf7e7d%3A0x5d3328370012c824!2sZephyr%20Technologies%20%26%20Solution%E2%80%99s%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1685078474058!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
        
        <!-- Location Start -->
        <!-- <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header text-left">
                            <p>Washing Points</p>
                            <h2>Car Washing & Care Points</h2>
                        </div>
                        <div class="row">
                            <?php $sql = "SELECT * from tblwashingpoints";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $result)
{               ?>  
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                <h3><?php echo htmlentities($result->washingPointName);?></h3>
                    <p><?php echo htmlentities($result->washingPointAddress);?></p>
                    <p><strong>Call:</strong><?php echo htmlentities($result->contactNumber);?></p>
                                    </div>
                                </div>
                            </div>
<?php } ?>
                      
                        </div>
                    </div>
           
                </div>
            </div>
        </div> -->
        <!-- Location End -->
        
        
<?php include_once('includes/footer.php');?>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
