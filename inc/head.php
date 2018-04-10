<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Cookie Factory</title>
  <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/styles.css" />
</head>
<body>
<?php
session_start();

    if (isset($_GET['deconnect'])){
        session_destroy();
        header('location:index.php');
    }
    if (isset($_SESSION['login'])){
        if(isset($_GET['add_to_cart'])){
            $_SESSION['cart'][]=$_GET['add_to_cart'];
        }
    }

    if (!isset($_SESSION['login']) && isset($_GET['add_to_cart'])){
        header('location: login.php');
    }
    ?>
  <header>
    <!-- MENU ENTETE -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/" >
          <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
          <h1>The Cookies Factory</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <?php
            if (!isset($_SESSION['login'])){
                ?>
            <li><a href="login.php">Connection</a></li>
            <?php  }
            else { ?>
                <li><a href="index.php?deconnect=true">Déconnection</a></li>
            <?php }
            ?>
            <?php if (isset($_SESSION['login'])){ ?>
            <li><a href="#">Chocolates chips</a></li>
          <li><a href="#">Nuts</a></li>
          <li><a href="#">Gluten full</a></li>

          <li>
            <a href="/cart.php" class="btn btn-warning navbar-btn">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
              Cart
            </a>
          </li>
            <?php } ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container-fluid text-right">
    <strong> <?php if (isset($_SESSION['login'])){echo 'Hello '.ucfirst($_SESSION['login']).' !';}?></strong>
  </div>
</header>
