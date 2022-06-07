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
    <hr>
    <div id="recherche"> 
    <h2>Vous venez de modifier un auteur</h2>
    <hr>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=NAME;charset=utf8', 'NAME', 'PASSWORD');
    $num_bd=$_GET['num_bd'];
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $nationalite=$_GET['nationalite'];
    $age=$_GET['age'];
    
    $req="UPDATE auteurs SET auteur_nom='$nom' , auteur_prenom='$prenom' , auteur_nat='$nationalite' ,auteur_age='$age' WHERE auteur_id=$num_bd ";
    

    $bdd->query($req);
    ?>
    </form>
    <button> 
        <a href="auteurs_gestion.php">Retour</a>
        </button>  
    </div>
</body>
</html>