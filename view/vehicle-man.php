<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors</title>
    <link rel="stylesheet" href="../css/style.css">
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
    <?php //require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/navigation.php';
    echo $navList; ?>
    </nav>

    <div class="content vehicle-man"> 

    <h1>Vehicle Management</h1>
        <a href="../vehicles/index.php?action=link-add-classification">Add Classification</a>
    <br>
        <a href="../vehicles/index.php?action=link-add-vehicle"> Add Vehicle</a>
 
    </div>

    <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/footer.php'; ?>
    </footer>
</div>
</body>
</html>
