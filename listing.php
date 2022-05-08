<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dutaf</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    
<!-- <a href="admin/bd_new_form.php">Ajouter Un album</a><br> -->
<nav>
        <ul>
         <h2 class="index">Dutaf Shop</h2>   
         <div id="right">
        <i class='fas fa-home' style='font-size:20px;color:white'></i>
        <li><a href="index.html">Home</a></li>
        <i class='fas fa-book-open' style='font-size:20px;color:white'></i>
        <li><a href="listing.php">Voir le catalogue </a> <br></li>
        <i class='fas fa-search' style='font-size:20px;color:white'></i>
        <li><a href="form_recherche.php">Faire un recherche</a> <br></li>
        <i class='fas fa-user' style='font-size:20px;color:white'></i>
        <li><a href="admin/admin.html">Adminstration</a> <br></li>
        </ul>
    </div>
    </nav>
    <h2>Voici nos Albums ...</h2>

    <table id="myTable" class="display">
    <thead><tr><td>Titre de l'album</td><td>prix</td><td>Auteur</td></tr></thead>

    <tbody>
    <?php
$bdd = new PDO('mysql:host=localhost;dbname=mmi19x04;
charset=utf8', 'mmi19x04', 'rochdi2002D@');

$requete = 'SELECT album_titre,album_prix,auteur_nom 
FROM albums 
INNER JOIN auteurs
ON auteurs.auteur_id = albums._auteur_id_ ;';  
$exe = $bdd->query($requete);

while($ligne = $exe->fetch())
{
    echo '<tr><td>'.$ligne['album_titre'].'</td> <td>'.$ligne['album_prix'].'euro </td> <td>'.$ligne['auteur_nom'].'</td></tr>';
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