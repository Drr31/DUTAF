<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <title>Dutaf</title>
    <link rel="stylesheet" href="stylegestion.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<nav>
        <ul>
         <h2 class="index">Dutaf Shop</h2>   
         <div id="right">
        <i class='fas fa-home' style='font-size:20px;color:white'></i>
        <li><a href="../index.html">Home</a></li>
        <i class='fas fa-book-open' style='font-size:20px;color:white'></i>
        <li><a href="../listing.php">Voir le catalogue </a> <br></li>
        <i class='fas fa-search' style='font-size:20px;color:white'></i>
        <li><a href="../form_recherche.php">Faire un recherche</a> <br></li>
        <i class='fas fa-user' style='font-size:20px;color:white'></i>
        <li><a href="admin.html">Adminstration</a> <br></li>
        </ul>
    </div>
    </nav>
    <div id="recherche"> 
    <h2>Modifier un auteur ...</h2>
    <hr>
    <?php

    $num_bd = $_GET['num_bd'];

    $bdd = new PDO('mysql:host=localhost;dbname=NAME;charset=utf8', 'NAME', 'PASSWORD');

    $req='SELECT * FROM auteurs  WHERE auteur_id='.$num_bd;

    $resultat = $bdd->query($req);
    $auteur = $resultat->fetch();
 
    ?>


    <form action="auteur_update_valide.php" method="get">
             <input type="hidden" name="num_bd" value="<?php echo $auteur['auteur_id']?>"><br>
        Nom<input type="text" name="nom" value="<?php echo $auteur['auteur_nom']?>"><br>
        Prénom<input type="text" name="prenom"value="<?php echo $auteur['auteur_prenom']?>" ><br>
        Nationalité<input type="text" name="nationalite" value="<?php echo $auteur['auteur_nat']?>"><br>
        Age<input type="text" name="age" value="<?php echo $auteur['auteur_age']?>"><br>
            
        <input type="submit" name="Modifier">
    
    </form>
</div>
</body>
</html>