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

    <div class="content add-clas"> 

    <h1>Add Car Classification</h1>

    <?php
    if (isset($message)) {
    echo $message;
    }
    ?>

    <form action="/php-motors/vehicles/index.php" method="post">
        <label for="classificationName">Classification Name</label>
        <br>
        <input name="classificationName" id="classificationName" type="text" >
        <br> <br>
        <input type="submit" name="submit" id="regbtn" value="add-classification">
        <input type="hidden" name="action" value="add-classification">
        <br><br>
    </form>
    </div>

    <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/footer.php'; ?>
    </footer>
</div>
</body>
</html>
