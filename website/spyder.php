<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z samochodami</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <a href="index.php"> <h1>PORSCHE</h1>
        <hr></a>
    </header>
   

    
    <nav>
    <div class="modele"><a href="#nasze_modele">Modele</a></div>
    <a href="#">Serwis</a>
    <a href="#">Personalizacja</a>
    <a href="#">Historia</a>
    <a href="#">Kontakt</a>
    <div class="login">
        <?php if (isset($_SESSION['user_name'])): ?>
            <span>Witaj, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</span>
            <a href="logout.php">Wyloguj</a>
        <?php else: ?>
            <a href="zarejestruj.php">Zarejestruj</a> 
            <a href="zaloguj.php">Zaloguj</a>
        <?php endif; ?>
    </div>
</nav>
    


    <footer>
        <p>© 2024 Strona z Samochodami. Wszelkie prawa zastrzeżone.</p>
    </footer>
    <script>


    </script>
</body>
</html>
