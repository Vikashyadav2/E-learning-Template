<?php
    include 'config1.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wearecode.com</title>
    <!--  css link  -->
    <link rel="stylesheet" href="css/bootstrap-min.css?v=<?$version?>"><!-- bootstrap css-->

    <link rel="stylesheet" href="css/style.css?v=<?$version?>"> <!-- custom css-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
   
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- google  api link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    


</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light position-fixed sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn navbar-section"
        data-wow-delay="0.1s" style="z-index:2000;">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0 text-primary">coder</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto me-5">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="course.php" class="nav-item nav-link">Course</a>
                <a href="tutorial.php" class="nav-item nav-link">TUTORIAL</a>
                <a href="source-code.php" class="nav-item nav-link">Projects</a>
                <a href="notes.php" class="nav-item nav-link">Notes</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <!-- <div class="nav-item dropdown">
          <a href="courses.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">dropdown</a>
          <div class="dropdown-menu rounded-0 rounded-bottom m-0">
            <a href="" class="dropdown-item">WEB DESIGNING COURSE</a>
          </div>
        </div> -->
            </div>
            <a href="login.php" id="nav_btn1" class="btn btn-outline-primary me-2">Login</a>
            <a href="signup.php" id="nav_btn" class="btn btn-primary">Sign Up</a>
        </div>
    </nav>
    <!-- Navbar End -->