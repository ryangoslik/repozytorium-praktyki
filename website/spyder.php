<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z samochodami</title>
    <link rel="stylesheet" href="style2.css">
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
<main>
    <div class="side_a">
<img src="pictures\spyder1.jpg" class="glowne" id="glowne">

<div class="dolne_zdjecia">
    <img src="pictures\spyder1.jpg" class="produkty" onclick="zdjecie1()">
    <img src="pictures\spyder2.jpg" class="produkty" onclick="zdjecie2()">
    <img src="pictures\spyder3.jpg" class="produkty" onclick="zdjecie3()">
    <img src="pictures\spyder4.jpg" class="produkty" onclick="zdjecie4()"> 
</div>
    </div>

    <div class="side_b">
            <div class="header_b">
                <h2 class="spyder1">918 Spyder</h2>
            <h1>Dane techniczne:<h1></div>
            <div class="lista">
                <div class="left_ul">
        <ul class="lista_l">
            <li>Moc silnika:</li>
            <li>Pojemność silnika:</li>
            <li>Prędkość maksymalna:</li>
            <li>Przyspieszenie 0 - 100 (s):</li>
            <li>Moment obrotowy:</li>
            <li>Typ skrzyni biegów:</li>
            <li>Ilość biegów:</li>
            <li>Rodzaj napędu:</li>
        </ul></div>
        
        <ul class="lista_p">
            <li>652(kW)|887(KM)</li>
            <li>4593</li>
            <li>345</li>
            <li>2.6 (s)</li>
            <li>1280</li>
            <li>skrzynia dwusprzęgłowa</li>
            <li>7</li>
            <li>przedni</li>
        </ul>
        </div>
        <hr class="hr_a">
        <div class="lower">
        <h2 class="price">Cena: <span class="ch_c">1 725 000 EUR</span> (import)</h2>
            <button class="otworz-formular" onclick="otworzFormularz()">KUP</button></div>
    </div>
    
</main>
<section class="sekcja_p_s">
<h2 class="p_s">NO LIMITS.</h2>

</section>

    <section class="sekcja2_p_s">

    </section>
<footer>
    <p>© 2024 Strona z Samochodami. Wszelkie prawa zastrzeżone.</p>
</footer>

<script>
    function zdjecie1() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "pictures/spyder1.jpg";
    }

    function zdjecie2() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "pictures/spyder2.jpg";
    }

    function zdjecie3() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "pictures/spyder3.jpg";
    }

    function zdjecie4() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "pictures/spyder4.jpg";
    }
    function otworzFormularz() {
            
            const nowaStrona = window.open('', '_blank');

            
            nowaStrona.document.write(`
                <html lang="pl">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Formularz</title>
                    <style>
                    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap');
                        body {
                        
                        font-family:orbitron;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction:column;
                            font-family: orbitron;
                            margin: 0;
                            padding: 20px;
                            background-color: #f9f9f9;
                        }
                        .formular {
                        
                            margin: 20px;
                            padding: 20px;
                            background-color: #f2f2f2;
                            border-radius: 10px;
                            width: 400px;
                        }
                        .formular input,
                        .formular textarea {
                            width: 100%;
                            padding: 10px;
                            margin: 10px 0;
                            border-radius: 5px;
                            border: 1px solid #ccc;
                        }
                        .formular button {
                            width: 100%;
   font-family: orbitron;
   color: white;
   background-color: black;
   font-size: large;
   border-radius: 5px;
   padding: 1%;
   margin-top: -1vh;
   cursor: pointer;
   transition: background-color 0.3s;
                        }
                        .formular button:hover {
                            background-color: white;
                            color: black;
                        }
                    </style>
                </head>
                <body>
                    <h2>Formularz zakupu</h2>
                    <div class="formular">
                        <form action="" method="POST">
                            <label for="name">Imie i nazwisko:</label><br>
                            <input type="text" id="name" name="name" required><br><br>

                            <label for="email">E-mail:</label><br>
                            <input type="email" id="email" name="email" required><br><br>

                            <label for="adress">Adres:</label><br>
                            <input type="text" id="adress" name="adress" required><br><br>

                            <label for="message">Notka:</label><br>
                            <textarea id="message" name="message" rows="4" required></textarea><br><br>

                            <button type="submit">Send</button>
                        </form>
                    </div>
                </body>
                </html>
            `);
        }
</script>
</body>
</html>
