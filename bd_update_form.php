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
    <h2>Modifier un album ...</h2>
    <hr>
    <?php

    $num_bd = $_GET['num_bd'];

    $bdd = new PDO('mysql:host=localhost;dbname=NAME;charset=utf8', 'NAME', 'PASSWORD');

    $req='SELECT * FROM albums INNER JOIN auteurs ON albums._auteur_id_ = auteurs.auteur_id INNER JOIN editeurs ON editeurs.editeur_id = editeurs.editeur_id  WHERE album_id='.$num_bd;

    $resultat = $bdd->query($req);
    $album = $resultat->fetch();
 
    ?>


    <form action="bd_update_valide.php" method="get">
             <input type="hidden" name="num_bd" value="<?php echo $album['album_id']?>"><br>
        Titre<input type="text" name="titre" value="<?php echo $album['album_titre']?>"><br>
        Prix<input type="text" name="prix"value="<?php echo $album['album_prix']?>" ><br>
        ISBN<input type="text" name="isbn" value="<?php echo $album['album_isbn']?>"><br>
        Serie<input type="text" name="serie" value="<?php echo $album['album_serie']?>"><br>
        Editeur:
        <select name="editeur">           
                    <?php 
            $req1='SELECT * FROM editeurs';
            $resultat1 = $bdd->query($req1);

            while( $un_editeur = $resultat1->fetch() ) {
            echo '<option value="'.$un_editeur['editeur_id'].'">'.$un_editeur['editeur_nom'].'</option>';
            }
            ?>

        </select><br>

        Auteur:
        <select name="auteur">
            <option value="<?php echo $album['auteur_id']?>">** <?php echo $album['auteur_nom']?> **</option>
            <?php 
            $bdd = new PDO('mysql:host=localhost;dbname=NAME;charset=utf8', 'NAME', 'rochdi2002D@');
            $req2='SELECT * FROM auteurs';
            $resultat2 = $bdd->query($req2);

            while( $un_editeur = $resultat2->fetch() ) {
            echo '<option value="'.$un_editeur['auteur_id'].'">'.$un_editeur['auteur_nom'].'</option>';
            }
            ?>
        </select> <br>
        <input type="submit" name="Modifier">


    </form>
</div>
</body>
</html>