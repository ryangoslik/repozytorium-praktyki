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
<img src="https://images.hdqwalls.com/download/porsche-cayenne-s-2018-2f-1600x900.jpg" class="glowne" id="glowne">

<div class="dolne_zdjecia">
    <img src="https://images.hdqwalls.com/download/porsche-cayenne-s-2018-2f-1600x900.jpg" class="produkty" onclick="zdjecie1()">
    <img src="https://images.hdqwalls.com/download/porsche-cayenne-s-2018-rear-gq-1600x900.jpg" class="produkty" onclick="zdjecie2()">
    <img src="https://images.hdqwalls.com/download/techart-porsche-cayenne-4k-mo-1600x900.jpg" class="produkty" onclick="zdjecie3()">
    <img src="https://th.bing.com/th/id/R.85e6283a94ae526e0d4c588b240eef07?rik=gjFdrJCyvB663w&pid=ImgRaw&r=0" class="produkty" onclick="zdjecie4()"> 
</div>
    </div>

    <div class="side_b">
            <div class="header_b">
            <h2 class="taycan">Taycan Turbo</h2>
            <h2 class="dt">Dane techniczne:<h2></div> <hr class="hr_a">
            <div class="lista">
                <div class="left_ul">
        <ul class="lista_l">
            <li>Moc silnika: <span class="lista_p">440(KM)</span></li>
            <li>Pojemność silnika: <span class="lista_p">2.9 L V6 biturbo</span></li>
            <li>Prędkość maksymalna: <span class="lista_p">265</span></li>
            <li>Przyspieszenie 0 - 100 (s): <span class="lista_p">5.2 (s)</span></li>
            <li>Moment obrotowy: <span class="lista_p">550</span></li>
            <li>Typ skrzyni biegów: <span class="lista_p">Automatyczna</span></li>
            <li>Ilość biegów: <span class="lista_p">8</span></li>
            <li>Rodzaj napędu: <span class="lista_p">AWD</span></li>
        </ul></div>
        </div>
        <hr class="hr_a">
        <div class="lower">
        <h2 class="price">Cena: <span class="ch_c">od 553 000 PLN</span></h2>
            <button class="otworz-formular" onclick="otworzFormularz()">KUP</button></div>
    </div>
    
</main>
<div class="width">
<section class="">
<section class="video-section">
       
        <iframe src="https://www.youtube.com/embed/GDZSCCpFBYA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </section>

</section>
<div class="main2">
    <section class="sekcja2_p_s">
<img class="img_p1" src="https://www.cheautocompro.it/sites/default/files/2020-04/Porsche_Cayenne_Coupe_02.jpg" alt="" srcset="">
    

            <div class="left_o">
            
                <h2>Design</h2><br> <span class="red">Porsche Cayenne S</span> Cayenne S łączy sportowy charakter z luksusowym wyglądem SUV-a. Jego szeroka sylwetka i dynamiczne linie nadwozia sprawiają, że wyróżnia się na drodze. Z przodu znajduje się charakterystyczna osłona chłodnicy oraz smukłe reflektory LED Matrix, które nadają mu agresywny wygląd.</div>
    </section>
    <section class="sekcja2_p_s">
        
            <div class="left_o">
                <h2>Wydajność</h2><br><span class="red">Porsche Cayenne S</span>  napędzany jest przez 2,9-litrowy silnik V6 biturbo, który generuje 440 KM i 550 Nm momentu obrotowego. Dzięki temu przyspiesza od 0 do 100 km/h w 5,2 sekundy. Jego prędkość maksymalna wynosi 265 km/h. SUV ten oferuje napęd na cztery koła (AWD), co zapewnia doskonałą trakcję w różnych warunkach drogowych.</div><img class="img_p2" src="https://files.porsche.com/filestore/image/multimedia/none/9yb-e3-c-tu-modelimage-sideshot/model/104c07d3-a8d4-11eb-80d5-005056bbdc38/porsche-model.png" alt="" srcset=""></div>
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
        mainimg.src = "https://images.hdqwalls.com/download/porsche-cayenne-s-2018-2f-1600x900.jpg";
    }

    function zdjecie2() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://images.hdqwalls.com/download/porsche-cayenne-s-2018-rear-gq-1600x900.jpg";
    }

    function zdjecie3() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://images.hdqwalls.com/download/techart-porsche-cayenne-4k-mo-1600x900.jpg";
    }

    function zdjecie4() {
        let mainimg = document.getElementById("glowne");
        mainimg.src = "https://th.bing.com/th/id/R.85e6283a94ae526e0d4c588b240eef07?rik=gjFdrJCyvB663w&pid=ImgRaw&r=0";
    }

//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------

function otworzFormularz() {
        const isLoggedIn = <?php echo isset($_SESSION['user_name']) ? 'true' : 'false'; ?>;

        if (isLoggedIn) {
            window.location.href = "zakup6.php";
        } else {
            window.location.href = "formularz.php";
        }
    }
</script>
</body>
</html>
