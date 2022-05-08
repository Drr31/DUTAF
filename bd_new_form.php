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
    <h2>Ajouter un nouvel album ...</h2>
    <form action="bd_new_valid.php" method="get">
        Titre<input type="text" name="titre"><br>
        Prix<input type="text" name="prix"><br>
        ISBN<input type="text" name="isbn"><br>
        Serie<input type="text" name="serie"><br>
        Editeur:
        <select name="editeur">
                    <?php 
            $bdd = new PDO('mysql:host=localhost;dbname=mmi19x04;charset=utf8', 'mmi19x04', 'rochdi2002D@');
            $req1='SELECT * FROM editeurs';
            $resultat1 = $bdd->query($req1);

            while( $un_editeur = $resultat1->fetch() ) {
            echo '<option value="'.$un_editeur['editeur_id'].'">'.$un_editeur['editeur_nom'].'</option>';
            }
            ?>

        </select><br>

        Auteur:
        <select name="auteur">
            <?php 
            $bdd = new PDO('mysql:host=localhost;dbname=mmi19x04;charset=utf8', 'mmi19x04', 'rochdi2002D@');
            $req2='SELECT * FROM auteurs';
            $resultat2 = $bdd->query($req2);

            while( $un_editeur = $resultat2->fetch() ) {
            echo '<option value="'.$un_editeur['auteur_id'].'">'.$un_editeur['auteur_nom'].'</option>';
            }
            ?>
        </select> <br>
        <input type="submit" name="Ajouter">


    </form>
    </div>
</body>
</html>