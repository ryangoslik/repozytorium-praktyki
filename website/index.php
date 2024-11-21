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
    <div class="modele"><a href="#">Modele</a></div>
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
    <section class="section1">
        <h2><a href="#">PORSCHE 918 SPYDER</a></h2>
    </section>
    <div class="container">
        <h2>Nasze Samochody</h2>
        <div class="car-list">

            <!-- Przykładowa karta samochodu -->
            <div class="car-card">
                <div class="car-image">
                    <img src="https://via.placeholder.com/300x200" alt="Samochód 1">
                </div>
                <div class="car-info">
                    <h3>Model Samochodu 1</h3>
                    <p>Rok: 2020</p>
                    <p>Cena: 50 000 PLN</p>
                </div>
            </div>
            <!-- Dodaj więcej samochodów -->
            <div class="car-card">
                <div class="car-image">
                    <img src="https://via.placeholder.com/300x200" alt="Samochód 2">
                </div>
                <div class="car-info">
                    <h3>Model Samochodu 2</h3>
                    <p>Rok: 2022</p>
                    <p>Cena: 70 000 PLN</p>
                </div>
            </div>

            <div class="car-card">
                <div class="car-image">
                    <img src="https://via.placeholder.com/300x200" alt="Samochód 2">
                </div>
                <div class="car-info">
                    <h3>Model Samochodu 2</h3>
                    <p>Rok: 2022</p>
                    <p>Cena: 70 000 PLN</p>
                </div>
            </div>

            <div class="car-card">
                <div class="car-image">
                    <img src="https://via.placeholder.com/300x200" alt="Samochód 2">
                </div>
                <div class="car-info">
                    <h3>Model Samochodu 2</h3>
                    <p>Rok: 2022</p>
                    <p>Cena: 70 000 PLN</p>
                </div>
            </div>

            <div class="car-card">
                <div class="car-image">
                    <img src="https://via.placeholder.com/300x200" alt="Samochód 2">
                </div>
                <div class="car-info">
                    <h3>Model Samochodu 2</h3>
                    <p>Rok: 2022</p>
                    <p>Cena: 70 000 PLN</p>
                </div>
            </div>

            <div class="car-card">
                <div class="car-image">
                    <img src="https://via.placeholder.com/300x200" alt="Samochód 2">
                </div>
                <div class="car-info">
                    <h3>Model Samochodu 2</h3>
                    <p>Rok: 2022</p>
                    <p>Cena: 70 000 PLN</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 Strona z Samochodami. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
