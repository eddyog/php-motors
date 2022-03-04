<?php

//If the login in is false it will send him to the home page
if(!isset($_SESSION['loggedin'])){
    include '../view/home.php';
    exit;
   }

?><!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors</title>
    <link rel="stylesheet" href="/php-motors/css/style.css">
    <meta name="description" content="home of the PHP motors">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Birthstone&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
<script src="../js/js.js"></script>
</head>

<body>
<!--  -->

<div class="inside"> 
    <header>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/header.php'; ?>
    </header>

    <nav >
    <?php 
    echo $navList; ?>
    </nav>

    <div class="content admin"> 

 
   <h1><?php echo $_SESSION['clientData']['clientFirstname'],' ', $_SESSION['clientData']['clientLastname']; ?>  </h1> 
   <h2>You are logged in. </h2>
    <ul>
    <li>First Name: <?php echo $_SESSION['clientData']['clientFirstname'];?> </li>
    <li>Last Namae: <?php echo $_SESSION['clientData']['clientLastname'];?>  </li>
    <li>Email: <?php echo $_SESSION['clientData']['clientEmail'];?> </li>
    </ul>

 
    </div>

    <div class="admin">
    <?php
    if($_SESSION['clientData']['clientLevel'] === '3'){

        ?>
        <h1>Inventory Managment </h1>
        <p> Use this link to manage the inventory. </p>
        <a class="link" href="/php-motors/vehicles/index.php">Vehicle Managment</a>
        <?php
       }
    ?>
    
    </div>

    <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/footer.php'; ?>
    </footer>
</div>
</body>
</html>
