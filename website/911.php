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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <header>
        <a href="index.php"> <h1>PORSCHE</h1>
        <hr></a>
    </header>
   

    
    <nav>
    <div class="modele"><a href="index.php#nasze_modele">Modele</a></div>
    
    <a href="historia.php">O Porsche</a>
    <a href="kontakt.php">Kontakt</a>
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
            <li>Moc silnika: <span class="lista_p">650(KM)</span></li>
            <li>Pojemność silnika: <span class="lista_p">3745</span></li>
            <li>Prędkość maksymalna: <span class="lista_p">330</span></li>
            <li>Przyspieszenie 0 - 100 (s): <span class="lista_p">2.7 (s)</span></li>
            <li>Moment obrotowy: <span class="lista_p">800</span></li>
            <li>Typ skrzyni biegów: <span class="lista_p">Ręczna</span></li>
            <li>Ilość biegów: <span class="lista_p">6</span></li>
            <li>Rodzaj napędu: <span class="lista_p">Tylni</span></li>
        </ul></div>
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
            src="https://www.youtube.com/embed/nT2mjvWC3e8" 
            title="Porsche 911 Turbo S: Highlights" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
        </iframe>
    </section>

</section>
<div class="main2">
    <section class="sekcja2_p_s">
<img class="img_p1" src="https://www.motorlegend.com/modules/breve/photos/src/porsche-911-18802-1-P.jpg" alt="" srcset="">
    

            <div class="left_o">
            
                <h2>Design</h2><br> <span class="red">Porsche 911 Turbo S</span> łączy elegancję i agresję, typową dla ikony motoryzacji. Smukła, aerodynamiczna sylwetka podkreślona szerokimi nadkolami i niskim profilem zapewnia doskonałe właściwości jezdne. Charakterystyczne okrągłe reflektory LED, tylny spojler oraz potężne wloty powietrza nadają mu sportowy charakter. Wykończenie wnętrza łączy luksusowe materiały, takie jak skóra i włókno węglowe, z zaawansowaną technologią, oferując zarówno komfort, jak i nowoczesność.</div>
    </section>
    <section class="sekcja2_p_s">
        
            <div class="left_o">
                <h2>Wydajność</h2><br><span class="red">Porsche 911 Turbo S</span> to szczyt wydajności w swojej klasie. Napędzany 3,8-litrowym silnikiem bokser o mocy 650 KM i 800 Nm momentu obrotowego, osiąga przyspieszenie od 0 do 100 km/h w zaledwie 2,7 sekundy. Napęd na wszystkie koła (Porsche Traction Management) zapewnia doskonałą trakcję w każdych warunkach. </div><img class="img_p2" src="https://files.porsche.com/filestore/image/multimedia/none/911-tus-modelimage-sideshot/model/930894f1-6214-11ea-80c8-005056bbdc38/porsche-model.png" alt="" srcset=""></div>
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
            window.location.href = "zakup2.php";
        } else {
            window.location.href = "formularz.php";
        }
    }
</script>
</body>
</html>
