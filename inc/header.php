<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link href="assets/images/logo.png" rel="icon">
    <link href="assets/images/logo.png" rel="apple-touch-icon">
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- custome css -->
    <link rel="stylesheet" href="./assets/css/custom.css">
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title><?php echo $title; ?></title>


</head>

<body onload="preLoad()" style="<?php echo $bg; ?>">
    <!--preloader  -->
    <div id="loading"></div>

    <!-- mobile view -->
    <div class="mobile_view">
        <div class="mobile__view__logo__container">
            <a href="./index.php"><img src="./assets/images/logo.png" alt="" class="img-fluid"></a>
        </div>
        <ul class="page__link">
            <li><a href="./about.php">About Us</a></li>
            <li><a href="./service.php">Services</a></li>
            <li><a href="./blog.php">Blog</a></li>
            <li><a href="./contact.php">Contact Us</a></li>
        </ul>
    </div>


    <!-- contact btn displayer -->
    <!-- <div class="contact__btn__container" id="">
        <h5>Contact Form</h5>
        <span><i class="fa-sharp fa-solid fa-caret-down"></i></span>
    </div> -->
