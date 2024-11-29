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
    <style>
   @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap');
                    .mains{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                        margin: 0;
                    }
                    label{
                        margin-left:0vw;
                    }
                    .formular {
                        margin: 20px;
                        padding: 40px;
                        background-color: #f2f2f2;
                        border-radius: 10px;
                        width: 29%;
                    }
                    .formular input,
                    .formular textarea {
                        width: 96%;
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

                     a{
                        text-decoration:none;
                        color: black;
                    }
                        h3{
                        color: black;
                        transition: 0.3s;
                    }
                        h3:hover{
                        color:#cc0000;
                    }
                    @media (max-width: 768px) {
                        .formular {
                            width: 60vw;
                        }
                    }
                    </style>
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
<div class="mains">
<div class="formular">
        <form action="" method="POST">
            <label for="name">Imię i nazwisko:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Wiadomość:</label><br>
            <textarea id="mess" name="mess" rows="5" required></textarea><br><br>

            <label for="phone">Numer telefonu:</label><br>
            <input type="tel" id="phone" name="phone" placeholder="000-000-000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required><br><br>

            <button type="submit">Wyślij</button>
        </form>
        
    </div>
    </div>
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
