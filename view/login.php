<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/js.js"></script>
    <meta name="description" content="home of the PHP motors">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Birthstone&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
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

    <div class="content login"> 

    <h1>Sign in</h1>

    <label for="clientEmail">Email</label> <br>
    <input name="clientEmail" id="clientEmail" type="text" required>

    <br><br>
      
    <label for="clientPassword">Password</label><br>
    <input name="clientPassword" id="clientPassword" type="password" required>
    <br><br>

    <button id="signin">Sign-in</button> <br>

    <br>

    <a id="yet" href="../accounts/index.php?action=registration">No a member yet?</a>

 
    </div>

    <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/footer.php'; ?>
    </footer>
</div>
</body>
</html>
