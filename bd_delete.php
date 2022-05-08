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
        <hr>
        <h2>Vous venez de suprrimer un Album</h2>
        <hr>

        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=mmi19x04;charset=utf8', 'mmi19x04', 'rochdi2002D@');

        $num_bd = $_GET['num_bd'];

        $requete = 'DELETE FROM albums  WHERE album_id ='.$num_bd;
        $bdd->query ($requete);
        ?> 
    <button> 
        <a href="bd_gestion.php">Retour</a>
        </button>    
    </div>
    </body>
</html> 