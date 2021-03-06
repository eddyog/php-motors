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

    <div class="content register"> 


    <h1>Register</h1>
    <h2>All fiels are required</h2>

<div class="message" >
    <?php
    if (isset($message)) {
    echo $message;
    }
    ?>
</div>


    <form action="/php-motors/accounts/index.php" method="post">
    <label for="clientFirstname">First Name</label> <br>
    <input name="clientFirstname" id="clientFirstname" type="text" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";} ?> required>
    <br><br>

    <label for="clientLastname">Last Name</label><br>
    <input name="clientLastname" id="clientLastname" type="text" <?php if(isset($clientLastname)){echo "value='$clientLastname'";} ?> required>
    <br><br>

    <label for="clientEmail">Email</label><br>
    <input name="clientEmail" id="clientEmail" type="email" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?> required>
    <br><br>
      
    <label for="clientPassword">Password</label> <br>
    <span>Password must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character </span><br>
    <input name="clientPassword" id="clientPassword" type="password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"> <br>
    <br> <br>
    <input type="submit" name="submit" id="regbtn" value="register">
    <input type="hidden" name="action" value="register"> <br><br>
    <br>

    </form>
 
    </div>

    <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/footer.php'; ?>
    </footer>
</div>
</body>
</html>
