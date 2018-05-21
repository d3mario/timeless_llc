<?php
    if(!isset($pageTitle))
    {
        $pageTitle = 'Timeless LLC';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Style declorations: Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Style declorations: Personal -->
    <link rel="stylesheet" href="css/stylesheet.css">

    <title><?php echo $pageTitle; ?></title>
</head>

<body>
<div class="container">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="<?php PUBLIC_PATH?>./index.php">Timeless Accounting</a>
    <!--<a class="navbar-brand" href="#">
        <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Bootstrap
    </a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
        <ul class="navbar-nav nav-pills justify-content-end pr-lg-5">
            <li class="nav-item">
            <a class="nav-link active" href="<?php PUBLIC_PATH?>./index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php PUBLIC_PATH?>./services.php">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php PUBLIC_PATH?>./contact.php">Contact</a>
            </li>

        </ul>

    </div>
</nav>
</div>