<!--header start-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Soccer club admin panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="adminassets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="adminassets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="adminassets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="adminassets/css/style.css" rel="stylesheet">
</head>


  

    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="/index-admin" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Decode</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">SFTZ</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/index-admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                   <a href="/soccerinfo-admin" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Soccer info</a>                     
                     <a href="/newsupdate-admin" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Latest news & updates</a>
                     <a href="/playergallery-admin" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Players gallery</a>
                     <a href="/chart-admin" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                     <a href="/statistics-admin" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Statistics</a>
                     <a href="/top10score-admin" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Top 10 Score</a>
                      <a href="/matches-admin" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Matches</a>
                     <a href="/myprofile-admin" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>My profile</a>
                     <a href="/setting-admin" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Settings</a>
                        
                   
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        
@yield('body-admin')

<!-- Footer Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                           Design by : <u><i>SFTZ</i></u>
                            <br>Distributed By: <a href="#" target="_blank">SoccerClub</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="adminassets/lib/chart/chart.min.js"></script>
    <script src="adminassets/lib/easing/easing.min.js"></script>
    <script src="adminassets/lib/waypoints/waypoints.min.js"></script>
    <script src="adminassets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="adminassets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="adminassets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="adminassets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="adminassets/js/main.js"></script>
</body>

</html>