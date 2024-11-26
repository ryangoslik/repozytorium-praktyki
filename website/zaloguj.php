<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z samochodami</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<header class="back"><a href="index.php"><</a></header>
<div class="logo"></div>
    <main>

    <section class='formularz'>
    <header class="header_1">
        <a href="index.php"> <h1>PORSCHE</h1>
        <hr></a>
    </header>
 <form action="login.php" method="post">
    <input type="text" name="login" placeholder="Login">
    <br>
    <input type="password" name="password" placeholder="Hasło">
    <br>
    <?php
    if(isset($_SESSION['e_zal'])){
        echo'<div class="error1">'.$_SESSION['e_zal'].'</div>';
        unset($_SESSION['e_zal']);
    }
    ?>
    <button type="submit">Zaloguj się</button>
    <div class="none"><p> Nie posiadasz konta?<br> <a href="zarejestruj.php" >Zarejestruj tutaj!</a></p></div>
 </form>
  </section>
<div class="right"><img src="https://i.pinimg.com/originals/c5/57/c9/c557c9d6fd4b25dbc8e9992a045d0dd4.jpg" alt="" srcset=""></div>
    </main>

    

    <footer>
        <p>© 2024 Strona z Samochodami. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
