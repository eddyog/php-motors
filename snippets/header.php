

    <a id="banner-image" > <img src="/php-motors/images/site/logo.png" alt="website logo"></a>
    <div id="account">
        <?php if(isset($_SESSION['loggedin'])){
        ?>
            <a class="account link" href="/php-motors/accounts/index.php"><?php echo $_SESSION['clientData']['clientFirstname']?></a> 
            <span>|</span>
            <a class="account link" href="/php-motors/accounts/index.php?action=Logout">Logout</a> 
        <?php
        }
        else {
            ?>
            <a class="account link" href="/php-motors/accounts/index.php?action=Login-page"> My Account</a> 
        <?php
        }?>
    </div>