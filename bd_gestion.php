<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dutaf</title>
    <link rel="stylesheet" href="stylegestion.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
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
    <h2>Gestion des albums</h2>
    <hr>
    <button> 
    <a href="bd_new_form.php">Ajouter un album</a>
    </button>
    <hr>



    <table id="myTable" class="display">
    <thead><tr><td>Titre de l'album</td><td>prix</td><td>Auteur</td></tr></thead>

    <tbody>
    <?php
$bdd = new PDO('mysql:host=localhost;dbname=mmi19x04;
charset=utf8', 'mmi19x04', 'rochdi2002D@');

$requete = 'SELECT album_id,album_titre,album_prix,auteur_nom 
FROM albums 
INNER JOIN auteurs
ON auteurs.auteur_id = albums._auteur_id_ ;';  
$exe = $bdd->query($requete);

while($ligne = $exe->fetch())
{
    echo '<tr><td>'.$ligne['album_titre'].'</td> <td>'.$ligne['album_prix'].'euro </td> <td>'.$ligne['auteur_nom'].'</td>';
    echo "<td><a href='bd_delete.php?num_bd=".$ligne['album_id']."'>Supprimer</a></td>";
    echo"<td><a href='bd_update_form.php?num_bd=".$ligne['album_id']."'>Modifier</a></td></tr>";
}


?>
</tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
 </script> 
</body>
</html>