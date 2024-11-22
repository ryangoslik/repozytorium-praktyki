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
    <section class="section1">
        <h2><a href="spyder.php">PORSCHE 918 SPYDER</a></h2>
    </section>
    <div class="container" id="nasze_modele">
        <h2>Nasze Modele</h2>
        <div class="car-list">

        <div class="car-card"><a href="spyder.php">
                <div class="car-image">
                    <img src="https://p.turbosquid.com/ts-thumb/K2/Si84lj/5x/porsche_918_spyder_06/jpg/1637859117/1920x1080/fit_q87/9a42d2675f7f5dddf38055f7a6bde51bf8604c26/porsche_918_spyder_06.jpg" alt="Samochód 1">
                </div>
                <div class="car-info">
                    <h3 class="spyder">918 Spyder</h3>
                    <p>Rok: 2015</p>
                    <p>Cena: 1 725 000 EUR (import) </p>
                    </div></a>
            </div>

            <div class="car-card"><a href="718.php">
                <div class="car-image">
                    <img src="https://files.porsche.com/filestore/image/multimedia/none/911-tus-modelimage-sideshot/model/930894f1-6214-11ea-80c8-005056bbdc38/porsche-model.png" alt="Samochód 1">
                </div>
                <div class="car-info">
                    <h3 class="p911">911 Turbo S</h3>
                    <p>Rok: 2024</p>
                    <p>Cena: od 650 400 PLN</p>
                    </div></a>
            </div>

            <div class="car-card"><a href="718.php">
                <div class="car-image">
                    <img src="https://files.porsche.com/filestore/image/multimedia/none/982-718-c7s-modelimage-sideshot/model/af021b27-d5ba-11ec-80ef-005056bbdc38/porsche-model.png" alt="Samochód 1">
                </div>
                <div class="car-info">
                    <h3 class="p718">718 Cayman S</h3>
                    <p>Rok: 2024</p>
                    <p>Cena: od 354 000 PLN</p>
                    </div></a>
            </div>

            <div class="car-card"><a href="718.php">
                <div class="car-image">
                    <img src="https://www.swaggermagazine.com/home/wp-content/uploads/2019/09/porsche-thumbnail-1.png?x96600" alt="Samochód 1">
                </div>
                <div class="car-info">
                    <h3 class="taycan">Taycan Turbo</h3>
                    <p>Rok: 2024</p>
                    <p>Cena: od 712 000 PLN</p>
                    </div></a>
            </div>

            <div class="car-card"><a href="718.php">
                <div class="car-image">
                    <img src="https://porsche-vietnam.vn/wp-content/uploads/2024/05/972-g3-v6-modelimage-sideshot.png" alt="Samochód 1">
                </div>
                <div class="car-info">
                    <h3 class="panamera">Panamera Turbo S</h3>
                    <p>Rok: 2024</p>
                    <p>Cena: od 897 000 PLN</p>
                    </div></a>
            </div>

            <div class="car-card"><a href="718.php">
                <div class="car-image">
                    <img src="https://files.porsche.com/filestore/image/multimedia/none/9yb-e3-c-tu-modelimage-sideshot/model/104c07d3-a8d4-11eb-80d5-005056bbdc38/porsche-model.png" alt="Samochód 1">
                </div>
                <div class="car-info">
                    <h3 class="cayenne">Cayenne S</h3>
                    <p>Rok: 2023</p>
                    <p>Cena: od 553 000 PLN</p>
                    </div></a>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 Strona z Samochodami. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
