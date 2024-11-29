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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <a href="historia.php">O Porsche</a>
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
            <li>Moc silnika: <span class="lista_p">500(kW)|680(KM)</span></li>
            <li>Pojemność silnika: <span class="lista_p">(2 silniki elektryczne)</span></li>
            <li>Prędkość maksymalna: <span class="lista_p">260</span></li>
            <li>Przyspieszenie 0 - 100 (s): <span class="lista_p">3.2 (s)</span></li>
            <li>Moment obrotowy: <span class="lista_p">850</span></li>
            <li>Typ skrzyni biegów: <span class="lista_p">Jednobiegowa i dwubiegowa</span></li>
            <li>Ilość biegów: <span class="lista_p">2</span></li>
            <li>Rodzaj napędu: <span class="lista_p">AWD</span></li>
        </ul></div>
        </div>
        <hr class="hr_a">
        <div class="lower">
        <h2 class="price">Cena: <span class="ch_c">od 354 000 PLN</span></h2>
            <button class="otworz-formular" onclick="otworzFormularz()">KUP</button></div>
    </div>
    
</main>
<section class="">


</section>
<div class="main2">
    <section class="sekcja2_p_s">
<img class="img_p1" src="https://www.hdcarwallpapers.com/download/porsche_718_cayman_gt4_pdk_2020_5k_interior-2560x1440.jpg" alt="" srcset="">
    

            <div class="left_o">
            
                <h2>Design</h2><br> <span class="red">Porsche 718 Cayman S</span> zachwyca dynamiczną i kompaktową sylwetką, która odzwierciedla jego sportowy charakter. Wyraziste linie, niskoprofilowe reflektory, szerokie wloty powietrza i elegancki tył z akcentem świetlnym podkreślają nowoczesny, aerodynamiczny wygląd. Wnętrze oferuje luksus i ergonomię, dzięki wysokiej jakości materiałom oraz intuicyjnemu układowi kokpitu.</div>
    </section>
    <section class="sekcja2_p_s">
        
            <div class="left_o">
                <h2>Wydajność</h2><br><span class="red">Porsche 718 Cayman S</span> zasilany turbodoładowanym silnikiem bokser 2.5L o mocy 350 KM, 718 Cayman S osiąga 100 km/h w zaledwie 4,4 sekundy. Precyzyjne prowadzenie, adaptacyjne zawieszenie oraz napęd na tylne koła gwarantują niezwykłą dynamikę jazdy i kontrolę na zakrętach, zapewniając niezapomniane wrażenia za kierownicą.</div><img class="img_p2" src="https://files.porsche.com/filestore/image/multimedia/none/982-718-c7s-modelimage-sideshot/model/af021b27-d5ba-11ec-80ef-005056bbdc38/porsche-model.png" alt="" srcset=""></div>
    </section>
    <section class="opor_bottom">
    <h2>Śledź nas na naszych mediach społecznościowych!</h2>
                        <div class="icons">
                        <a href="https://pl-pl.facebook.com/" class="fa fa-facebook"></a>
                        <a href="https://x.com/login?mx=2" class="fa fa-twitter"></a>
                        <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                        </div>
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
            window.location.href = "formularz.php";
        }
    }
</script>
</body>
</html>
