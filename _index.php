<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlgoSite</title>
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/monokai.css">
    <link rel="stylesheet" type="text/css"media="screen" href="css/accueil.css">
</head>

<body>
<div class="home">
    <header>
    <?php require ('commun/header.php');?>
    </header>
    <script>
          /*function Crea() {
                               var i = 0;
                               for (i = 1; i <= 5; i++) {
                                   var input = document.createElement("input");
                                   var number = document.createElement("div");
                                  // ligne.setAttribute("name", "iNombreUtilisateur");
                                   input.setAttribute("id", "iNombreUtilisateur");
                                  // document.getElementById("iNombreUtilisateur").appendChild(input);
                                   number.innerHTML += "<h3>" + "Entrez le nombre" + i + "</h3>";
                                   document.querySelector("div#noResult").appendChild(number);
                                   document.querySelector("div#noResult").appendChild(input);
                               }
                           }*/
    </script>
    <div class="container-fluid ">
            <h4>ALGORITHME ET PSEUDO-CODE:</h4>
            <hr width="75%" size="1px" color="olivedrab" />
            <div class="row">
                <div class="col-md-2 myAside">
                    <?php
                    require ('commun/menunav.php');
                    ?>
                </div>
                <div class="col-md-8">
                <?php
                    require ('accueil/accueil.php');
                    ?>
                </div>
                <div class="col-md-2 contentRight">
                <?php
                    require ('accueil/contentRight.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/saison3.js" type="text/javascript"></script>
    <script src="js/saison4.js" type="text/javascript"></script>
    <script src="assets/rainbow-custom.min.js"></script>
</body>
<footer class="text-muted">
    <?php
        require ("commun/footer.php");
    ?>
</footer>

</html>