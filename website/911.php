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
<main class="car">
    <div class="side_a">
<img src="https://wallpapersmug.com/download/1600x900/161e19/porsche-911-turbo-s-silver.jpg" class="glowne" id="glowne">

<div class="dolne_zdjecia">
    <img src="https://wallpapersmug.com/download/1600x900/161e19/porsche-911-turbo-s-silver.jpg" class="produkty" onclick="zdjecie1()">
    <img src="https://wallpapersmug.com/download/1600x900/d3c301/silver-porsche-911-carrera.jpg" class="produkty" onclick="zdjecie2()">
    <img src="https://images.hdqwalls.com/download/porsche-911-turbo-s-car-s0-1600x900.jpg" class="produkty" onclick="zdjecie3()">
    <img src="https://images.hdqwalls.com/download/porsche-911-turbo-s-5k-da-1600x900.jpg" class="produkty" onclick="zdjecie4()"> 
</div>
    </div>

    <div class="side_b">
            <div class="header_b">
            <h2 class="p911">911 Turbo S</h2>
            <h2 class="dt">Dane techniczne:<h2></div> <hr class="hr_a">
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
            <li>650(KM)</li>
            <li>3745</li>
            <li>330</li>
            <li>2.6 (s)</li>
            <li>800</li>
            <li>ręczna skrzynia biegów</li>
            <li>6</li>
            <li>tylni</li>
        </ul>
        </div>
        <hr class="hr_a">
        <div class="lower">
        <h2 class="price">Cena: <span class="ch_c">od 650 400 PLN</span></h2>
            <button class="otworz-formular" onclick="otworzFormularz()">KUP</button></div>
    </div>
    
</main>
<section class="sekcja_p_p">
<h2 class="p_s">KNOW YOUR PATH</h2>

</section>

    <section class="sekcja2_p_s">
<img class="img_p1" src="" alt="" srcset="">
    

            <div class="left_o">
            
                <h2></h2><br> <span class="red">Porsche 911 Tubro S</span> </div>
    </section>
    <section class="sekcja2_p_s">
        
            <div class="left_o">
            <h2></h2><br> <span class="red">Porsche 911 Tubro S</span></div><img class="img_p2" src="" alt="" srcset="">
    </section>
<footer>
    <p>© 2024 Strona z Samochodami. Wszelkie prawa zastrzeżone.</p>
</footer>

<script>
    function zdjecie1() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://wallpapersmug.com/download/1600x900/161e19/porsche-911-turbo-s-silver.jpg";
    }

    function zdjecie2() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://wallpapersmug.com/download/1600x900/d3c301/silver-porsche-911-carrera.jpg";
    }

    function zdjecie3() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://images.hdqwalls.com/download/porsche-911-turbo-s-car-s0-1600x900.jpg";
    }

    function zdjecie4() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://images.hdqwalls.com/download/porsche-911-turbo-s-5k-da-1600x900.jpg";
    }

//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------

        function otworzFormularz() {
    const isLoggedIn = <?php echo isset($_SESSION['user_name']) ? 'true' : 'false'; ?>;

    if (isLoggedIn) {
        const nowaStrona = window.open('', '_blank');
        nowaStrona.document.write(`
            <html lang="pl">
            <head>
                <meta charset="UTF-8">
                <title>Realizacja zamówienia</title>
                <style>
                @import url('https://fonts.googleapis.com/css2?family=Birthstone&family=Imperial+Script&family=Italianno&family=Mr+Dafoe&family=Orbitron&family=Sriracha&family=Tomorrow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
                    body {
                        font-family: tomorrow;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        margin: 0;
                        background-color: white;
                        color: black;
                    }
                    h1 {
                        color: black;
                        text-align:center;
                    }
                </style>
            </head>
            <body>
                <h1>Przygotowywanie zamówienia!<br>Wkrótce skontaktujemy się z Tobą.</h1>
            </body>
            </html>
        `);
    } else {
        const nowaStrona = window.open('', '_blank');
        nowaStrona.document.write(`
            <html lang="pl">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Formularz zakupu</title>
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap');
                    body {
                        font-family: Orbitron, sans-serif;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
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
                        font-family: Orbitron, sans-serif;
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

                    .out{
                        text-decoration:none;
                        color: black;
                    }
                        .r{
                        color: black;
                        transition: 0.3s;
                    }
                        .r:hover{
                        color:#cc0000;
                    }
                </style>
            </head>
            <body>
                <h2>Formularz zakupu</h2>
                <div class="formular">
                    <form action="" method="POST">
                        <label for="name">Imię i nazwisko:</label><br>
                        <input type="text" id="name" name="name" required><br><br>

                        <label for="email">E-mail:</label><br>
                        <input type="email" id="email" name="email" required><br><br>

                        <label for="adress">Adres:</label><br>
                        <input type="text" id="adress" name="adress" required><br><br>

                        <label for="message">Notka:</label><br>
                        <textarea id="message" name="message" rows="4" required></textarea><br><br>

                        <button type="submit">Wyślij</button>
                    </form>
                    
                    <a href="zaloguj.php" class="out"><h3>Posiadasz konto? <span class="r">Zaloguj się tutaj.</span></h3></a>
                    
                </div>
            </body>
            </html>
        `);
    }
}
</script>
</body>
</html>
