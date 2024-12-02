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
<div class="opor_s1">
<h2>Porsche w Polsce</h2>
<div class="map_img"><img src="https://porsche.pl/wp-content/themes/porsche/img/mapa_porsche_centrum_polska.jpg" alt="" srcset=""></div>
</div>
<h2 class="dane">Dane kontaktowe</h2>
<hr class="opor_hr">
<div class="opor_s2">
 <div class="box_opor"><h3>Porsche Centrum Sopot</h3>
    <p>Al. Niepodległości 956</p>
    <p>81-861 Sopot</p>
    <p>Tel: +48 58 550 911 0</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>
 <div class="box_opor"><h3>Porsche Centrum Poznań</h3>
    <p>ul. Warszawska 67</p>
    <p>61-028 Poznań</p>
    <p>Tel: +48 61 849 11 00</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>
 <div class="box_opor"><h3>Porsche Store Warszawa</h3>
    <p>ul. Połczyńska 107</p>
    <p>01-303 Warszawa</p>
    <p>Tel: +48 22 532 41 00</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>
 <div class="box_opor"><h3>Porsche Centrum Warszawa</h3>
    <p>ul. Połczyńska 107</p>
    <p>01-303 Warszawa</p>
    <p>Tel: +48 22 532 41 00</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>
 <div class="box_opor"><h3>Porsche Centrum Warszawa Okęcie</h3>
    <p>ul. Sekundowa 1A</p>
    <p>02-178 Warszawa</p>
    <p>Tel: +48 22 48 90 911</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>
 <div class="box_opor"><h3>Porsche Centrum Wrocław</h3>
    <p>Al. Karkonoska 54</p>
    <p>53-015 Wrocław</p>
    <p>Tel: +48 71 6 911 911</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>
 <div class="box_opor"><h3>Porsche Centrum Katowice</h3>
    <p>ul. Kochłowicka 103</p>
    <p>40-818 Katowice</p>
    <p>Tel: +48 32 39 911 00</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>
 <div class="box_opor"><h3>Porsche Centrum Łódź</h3>
    <p>al. Władysława Bartoszewskiego 15</p>
    <p>93-341 Łódź</p>
    <p>Tel: +48 42 20 871 00</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>
 <div class="box_opor"><h3>Porsche Centrum Kraków</h3>
    <p>ul. Jasnogórska 109</p>
    <p>31-358 Kraków</p>
    <p>+48 12 61 26 911</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>
 <div class="box_opor"><h3>Porsche Centrum Rzeszów</h3>
    <p>ul. Lubelska 119</p>
    <p>35-233 Rzeszów</p>
    <p>tel.: +48 17 20 08 911</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>
 <div class="box_opor"><h3>Porsche Centrum Szczecin</h3>
    <p>ul. Południowa 12</p>
    <p>71-001 Szczecin</p>
    <p>tel.: 91 44 39 911</p>
    <button class="opor_bt">> Zarezerwuj Porsche online</button>
 </div>

</div>
<hr class="opor_hr">
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
</body>
</html>
