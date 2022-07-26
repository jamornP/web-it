<?php require $_SERVER['DOCUMENT_ROOT']."/web-it/vendor/autoload.php";?>
<?php 
    use App\Model\Team;
    $teamObj = new Team;
?>
<?php 
    session_start();
    $_SESSION['menu']='about';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IT Science@KMITL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        <?php require $_SERVER['DOCUMENT_ROOT']."/it2/navbar.php";?>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">ผู้บริหารและบุคลากร</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <br>
                                    <br>
                                    <br>
                                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">About</li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">The best SEO solution with 10 years of experience</h2>
                        </div>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- About End -->


       


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">My Team</h6>
                    <h2 class="mt-2">ผู้บริหารและบุคลากร</h2>
                </div>
                <?php
                    $datas = $teamObj->getAllTeam();
                    $i=2;
                    foreach($datas as $data){
                        if($data['num']==1){
                            echo "
                                <div class='row g-4'>
                                    <div class='col-lg-4 wow fadeInUp' data-wow-delay='0.1s'>
                                    </div>
                                    <div class='col-lg-4 wow fadeInUp' data-wow-delay='0.1s'>
                                        <div class='team-item'>
                                            <div class='d-flex'>
                                                <div class='flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5' style='width: 75px;'>
                                                </div>
                                                <img class='img-fluid rounded w-100' src='img/team/{$data['image']}' alt=''>
                                                </div>
                                                <div class='px-4 py-3'>
                                                    <h5 class='fw-bold m-0'>{$data['fullname']}</h5>
                                                    <small>{$data['position']}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            ";
                        }elseif($data['num']==2){
                            echo "
                                    <div class='row g-4'>
                                        <div class='col-lg-4 wow fadeInUp' data-wow-delay='0.1s'>
                                        </div>
                                        <div class='col-lg-4 wow fadeInUp' data-wow-delay='0.1s'>
                                            <div class='team-item'>
                                                <div class='d-flex'>
                                                    <div class='flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5' style='width: 75px;'>
                                                    </div>
                                                    <img class='img-fluid rounded w-100' src='img/team/{$data['image']}' alt=''>
                                                </div>
                                                <div class='px-4 py-3'>
                                                    <h5 class='fw-bold m-0'>{$data['fullname']}</h5>
                                                    <small>{$data['position']}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                ";
                        }elseif($data['num']>=3){
                            $i++;
                            $j=$i+2;
                            if($i==3){
                                echo "<div class='row g-4'>";
                            }
                            echo "
                                
                                    <div class='col-lg-4 wow fadeInUp' data-wow-delay='0.{$j}s'>
                                        <div class='team-item'>
                                            <div class='d-flex'>
                                                <div class='flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5' style='width: 75px;'>
                                                    
                                                </div>
                                                <img class='img-fluid rounded w-100' src='img/team/{$data['image']}' alt=''>
                                                </div>
                                                <div class='px-4 py-3'>
                                                    <h5 class='fw-bold m-0'>{$data['fullname']}</h5>
                                                    <small>{$data['position']}</small>
                                            </div>
                                        </div>
                                    </div>
                                
                            ";
                            if($i>count($datas)){
                                echo "</div>";
                            }
                        }
                    }
                ?>
            </div>
        </div>
        <!-- Team End -->
        

        <!-- Footer Start -->
        <?php require $_SERVER['DOCUMENT_ROOT']."/it2/footer.php";?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>