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
                <a class="cta" href="http://localhost:7070/users/php/structur/signin_signupC.php"><button>Login</button></a>
             </ul>
         </nav>
    </header>
    <section id="information">
        <div class="info">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur quibusdam nostrum tempora eum dicta dolores cumque numquam veritatis fugit.</h2>

            <a href="http://localhost:7070/users/php/structur/AdminPage.php" style="color: black;">if u are an admin u can connect from this link ! </a>
            <?php     var_dump($_SESSION) ; ?>
        </div>
    </section>
</body>
</html>