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


<div class="inside"> 
    <header>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/header.php'; ?>
    </header>

    <nav >
    <?php //require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/navigation.php';
    echo $navList; ?>
    </nav>

    <div class="content"> 

    <h1>Add Vehicle</h1>

    <?php
    if (isset($message)) {
    echo $message;
    }
    ?>

    <h2>* Note all the fiels are required</h2>

    <form action="/php-motors/vehicles/index.php" method="post">

    <!-- <label for="classificationId">das</label><br>
    <input name="classificationId" type="text"><br><br> -->

    <?php //require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/navigation.php';
    echo $classificationList; 
    ?>

    <br><br>

    <label for="invMake">Make</label><br>
    <input name="invMake" id="invMake" type="text">
    <br><br>

    <label for="invModel">Model</label>
    <br>
    <input name="invModel" id="invModel" type="text" > 
    <br><br>

    <label for="invDescription">Description</label> <br>
    <input name="invDescription" id="invDescription" type="text" > 
    <br><br>

    <label for="invImage">Image Path</label> <br>
    <input name="invImage" id="invImage" type="text" > 
    <br><br>
    
    <label for="invThumbnail">Thumbnail Path</label> <br>
    <input name="invThumbnail" id="invThumbnail" type="text" > 
    <br><br>

    <label for="invPrice">Price</label> <br>
    <input name="invPrice" id="invPrice" type="text" > 
    <br><br>

    <label for="invStock"># In Stock</label> <br>
    <input name="invStock" id="invStock" type="text" > 
    <br><br>

    <label for="invColor">Color</label> <br>
    <input name="invColor" id="invColor" type="text" > 
    <br><br>

    <input type="submit" name="submit" id="regbtn" value="add-vehicle">
    <input type="hidden" name="action" value="add-vehicle">

    <br><br>
    </form>
    </div>

    <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/footer.php'; ?>
    </footer>
</div>
</body>
</html>
