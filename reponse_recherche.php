<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dutaf</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
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
    
    <div id="recherche"> 
    <table id="myTable">
        <h1> Résultat de recherche</h1>
    <tr><td> <u> Titre de l'album </u></td><td> <u>prix </u></td><td> <u>Auteur </u></td></tr>
    <?php
$bdd = new PDO('mysql:host=localhost;dbname=mmi19x04;
charset=utf8', 'mmi19x04', 'rochdi2002D@');

$texte= $_GET['texte'] ;
$requete = 'SELECT album_titre,album_prix,auteur_nom,auteur_prenom 
FROM albums 
INNER JOIN auteurs
ON auteurs.auteur_id = albums._auteur_id_ WHERE auteur_nom  LIKE "%'.$texte.'%" OR auteur_prenom  LIKE "%'.$texte.'%"';


$exe = $bdd->query($requete);

while($ligne = $exe->fetch())
{
    echo '<tr><td>'.$ligne['album_titre'].'</td> <td>'.$ligne['album_prix'].'euro </td> <td>'.$ligne['auteur_nom'].' '.$ligne['auteur_prenom'].'</td></tr>';
}



?>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
 </script> 
</table>
</div>


</body>
</html>