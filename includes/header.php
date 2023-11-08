<?php

session_start();





?>
<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- Web title -->
	<title>eBaluwa</title>

	<!-- Web Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Web SEO -->
	<meta name="title" content="Discord">
	<meta name="description" content="Discord Login Page - Vins 2106">

	<meta property="og:type" content="website">
	<meta property="og:url" content="https://mysite.com/">
	<meta property="og:title" content="Discord">
	<meta property="og:description" content="Discord Login Page - Vins 2106">
	<meta property="og:image" content="./img/logo.png">

	<meta property="twitter:url" content="https://mysite.com/">
	<meta property="twitter:title" content="Discord">
	<meta property="twitter:description" content="Discord Login Page - Vins 2106">
	<meta property="twitter:image" content="./img/logo.png">

	<!-- Web Style -->
	<link rel="stylesheet" type="text/css" href="./css/styles.css">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

  


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
" rel="stylesheet">


<meta name="theme-color" content="#712cf9">


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">eBaluwa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
   
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <?php if (!isset($_SESSION['username'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <?php else : ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $_SESSION['username']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          
          </ul>
          <?php endif; ?>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
</head>