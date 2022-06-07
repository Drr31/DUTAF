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
    <h2>Modifier un editeur ...</h2>
    <hr>
    <?php

    $num_bd = $_GET['num_bd'];

    $bdd = new PDO('mysql:host=localhost;dbname=NAME;charset=utf8', 'NAME', 'PASSWORD');

    $req='SELECT * FROM editeurs  WHERE editeur_id='.$num_bd;

    $resultat = $bdd->query($req);
    $editeur = $resultat->fetch();
 
    ?>


    <form action="editeur_update_valide.php" method="get">
             <input type="hidden" name="num_bd" value="<?php echo $editeur['editeur_id']?>"><br>
        Nom<input type="text" name="nom" value="<?php echo $editeur['editeur_nom']?>"><br>
        Pays<input type="text" name="pays"value="<?php echo $editeur['editeur_pays']?>" ><br>
        Téléphone<input type="text" name="telephone" value="<?php echo $editeur['editeur_tel']?>"><br>
            
        <input type="submit" name="Modifier">
    
    </form>
</div>
</body>
</html>