<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlgoSite</title>
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/monokai.css">
    <link rel="stylesheet" href="css/site.css">
</head>
<header>
    <?php
    include ('include/header.php');
    global $db;
    ?>
</header>
<body>
    <div class="home">
       <div class="container-fluid ">
            <h4>ALGORITHME ET PSEUDO-CODE:</h4>
            <hr width="75%" size="1px" color="olivedrab" />
            <div class="row">
                <div class="col-md-2 myAside">
                    <ul  id="menu-accordeon"><li><a href="index.php">Retour</a></li></ul>
                    <?php
                    include ('include/menunav.php');
                    global $db;
                    ?>
                </div>

                <div class="col-md-8">
                    <div class="content">
                        <?php
                        include ('include/exoSaison1.php');
                        global $db;
                        ?>
                    </div>
                </div>
                
                <div class="col-md-2 contentRight">
                    <div class="cours">
                        <button type="button">Cours</button>
                    </div>
                    <div class="myCodeRight">
                        <img src="img/algorithme.jpg">
                        <img src="img/pion.png">
                        <img src="img/Jquery-logo.png">
                        <img src="img/php.png">
                       <img src="img/java.png"height="80px"> 
                       <img src="img/python.jpg"height="80px"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/saison1.js" type="text/javascript"></script>
    <script src="assets/rainbow-custom.min.js"></script>
</body>
<footer class="text-muted">
    <?php
            include ("include/footer.php");
            global $db;
        ?>
</footer>

</html>