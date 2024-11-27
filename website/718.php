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
<img src="https://images.hdqwalls.com/download/porsche-718-cayman-style-edition-australia-2023-x8-1600x900.jpg" class="glowne" id="glowne">

<div class="dolne_zdjecia">
    <img src="https://images.hdqwalls.com/download/porsche-718-cayman-style-edition-australia-2023-x8-1600x900.jpg" class="produkty" onclick="zdjecie1()">
    <img src="https://images.hdqwalls.com/download/2019-porsche-718-cayman-gts-rear-side-4k-jk-1600x900.jpg" class="produkty" onclick="zdjecie2()">
    <img src="https://images.hdqwalls.com/download/porsche-718-cayman-gt4-tribute-to-906-yp-1600x900.jpg" class="produkty" onclick="zdjecie3()">
    <img src="https://3.bp.blogspot.com/-fRco_k4NPiY/WCF1PFQlbSI/AAAAAAAAJV4/rqOzs3vucws_hS7Muhhz1yspJ8JihlzLwCLcB/s1600/sq2.jpg" class="produkty" onclick="zdjecie4()"> 
</div>
    </div>

    <div class="side_b">
            <div class="header_b">
            <h2 class="p718">718 Cayman S</h2>
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
            <li>350(KM)</li>
            <li>2497</li>
            <li>330</li>
            <li>4.6 (s)</li>
            <li>420</li>
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
<section class="">
<section class="video-section">
        <h2>Odkryj Porsche 911 Turbo S</h2>
        <iframe width="1250" height="703" 
        src="https://www.youtube.com/embed/4AuuJst_99c" 
                title="Porsche: Dynamiczny film" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
    </section>

</section>
<div class="main2">
    <section class="sekcja2_p_s">
<img class="img_p1" src="https://imgd.aeplcdn.com/1280x720/n/4c8j43a_1589771.jpg?q=75" alt="" srcset="">
    

            <div class="left_o">
            
                <h2>Design</h2><br> <span class="red">Porsche 718 Cayman S</span> zachwyca dynamiczną i kompaktową sylwetką, która odzwierciedla jego sportowy charakter. Wyraziste linie, niskoprofilowe reflektory, szerokie wloty powietrza i elegancki tył z akcentem świetlnym podkreślają nowoczesny, aerodynamiczny wygląd. Wnętrze oferuje luksus i ergonomię, dzięki wysokiej jakości materiałom oraz intuicyjnemu układowi kokpitu.</div>
    </section>
    <section class="sekcja2_p_s">
        
            <div class="left_o">
                <h2>Wydajność</h2><br><span class="red">Porsche 718 Cayman S</span> zasilany turbodoładowanym silnikiem bokser 2.5L o mocy 350 KM, 718 Cayman S osiąga 100 km/h w zaledwie 4,4 sekundy. Precyzyjne prowadzenie, adaptacyjne zawieszenie oraz napęd na tylne koła gwarantują niezwykłą dynamikę jazdy i kontrolę na zakrętach, zapewniając niezapomniane wrażenia za kierownicą.</div><img class="img_p2" src="https://files.porsche.com/filestore/image/multimedia/none/982-718-c7s-modelimage-sideshot/model/af021b27-d5ba-11ec-80ef-005056bbdc38/porsche-model.png" alt="" srcset=""></div>
    </section>
    <footer>
        <p class="first">© 2024 Porsche Polska. Polityka prywatności | Ustawienia plików cookie | System zgłoszeń naruszeń</p>
        <p>Od 1 września 2018 r. wszystkie nowe pojazdy wprowadzane do obrotu w Unii Europejskiej muszą być badane i homologowane zgodnie z procedurą WLTP określoną w rozporządzeniu Komisji (UE) 2017/1151. WLTP zapewnia bardziej rygorystyczne warunki badania i bardziej realistyczne wartości zużycia paliwa i emisji CO2 w porównaniu do stosowanej to tej pory metody NEDC. Prezentowane dane dotyczące wartości zużycia paliwa i emisji CO2 są danymi zgodnymi ze świadectwem homologacji typu wyznaczonymi zgodnie z procedurą WLTP. Więcej informacji na temat WLTP na stronie: porsche.pl/wltp.</p>
        <p>Wszelkie prezentowane informacje, w szczególności zdjęcia, wykresy, specyfikacje, opisy, rysunki lub parametry techniczne nie stanowią oferty w rozumieniu Kodeksu cywilnego oraz nie są wiążące i mogą ulec zmianie bez wcześniejszego powiadomienia. Prezentowane informacje nie stanowią zapewnienia w rozumieniu art. 556(1)§2 Kodeksu cywilnego. Z uwagi na ograniczenia parametrów ekranu, na którym obraz jest wyświetlany, przedstawione kolory mogą nieznacznie różnić się od faktycznych kolorów lakieru i materiałów.</p>
        <p>Porsche zastrzega sobie możliwość wprowadzenia zmian w prezentowanych wersjach. Przedstawione detale wyposażenia mogą różnić się od specyfikacji przewidzianej na rynek polski. Zamieszczone zdjęcia mogą przedstawiać wyposażenie opcjonalne, dostępne za dopłatą. Wiążące ustalenie ceny, wyposażenia i specyfikacji pojazdu następują w umowie sprzedaży, a określenie parametrów technicznych zawiera świadectwo homologacji typu pojazdu. Zastrzegamy sobie prawo do zmian i pomyłek. Wszelkie informacje prezentowane na stronie są aktualne na dzień ich zamieszczania. W celu uzyskania najnowszych informacji prosimy kontaktować się z Autoryzowanym Dealerem Marki Porsche.</p>
        <p>Wszystkie produkowane obecnie samochody marki Porsche są wykonywane z materiałów spełniających pod względem możliwości odzysku i recyklingu wymagania określone w normie ISO 22628 i są zgodne z europejskimi świadectwami homologacji wydanymi wg dyrektywy 2005/64/WE. Volkswagen Group Polska sp. z o.o. podlega obowiązkowi zapewnienia wszystkim użytkownikom samochodów grupy sieci odbioru pojazdów po wycofaniu ich z eksploatacji, zgodnie z wymaganiami ustawy z 20 stycznia 2005 r. o recyklingu pojazdów wycofanych z eksploatacji. Więcej informacji dotyczących ekologii znajdą Państwo na stronie: porsche.pl/porsche-impact/</p>
    </footer>

<script>
    function zdjecie1() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://images.hdqwalls.com/download/porsche-718-cayman-style-edition-australia-2023-x8-1600x900.jpg";
    }

    function zdjecie2() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://images.hdqwalls.com/download/2019-porsche-718-cayman-gts-rear-side-4k-jk-1600x900.jpg";
    }

    function zdjecie3() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://images.hdqwalls.com/download/porsche-718-cayman-gt4-tribute-to-906-yp-1600x900.jpg";
    }

    function zdjecie4() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://3.bp.blogspot.com/-fRco_k4NPiY/WCF1PFQlbSI/AAAAAAAAJV4/rqOzs3vucws_hS7Muhhz1yspJ8JihlzLwCLcB/s1600/sq2.jpg";
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
