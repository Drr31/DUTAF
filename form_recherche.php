<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dutaf</title>
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
            <h2>Vous Pouvez Faire votre recherche ici </h2>
           <form action="reponse_recherche.php" method="GET">
           Recherche d'une BD par nom d'auteur :
           <input type="text" name="texte">
           <br>
           <input type="submit" value="Rechercher">
           </form>
           </div>
</body>
</html>