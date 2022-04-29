<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Sing Up</title>
</head>
<body>
    <header>
        <a href="http://localhost:7070/users/php/structur/homePage.php"><img class="logo" src="../../image/logo.png" alt="logo"></a>
         <nav>
             <ul class="nav_list">
                <li><a class="active" href="http://localhost:7070/users/php/structur/homePage.php">Home</a></li>
                <li><a class="" href="#">Services</a></li>
                <li><a class="" href="#">About</a></li>
                <li><a class="" href="#">Community</a></li>
                <a class="cta" href="http://localhost:7070/users/php/structur/logout.php"><button>Deconnexion</button></a>
             </ul>
         </nav>
    </header>

    <?php var_dump($_SESSION) ; ?>
</body>
</html>