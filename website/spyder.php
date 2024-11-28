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
    <div class="modele"><a href="index.php">Modele</a></div>
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
            <h2 class="dt">Dane techniczne:<h2></div> <hr class="hr_a">
            <div class="left_ul">
        <ul class="lista_l">
            <li>Moc silnika: <span class="lista_p">652(kW)|887(KM)</span></li>
            <li>Pojemność silnika: <span class="lista_p">4593</span></li>
            <li>Prędkość maksymalna: <span class="lista_p">345</span></li>
            <li>Przyspieszenie 0 - 100 (s): <span class="lista_p">2.6 (s)</span></li>
            <li>Moment obrotowy: <span class="lista_p">1280</span></li>
            <li>Typ skrzyni biegów: <span class="lista_p">dwusprzęgłowa</span></li>
            <li>Ilość biegów: <span class="lista_p">7</span></li>
            <li>Rodzaj napędu: <span class="lista_p">przedni</span></li>
        </ul></div>
        <hr class="hr_a">
        <div class="lower">
        <h2 class="price">Cena: <span class="ch_c">1 725 000 EUR</span> (import)</h2>
            <button class="otworz-formular" onclick="otworzFormularz()">KUP</button></div>
    </div>
    
</main>
<div class="width">
<section class="">
<section class="video-section">
        <h2>Odkryj Porsche 911 Turbo S</h2>
        <iframe src="https://www.youtube.com/embed/Wo_6X25DXAQ" 
                title="Porsche: Dynamiczny film" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
    </section>

</section>
<section class="sekcja_p_s">
<h2 class="p_s">NO LIMITS.</h2>

</section>
<div class="main2">
    <section class="sekcja2_p_s">
<img class="img_p1" src="https://i.pinimg.com/originals/c4/95/56/c4955632ad49a3cb996dd19903a1dd11.jpg" alt="" srcset="">
    

            <div class="left_o">
            
                <h2>Design</h2><br> <span class="red">Porsche 918 Spyder</span> jest absolutnie wyjątkowy. Przede wszystkim, połączenie nowoczesnego stylu i wyścigowych elementów. Dodatkowo, aerodynamika samochodu została zaprojektowana tak, aby zminimalizować opory powietrza i zwiększyć zasięg. Porsche 918 Spyder to idealne połączenie wydajności i designu. Ten sportowy samochód sprawi, że każdy fan motoryzacji będzie mógł cieszyć się jego mocą i efektywnością podczas jazdy.</div>
    </section>
    <section class="sekcja2_p_s">
        
            <div class="left_o">
                <h2>Wydajność</h2><br><span class="red">Porsche 918 Spyder</span> jest wyjątkowo wydajnym samochodem sportowym, który łączy w sobie moc i efektywność. W porównaniu do swojej poprzedniczki, Porsche Carrera GT, model 918 Spyder oferuje znacznie większą moc silnika V8 o mocy 608 KM. To niespotykane połączenie mocy i precyzji sprawia, że ten samochód ma zupełnie nowe możliwości.</div><img class="img_p2" src="https://p.turbosquid.com/ts-thumb/K2/Si84lj/5x/porsche_918_spyder_06/jpg/1637859117/1920x1080/fit_q87/9a42d2675f7f5dddf38055f7a6bde51bf8604c26/porsche_918_spyder_06.jpg" alt="" srcset=""></div>
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
