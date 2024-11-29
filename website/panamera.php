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
    <div class="modele"><a href="index.php">Modele</a></div>
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
<img src="https://th.bing.com/th/id/R.99c046e0caf883f4eb21eedb475aa86a?rik=TtIqf1PRonde2A&pid=ImgRaw&r=0" class="glowne" id="glowne">

<div class="dolne_zdjecia">
    <img src="https://th.bing.com/th/id/R.99c046e0caf883f4eb21eedb475aa86a?rik=TtIqf1PRonde2A&pid=ImgRaw&r=0" class="produkty" onclick="zdjecie1()">
    <img src="https://coolwallpapers.me/picsup/5645809-porsche-panamera-turbo-wallpapers.jpg" class="produkty" onclick="zdjecie2()">
    <img src="https://coolwallpapers.me/picsup/5563515-porsche-panamera-4s-wallpapers.jpg" class="produkty" onclick="zdjecie3()">
    <img src="https://images.hdqwalls.com/download/porsche-panamera-s-63-1600x900.jpg" class="produkty" onclick="zdjecie4()"> 
</div>
    </div>

    <div class="side_b">
            <div class="header_b">
            <h2 class="panamera">Panamera Turbo S</h2>
            <h2 class="dt">Dane techniczne:<h2></div> <hr class="hr_a">
            <div class="lista">
                <div class="left_ul">
        <ul class="lista_l">
            <li>Moc silnika: <span class="lista_p">761(KM)</span></li>
            <li>Pojemność silnika: <span class="lista_p">4.0 V8 biturbo</span></li>
            <li>Prędkość maksymalna: <span class="lista_p">315</span></li>
            <li>Przyspieszenie 0 - 100 (s): <span class="lista_p">3.1 (s)</span></li>
            <li>Moment obrotowy: <span class="lista_p">1050</span></li>
            <li>Typ skrzyni biegów: <span class="lista_p">dwusprzęgłowa</span></li>
            <li>Ilość biegów: <span class="lista_p">8</span></li>
            <li>Rodzaj napędu: <span class="lista_p">AWD</span></li>
        </ul></div>
        </div>
        <hr class="hr_a">
        <div class="lower">
        <h2 class="price">Cena: <span class="ch_c">od 897 000 PLN</span></h2>
            <button class="otworz-formular" onclick="otworzFormularz()">KUP</button></div>
    </div>
    
</main>
<div class="width">
<section class="">
<section class="video-section">
       
        <iframe src="https://www.youtube.com/embed/uNlonJBISyc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </section>

</section>
<div class="main2">
    <section class="sekcja2_p_s">
<img class="img_p1" src="https://cdn.motor1.com/images/mgl/o6Xlq/s1/2021-porsche-panamera-turbo-s-e-hybrid-interior.jpg" alt="" srcset="">
    

            <div class="left_o">
            
                <h2>Design</h2><br> <span class="red">Porsche Panamera Turbo S</span>  łączy elegancję z agresywnym wyglądem, smukłą sylwetką i wyrazistymi reflektorami LED. Wnętrze to luksus z najwyższej jakości materiałami, cyfrowym kokpitem i dużym ekranem dotykowym.</div>
    </section>
    <section class="sekcja2_p_s">
        
            <div class="left_o">
                <h2>Wydajność</h2><br><span class="red">Porsche Panamera Turbo S</span> Silnik V8 biturbo 4,0 l generuje 761 KM i 1 050 Nm, przyspieszając 0–100 km/h w 3,1 s. Maksymalna prędkość to 315 km/h. Napęd AWD i 8-biegowa skrzynia PDK zapewniają doskonałą trakcję i sportową dynamikę.</div><img class="img_p2" src="https://porsche-vietnam.vn/wp-content/uploads/2024/05/972-g3-v6-modelimage-sideshot.png" alt="" srcset=""></div>
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
    </div>
<script>
    function zdjecie1() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://th.bing.com/th/id/R.99c046e0caf883f4eb21eedb475aa86a?rik=TtIqf1PRonde2A&pid=ImgRaw&r=0";
    }

    function zdjecie2() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://coolwallpapers.me/picsup/5645809-porsche-panamera-turbo-wallpapers.jpg";
    }

    function zdjecie3() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://coolwallpapers.me/picsup/5563515-porsche-panamera-4s-wallpapers.jpg";
    }

    function zdjecie4() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://images.hdqwalls.com/download/porsche-panamera-s-63-1600x900.jpg";
    }

//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------

        function otworzFormularz() {
        const isLoggedIn = <?php echo isset($_SESSION['user_name']) ? 'true' : 'false'; ?>;

        if (isLoggedIn) {
            const nowaStrona = window.open('', '_blank');
            nowaStrona.document.write(`
                <!DOCTYPE html>
                <html lang="pl">
                <head>
                    <meta charset="UTF-8">
                    <title>Realizacja zamówienia</title>
                    <style>
                    @import url('https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Press+Start+2P&family=Quicksand:wght@300..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');

                    body {
                        font-family: 'Quicksand';
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        margin: 0;
                        background-color: rgb(247, 251, 255);
                        color: black;
                    }
                    h1 {
                        color: black;
                        text-align: center;
                    }
                    </style>
                </head>
                <body>
                    <h1>Przygotowywanie zamówienia!</h1>
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
