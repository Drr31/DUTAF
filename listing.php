<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dutaf</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
</head>
<body>
    <h1>Bienvenu sur Dutaf shop</h1>

    <nav>
        <a href="index.html">Home</a>
        <a href="listing.php">Voir le catalogue </a> <br>
        <a href="form_recherche.php">Faire un recherche</a> <br>
        <a href="admin/admin.html">adminstration</a><br>
    </nav>
    <h2>Voici nos Albums ...</h2>

    <table id="myTable" class="display">
    <thead><tr><td>Titre de l'album</td><td>prix</td><td>Auteur</td></tr></thead>

    <tbody>
    <?php
$bdd = new PDO('mysql:host=localhost;dbname=NameDB;
charset=utf8', 'NameDB', 'PASSWORD);

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