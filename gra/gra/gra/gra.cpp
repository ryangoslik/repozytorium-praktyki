#include <iostream>
#include <string>
#include <thread>
#include <chrono>

using namespace std;

struct Tank {
    std::string model;     // Model czołgu
    int ammoAP;            // Amunicja przeciwpancerna
    int ammoHE;            // Amunicja wybuchowa
    int ammoHVAP;          // Amunicja wysokoprędkościowa

    void reloadAmmo(int ap, int he, int hvap) {
        ammoAP += ap;
        ammoHE += he;
        ammoHVAP += hvap;
        std::cout << "Zaladowano amunicje: +" << ap << " AP, +" << he << " HE, +" << hvap << " HVAP.\n";
    }

    void fire(std::string ammoType) {
        if (ammoType == "AP") {
            if (ammoAP > 0) {
                ammoAP--;
                std::cout << "Wystrzelono pocisk AP! Pozostalo: " << ammoAP << " AP.\n";
            }
            else {
                std::cout << "Brak amunicji AP!\n";
            }
        }
        else if (ammoType == "HE") {
            if (ammoHE > 0) {
                ammoHE--;
                std::cout << "Wystrzelono pocisk HE! Pozostalo: " << ammoHE << " HE.\n";
            }
            else {
                std::cout << "Brak amunicji HE!\n";
            }
        }
        else if (ammoType == "HVAP") {
            if (ammoHVAP > 0) {
                ammoHVAP--;
                std::cout << "Wystrzelono pocisk HVAP! Pozostalo: " << ammoHVAP << " HVAP.\n";
            }
            else {
                std::cout << "Brak amunicji HVAP!\n";
            }
        }
        else {
            std::cout << "Nieznany typ amunicji!\n";
        }
    }

    void displayAmmo() const {
        std::cout << "Stan amunicji:\n";
        std::cout << "Przeciw czolgowy                    AP: " << ammoAP << "\n";
        std::cout << "Przeciw piechoty                    HE: " << ammoHE << "\n";
        std::cout << "Przeciw mocniej opancerzonym celom  HVAP: " << ammoHVAP << "\n";
    }
};
bool fastMode = false; // Deklaracja zmiennej fastMode

void typeWriterEffect(const std::string& text, int delayMs = 25) {
    for (char c : text) {
        std::cout << c << std::flush; // Upewnij się, że znaki są natychmiast wyświetlane
        if (!fastMode) { // Sprawdzenie trybu szybkiego
            std::this_thread::sleep_for(std::chrono::milliseconds(delayMs));
        }
    }
    std::cout << std::endl;
}

void chooseDisplayMode() {
    std::cout << "Wybierz tryb wyswietlania tekstu:\n";
    std::cout << "1. Normalny\n";
    std::cout << "2. Szybki\n";
    int choice;
    std::cin >> choice;

    if (choice == 2) {
        fastMode = true;
        std::cout << "Wlaczono szybki tryb wyswietlania.\n";
    }
    else {
        fastMode = false;
        std::cout << "Wlaczono normalny tryb wyswietlania.\n";
    }
}

struct Player {
    std::string name;
    std::string unit;
    int health;
    Tank tank; // Dodano czołg jako część gracza
    int ammo;            // Amunicja do broni osobistej
    int clip;            // Magazynki
    int atgrenades;      // Granaty przeciwczołgowe
    int apgrenades;      // Granaty odłamkowe
    int lightAttackDamage;
    int heavyAttackDamage;
    int defenseValue;
};

struct Enemy {
    int health;
    int attackDamage;
};

void battle(Player& player, Enemy& enemy) {
    srand(time(0));
    while (player.health > 0 && enemy.health > 0) {
        int choice;
        typeWriterEffect("\nWybierz akcje:");
        typeWriterEffect("1. Lekki atak");
        typeWriterEffect("2. Ciezki atak");
        typeWriterEffect("3. Obrona");
        cout << "Twoj wybor: ";
        cin >> choice;

        if (choice == 1) {
            // Lekki atak
            int damage = player.lightAttackDamage;
            enemy.health -= damage;
            typeWriterEffect("Zadales " + to_string(damage) + " obrazen przeciwnikowi!");
        }
        else if (choice == 2) {
            // Ciezki atak
            int damage = player.heavyAttackDamage;
            enemy.health -= damage;
            typeWriterEffect("Zadales " + to_string(damage) + " obrazen przeciwnikowi!");
        }
        else if (choice == 3) {
            // Obrona
            int reducedDamage = max(0, enemy.attackDamage - player.defenseValue);
            player.health -= reducedDamage;
            typeWriterEffect("Bronisz sie, otrzymujesz " + to_string(reducedDamage) + " obrazen!");
            continue; // Przeciwnik nie dostaje obrazen, gracz sie tylko broni
        }
        else {
            typeWriterEffect("Nieprawidlowy wybor, tracisz ruch!");
        }

        // Sprawdz stan przeciwnika
        if (enemy.health <= 0) {
            typeWriterEffect("Pokonales przeciwnika!");
            break;
        }

        // Atak przeciwnika
        int enemyDamage = enemy.attackDamage;
        player.health -= enemyDamage;
        typeWriterEffect("Przeciwnik atakuje, otrzymujesz " + to_string(enemyDamage) + " obrazen!");

        // Sprawdz stan gracza
        if (player.health <= 0) {
            typeWriterEffect("Zostales pokonany!");
            break;
        }

        // Wyswietl aktualny stan zdrowia
        typeWriterEffect("Twoje zdrowie: " + to_string(player.health));
        typeWriterEffect("Zdrowie przeciwnika: " + to_string(enemy.health));
    }
}

// Funkcja do tworzenia postaci
Player createCharacter() {
    Player player;
      
    std::cout << "=== Tworzenie postaci ===\n";
    std::cout << "Podaj swoje imie: ";
    std::cin >> player.name;

    std::cout << "Wybierz jednostke:\n";
    std::cout << "1. Dzialonowy czolgu T26 Pershing (USA)\n";
    int choice;
    std::cin >> choice;

    if (choice == 1) {
        player.unit = "Dzialonowy czolgu T26 Pershing";
        player.health = 100;
        player.heavyAttackDamage = 60;
        player.lightAttackDamage = 25;
        player.defenseValue = 25;
        player.ammo = 32;
        player.clip = 8;
        player.atgrenades = 1;
        player.apgrenades = 2;
        player.tank = { "T26 Pershing", 4, 5, 2 }; // Startowa ilość amunicji do czołgu
    }
    else {
        std::cout << "Nieprawidlowy wybor. Ustawiono domyslnie czolgiste.\n";
        player.unit = "Dzialonowy czolgu T26 Pershing";
        player.health = 100;
        player.ammo = 32;
        player.clip = 8;
        player.atgrenades = 1;
        player.apgrenades = 2;
        player.tank = { "T26 Pershing", 4, 5, 2 };
    }

    std::cout << "Witaj, " << player.name << "! Wybrales jednostke: " << player.unit << ".\n";
    return player;
}

// Funkcja do stopniowego wyświetlania tekstu



// Funkcja fabularna dla załogi czołgu
void tankPrologue(Player& player) {
    int choice;
    typeWriterEffect("\n=== Prolog: " + player.unit + " ===");
    typeWriterEffect("Jest rok 1945. Jestes dzialonowym czolgu Pershing, nowego czolgu wielkiej armii USA! \nTwoim zadaniem jest obsluga dziala kalibru 90mm ktore moze czynic cuda i przebic kazdy czolg, ktory stanie ci na drodze do Berlina...");
    typeWriterEffect("Jestes teraz w Koloni 585km od Berlina, miasto pelnych nazistow, ktorzy uciekaja do Berlina aby wprowadzic defensywe...");
    typeWriterEffect("Ty jak i zaloga musicie byc czujni, jest pelno zasadzek pozostawionych przez ich armie...");
    typeWriterEffect("Poznaj swoja zaloge, teraz juz braci na ktorych bedziesz polegac i oni na tobie...");
    typeWriterEffect("Dowodca Robert Early, to on decyduje i dba o was wszytskich, sluchaj sie jego rozkazow a wszytsko bedzie dobrze i bezpiecznie wrocisz do ojczyzny\n Ladowniczy Mike Stakowsky, doswiadczony ladowniczy, juz byl na tym stanowisku w przeszlosci w czolgu srednim M4A3E8 HVSS tzw. Easy Eight.\n To on slucha sie dzialonowego, ktory rodzaj pocisku ma zaladowac do zamka dziala.\n Kierowca John Kurt, przed wojna prowadzil ciezarkowki, teraz znalazl sie w 46 tonowej maszynie.\n Jeden z najlepszych kierowcow jakich mogles dostac.\n Operator karabinu maszynowego Brad Smith, swiezy rekrut, zaledwie ukonczyl 18 lat,\n obiecales mu, ze wroci do domu bezpiecznie, wiec niech ta obietnica sie spelni.\n Oraz ty, dzialonowy dziala. Oni polegaja na tobie, nie mozesz popelnic zadnego bledu,\n bo moze kosztowac cie to twoje jak i zycie twojej zalogi!\n");

    player.tank.displayAmmo();
    typeWriterEffect("Aktualizowanie histori...");
    typeWriterEffect("Kierowca stoj! - Padl rozkaz Early'iego");
    typeWriterEffect(player.name + " na drugiej jest Pantera!");
    typeWriterEffect("Widze ja! - Powiedzialem");
    typeWriterEffect("!1. Rozkaz zaladowanie pocisku AP i strzel!");
    typeWriterEffect("2. Rozkaz zaladowanie pocisku HE i strzel");
    typeWriterEffect("3. Nie podejmuj zadnej akcji...");

    std::cin.ignore(std::numeric_limits<std::streamsize>::max(), '\n');

    std::cin >> choice;

    if (choice == 1) {
        player.tank.fire("AP");
        typeWriterEffect("Pantera trafiona w kadlub!");
        typeWriterEffect("Dzialo gotowe! - Powiedzialem");
        typeWriterEffect("Decyzja nalezy do ciebie " + player.name + "! strzelaj bez rozkazu!");
        typeWriterEffect("1. Strzel ponownie (-1 AP)");
        typeWriterEffect("2. Nie strzelaj");

        std::cin.ignore(std::numeric_limits<std::streamsize>::max(), '\n');
        int choice;
        std::cin >> choice;
        if (choice == 1) {
            player.tank.fire("AP");
            typeWriterEffect("Trafiles w amunicje teraz plona! HAHAHAH!!! juz nie powstana z tego! - powiedziala cala zaloga");
        }
        else if (choice == 2) {
            typeWriterEffect("Patrzcie! otwieraja wlazy i wychodza z czolgu! strzelac?! - Krzyknal Brad");
            typeWriterEffect("Nie ma ucieczki przed nami - powiedzial spokojnym glosem Early");
            typeWriterEffect("*Brad otworzyl ogien z km-u neutralizujac reszte wrogow*");

        }
    }
    else if (choice == 2) {
        player.tank.fire("HE");
        typeWriterEffect("Zaloga pantery dostala chwilowego szoku ale po chwili wystrzelili pocisk w bok waszego pojazdu...");
        player.health = 0;
    }
    else if (choice == 3) {
        typeWriterEffect("Na co ty czekasz " + player.name + "?! Boze nie!!!");
        typeWriterEffect("Zostaliscie trafieni w bok od Pantery...");
        player.health = 0;
    }
    else {
        typeWriterEffect("Decyzja nie zostala podjeta na czas...");
        player.health = 0;
    }


    if (player.health > 0) {
        typeWriterEffect("Aktualizowanie histori...");
        typeWriterEffect(player.name + " bylo blisko i dobrze sie spisales, ale kazdy ma miec oczy otwarte! Pelno tu ukrywajacych sie szkopow. - Powiedzial Early.");
        typeWriterEffect("Tak jest! - odparlismy");
        typeWriterEffect("Na 11 gniazdo km'u i Panzerfaust w oknie na 1 pietrze!! - krzyknal ze strachem w glosie John.");
        typeWriterEffect(player.name + " dawajcie im przeciw piechotnym! wyploszymy ich z tamtad!");
        typeWriterEffect("1. Potwierdz zaladowanie pocisku HE i strzel w filar podtrzymujacy zruinowany budynek");
        typeWriterEffect("2. Potwierdz zaladowanie pocisku HE i strzel w okno");
        typeWriterEffect("3. Urzyj sprezonego km-u z wiezy czolgu i strzelaj w stanowsiko wroga");
        typeWriterEffect("4. Nie podejmuj zadnej decyzji");

        std::cin.ignore(std::numeric_limits<std::streamsize>::max(), '\n');
        int choice;
        std::cin >> choice;



        if (choice == 1) {
            player.tank.fire("HE");
            typeWriterEffect("Budynek sie zawala! Dobra robota!");
        }
        else if (choice == 2) {
            player.tank.fire("HE");
            typeWriterEffect("Trafienie! Przeciwnik unieszkodliwiony!");
        }
        else if (choice == 3) {
            typeWriterEffect("Gniazdo unieszkodliwone!\n");
            typeWriterEffect("Panzerfaust z drugiego okna uwaga!!!\n");
            typeWriterEffect("*Zostaliscie trafieni w kadlub z panzerfausta*\n");
            typeWriterEffect("Niech to szlag trafili Brada!!! - Krzyknal kierowca\n");
            typeWriterEffect(player.name + " dlaczego nie strzeliles z dziala!? - Zapytal sie mnie Robert");

        }
        else if (choice == 4) {
            typeWriterEffect("Na co ty czekasz " + player.name + "?! Ognia!!!\n");
            typeWriterEffect("*Zostaliscie trafieni w kadlub z panzerfausta*\n");
            typeWriterEffect("Niech to szlag trafili Brada!!! - Krzyknal kierowca\n");
            typeWriterEffect(player.name + " dlaczego nie strzeliles!? - Zapytal sie mnie Robert");

        }
        else {
            typeWriterEffect("Decyzja nie zostala podjeta na czas...");
            player.health = 0;
        }
    }
    if (player.health > 0) {
        typeWriterEffect("Aktualizowanie histori...");
        typeWriterEffect("Dobra robota " + player.name + "!  \nJohn ruszajmy w droge z nasza 3 dywizja pancerna! - Powiedzial Early ");
        typeWriterEffect("Robi sie! - Krzyknal kierowca");
        typeWriterEffect("*Podazalismy w strone Berlina, cala 3 Dywizja Pancerna i 1. Armia Amerykanska, to oni spotkali sie jako pierwsi z armia radziecka\n w miescie gdzie mielismy sie zatrzymac.* ");
        typeWriterEffect("*Dowiedzielismy sie ze tylko komunisci przeprowadza atak na Berlin. Boze tyle drogi za nami i nawet nie mozemy sami zniszczyc gniazda tych szerszeni???\n*");
        typeWriterEffect("*Chociaz wyzwolilismy inne miasta, takie jak Kolonia. Robi sie coraz zimniej, ta wojna sie przeciaga i to przez tych komuchow!\n*");
        typeWriterEffect("*Gdybysmy tylko mogli byc teraz w Berlinie... Rzesza padla by po niecalym miesiacu walki!\n Ale nie, ten egoistyczny komuch Stalin mysli ze zmobilizuje wschodnia Europe i mysli zwyciezy.*");
        typeWriterEffect("Mamy jeszcze 13 kilometrow do Torgau, w miescie gdzie 1. Armia Amerykanska juz powina tak stacjonowac z Ruskami! - Powiedzial Early\n");
        typeWriterEffect("Nie odpowiadaja dowodco! - Krzyknal Brad sprawdzajac radio.\n ");
        typeWriterEffect("To pewnie przez warunki pogodowe, jest zimno i jeszcze ta sneizyca, zachowajcie spokoj - Powiedzial dowodca\n ");
        typeWriterEffect("*Nie powiem ciezko zachowac spokoj w takich sytuacjach jak ta*\n ");
        typeWriterEffect("Dowodco?- powiedzial Kurt, nasz kierowca.\n ");
        typeWriterEffect("To nie moze byc prawdziwe.. - Nie dowierzal Early\n ");
        typeWriterEffect("*Niczego tam nie bylo, doslownie niczego... ani 1. Armi Amerykanskiej ani Sowietow\n ");
        typeWriterEffect("tylko same wraki naszych i ruskich czolgow, rozszarpane,po przecinane, to nie wyglada na obrazeni ad dziala czy czolgu!*\n ");
        typeWriterEffect("Tylko same plomienie i budnyki zrownane z ziemia. Nie wiem czy to szczescie ze natrafilismy na opuznienie i opor w Koloni\n ");
        typeWriterEffect("ale jedno jest wiadome ze.. co ja wygaduje!? Nic nie jest wiadome!*\n ");
        typeWriterEffect("Dowodco pozostale ocalale t34 na 2 odleglosc 400 metrow - powiedzial Mike. \n ");
        typeWriterEffect("Zdobyczne.. oznaczenia niemieckie na bokach wiez, nie mozemy sie pokazac. Zgasic swiatla i silnik! - powiedzial Early\n ");
        typeWriterEffect("Jaki plan? - zaczyna sie dyskusja\n ");
        typeWriterEffect("1. zaproponuj atak frontalny, nasz czolg ma znacznie lepszy pancerz o ile nas nie oflanukja wiec 3 czolgi t34 nie beda dla nas problemem\n ");
        typeWriterEffect("2. zaproponuj atak partyzancki z uzyciem materialu wybuchowego i garantow at\n ");





        std::cin.ignore(std::numeric_limits<std::streamsize>::max(), '\n');
        int choice;
        std::cin >> choice;



        if (choice == 1) {
            typeWriterEffect("Kierowca jazda!");
            typeWriterEffect("Pokaz im na co nas stac " + player.name + "!");
            typeWriterEffect("1. Strzel z AP w czolg przeciwnika");
            typeWriterEffect("2. Strzel z km-u w wroga piechote");

            int choice;
            std::cin >> choice;

            if (choice == 1) {
                if (player.tank.ammoAP > 0) { // Sprawdzamy, czy jest amunicja AP
                    player.tank.fire("AP");
                    typeWriterEffect("Cel zniszczony! - Krzyknal Brad");
                    typeWriterEffect("Nastepny tuz przed nami!! - Krzyknal John");
                    typeWriterEffect("1. Strzel z AP w czolg przeciwnika");
                    typeWriterEffect("2. Nic nie rob");

                    int choice; cin >> choice;
                    if (choice == 1) {
                        player.tank.fire("AP");
                        typeWriterEffect("Rykoszet! - Krzyknal Robert");
                    }
                    else {
                        player.health = 0;
                        return;
                    }

                    if (player.tank.ammoAP > 0) {
                        typeWriterEffect("Laduj AP!");
                        typeWriterEffect("Strzelaj bez rozkazu " + player.name + "!!!");
                        player.tank.fire("AP");
                    }
                    else {
                        typeWriterEffect("Brak amunicji AP! Zaladuj HVAP!!");
                        typeWriterEffect("1. Strzel z HVAP w czolg przeciwnika");
                        typeWriterEffect("2. Nic nie rob");
                        int choice; cin >> choice;
                        if (choice == 1) {
                            player.tank.fire("HVAP");
                            typeWriterEffect("Trafienie w wieze! Unieszkodliwieni!! Krzyczy Mike");
                        }
                        else {
                            player.health = 0;
                            return;
                        }
                        typeWriterEffect("Brad, " + player.name + "! Strzelajcie z km-ow w piechote! - Krzyknal Early");
                    }
                    typeWriterEffect("Dwa tygrysy wyjechaly z 3 uwaga! - Krzyknal ze strachem Mike");
                    typeWriterEffect("Piechota przeciwnika na 6 i 9, zrobcie cos!!! - Krzyknal Early");
                    typeWriterEffect("Tygrys otwiera ogien w nasza strone uwaga! *huk*");
                    typeWriterEffect("*Zostalismy trafieni w bok wiezy, widzialem same iskry*");
                    typeWriterEffect("*Niemieccy zolnierze wyciagli mnie i Brada z naszego czolgu*");
                    typeWriterEffect("*Mieli jakies plecaki, mnostwo jakichs laczy, kabli, nigdy nie widzialem czegos podobnego*");
                    typeWriterEffect("*Jestem ledwo przytomny ale widze go, Brada, ciagna go po ziemi do jakiegos transportera, jest 9 grudnia 45 roku, wojna ma sie skonczyc jutro, chociaz miala sie.*\nNacisnij 1 aby kontynuowac");
                }
            }
            else if (choice == 2) {
                typeWriterEffect("Brad, " + player.name + "! Strzelajcie z km-ow w piechote! - Krzyknal Early");
                typeWriterEffect("Tygrys otwiera ogien w nasza strone uwaga! *huk*");
                typeWriterEffect("*Zostalismy trafieni w bok wiezy, widzialem same iskry*");
                typeWriterEffect("*Niemieccy zolnierze wyciagli mnie i Brada z naszego czolgu*");
                typeWriterEffect("*Mieli jakies plecaki, mnostwo jakichs laczy, kabli, nigdy nie widzialem czegos podobnego*");
                typeWriterEffect("*Jestem ledwo przytomny ale widze go, Brada, ciagna go po ziemi do jakiegos transportera, jest 9 grudnia 45 roku, wojna ma sie skonczyc jutro, chociaz miala sie.*\nNacisnij 1 aby kontynuowac");
            }
            else {
                typeWriterEffect("Nieprawidlowy wybor! Strata czasu, przeciwnik atakuje!");
                player.health = 0;
                return;
            }

        }
    }


    if (player.health > 0) {
        int choice;
        typeWriterEffect("\n=== Rozdzial 1: Zagubiony ===");
        typeWriterEffect("Rok 1945. Po latach brutalnych zmagan na frontach Europy, II wojna swiatowa miala zakonczyc sie w inny sposob. Alianci, wspierani przez komunistyczne sil ZSRR, przeprowadzili ostatnia, desperacka ofensywe na Berlin w grudniu 1945 roku. Operacja byla pelna nadziei, ale rowniez zmeczenia. Zimowa ofensywa miala zakonczyc rzady III Rzeszy, a niemieckie panowanie mialo stac sie wspomnieniem. Jednak niespodziewane wydarzenie zmienilo wszystko.\n");
        typeWriterEffect("Niemcy, z pomoca swoich nowoczesnych technologii i tajnych broni, zatrzymali atak. Ale to nie wystarczylo. W odpowiedzi na zblizajacy sie upadek, III Rzesza zdecydowala sie na ostateczny krok. W wyniku desperackich dzialan, 10 grudnia 1945 roku, zrzucono bombe atomowa na Londyn, a kilka godzin pozniej na Nowy Jork, zmieniajac uklad sil na calym swiecie. Alianci, w obliczu tak ogromnej katastrofy, poddali sie, a cala zachodnia cywilizacja upada. Ziemie opanowywane przez Niemcow weszly w nowa, brutalna ere.\n");
        typeWriterEffect("Nazywam sie " + player.name + ". Jestem, a wlasciwie byly " + player.unit + ". Ledwo co pamietam z naszej ostatniej akcji w Torgau, jedynie iskry, mroz i Brada, ktorego tutaj nie ma...\n");
        typeWriterEffect("Minelo moze 12 godzin? Moze nawet i 14. Sam nie wiem, jestem zdezorientowany. Znalazlem sie w jakims wiezieniu? Nie jestem tu sam, jest tu duzo innych ludzi, od Niemcow, po Francuzow, a nawet i Polakow\n");
        typeWriterEffect("Ochroniarze nosza cos podobnego do pancerzy, posiadaja maski z jednolitej plyty pancerza na twarz z otworami na czarne wizjery. Dwie rury spod tej plyty ida do jego plecaka lub jakiegos urzadzenia, ktore nosi tu prawie kazdy szkop.\n");
        typeWriterEffect("Leze na tym niewygodnym lozku z podbitym okiem, myslac jak stąd uciec, az nagle uslyszalem alert, ktory byl transmitowany przez radia niemieckie i naglosnienie w tym obiekcie\n");
        typeWriterEffect("Wielka chwila nadeszla. Nowy Jork, serce Ameryki, zostalo zniszczone. Nasza potege, nasza bron, zadecydowaly o losach wojny. Rzesza wykonała pierwszy, decydujacy krok ku ostatecznemu zwyciestwu.\nBomba atomowa spadla na wroga, a sily amerykanskie zostaly calkowicie zniszczone. W obliczu tej poteznej sily, nie ma juz watpliwosci – wojna zostala wygrana! Swiat, teraz pod nasza kontrola,\n bedzie zyl zgodnie z nasza wola. To my, Narod Niemiecki, ksztaltujemy przyszlosc tej planety. Zwyciestwo jest nasze!\n");
        typeWriterEffect("Ale to nie koniec. \nZ ostatnich resztek alianckich sil na zachodzie nie zostanie nic. Nasze plany przewiduja calkowite wyeliminowanie wszelkiego oporu – zarówno na ziemiach europejskich, jak i w pozostalych zakatkach swiata.\nJuz wkrotce kazda forma buntu czy sprzeciwu wobec nowego porzadku zostanie bezwzglednie stlumiona.\n");

        typeWriterEffect("Swiat, teraz pod nasza kontrola, bedzie zyl zgodnie z nasza wola.\nTo my, Narod Niemiecki, ksztaltujemy przyszlosc tej planety. Zwyciestwo jest nasze, a kazda ostatnia nadzieja na opor zostanie zmiazdzona.");
        typeWriterEffect("O nie.. to nie moze byc prawda. Musze sie stąd jak najszybciej uciec, ale musze znalezc Brada.");
        typeWriterEffect("1. Zawolaj straznika, blefuj, zacznij walke gdy wejdzie do celi");
        typeWriterEffect("2. Zatkaj zlew i zalej cele woda");
        player.health = 100;
        player.ammo = 0;
        player.apgrenades = 0;
        player.atgrenades = 0;
        player.clip = 0;

        cin >> choice;

        if (choice == 1) {
            typeWriterEffect("AY! Szczury sa pod lozkiem!");
            typeWriterEffect("Was? Pokaz gdzie, zachowaj dystans, wiezniu.");
            typeWriterEffect("*Straznik uklęknął i patrzy pod lozkiem, odkładając karabin na ziemię obok niego*\n");
            typeWriterEffect("1. Wez karabin i zagroz straznikowi");
            typeWriterEffect("2. Skocz na straznika i sproboj go przewrocic i udusic");

            cin >> choice;

            if (choice == 1) {
                typeWriterEffect("*Odglos przeladowania* Nie ruszaj sie! - krzyknąłem");
                typeWriterEffect("Oh man! Stop! Nie strzelaj!");
                typeWriterEffect("Brad Smith!");
                typeWriterEffect("Wie?");
                typeWriterEffect("Brad Smith gdzie on jest!?");
                typeWriterEffect("*Dowiadujesz sie gdzie jest Brad, obezwladniasz straznika oraz bierzesz jego uniform i ekwipunek*\n *!Odblokowano Sturmgewehr 1945!*\n +31 ammo\n +1 granat ap");
                typeWriterEffect("*Ciche wejscie oraz nowa sciezka odblokowana!*");
                player.health = 100;
                player.ammo = 31;
                player.apgrenades = 1;
                player.atgrenades = 0;
                player.clip = 1;

                
            }
            else if (choice == 2) {
                Enemy enemy = { 80, 40 }; // Przeciwnik: 80HP, atak 15 obrazen
                typeWriterEffect("*Zaczyna się walka!*");
                cout << "Twoje HP: " << player.health << " Obrazenia ciezkiego ataku:" << player.heavyAttackDamage << " Obrazenia lekkiego ataku:" << player.lightAttackDamage << " amunicja: " << player.ammo << endl;
                cout << "Przeciwnik: |Straznik Klaus Jager|  HP: " << enemy.health << " DMG: 2" << enemy.attackDamage;
                battle(player, enemy);
                if (player.health > 0) {
                    typeWriterEffect("*Bierzesz uniform i ekwipunek straznika*\n *!Odblokowano Sturmgewehr 1945!*\n +31 ammo\n +1 granat ap");
                }
                else {
                    return;
                }
            }
        }
        else if (choice == 2) {
            Enemy enemy = { 120, 60 }; // Przeciwnik: 100HP, atak 20 obrazen
            typeWriterEffect("*Zaczyna się walka!*");
            cout << "Twoje HP: " << player.health << " Obrazenia ciezkiego ataku:" << player.heavyAttackDamage << " Obrazenia lekkiego ataku:" << player.lightAttackDamage << " amunicja: " << player.ammo << endl;
            cout << "Przeciwnik: |Straznik Klaus Jager|  HP: "<< enemy.health << " DMG: " << enemy.attackDamage;
            battle(player, enemy);
            if (player.health > 0) {
                typeWriterEffect("*Bierzesz uniform i ekwipunek straznika*\n *!Odblokowano Sturmgewehr 1945!*\n +31 ammo\n +1 granat ap");
            }
            else {
                return;
            }
        }

        if (player.health == 100) {
            cout << "Zdrowie gracza:" << player.health << " Granaty ap:" << player.apgrenades << " Granaty at:" << player.atgrenades << " amunicja:" << player.ammo << endl;
            typeWriterEffect("Musze znalsc droge do labolatorium gdzie przetrzymuja Brada...");
            ///////dalej

        }
        else if (player.health != 100) {
            typeWriterEffect("Udalo ci sie przezyc, ale jestes zraniony!\nMusze znalesc Brada...");
            typeWriterEffect("*Widzisz przed soba 2 korytarze*");
            typeWriterEffect("1. Lewy prowadzi do niezajomego terenu placowki (*Sektion Zwei*)");
            typeWriterEffect("2. Prawy prowadzi do zbrojowni (*mozliwi niebezpieczni wrogowie*)");
            int choice;
            cin >> choice;
            if (choice == 1) {
                typeWriterEffect("*..idziesz przez korytarz*\n*otwierasz stalowe drzwi, okazuje sie ze jestes teraz w magazynie*\n*zauwazasz wielki napis Sektion Eins, sekcja biochemiczna tego budynku, cos ci mowi ze tam musisz sie udac*");
                typeWriterEffect("*widzisz zolnierza siedzacego na skrzyni, wola cie*");
                typeWriterEffect("1. interakcja z zolnierzem");
                typeWriterEffect("2. zignoruj go");
                int choice;
                cin >> choice;
                if (choice == 1) {
                    typeWriterEffect("Halo, zolnierzu nie powinno cie tu byc, teraz to jest moja zmiana!");
                    typeWriterEffect("1. Przyslal mnie Herr Obersturmbannfuhrer po przepustke do Sektion Eins." );
                    typeWriterEffect("2. Klaus mnie przyslal po cos zeby sie dostac do Sektion eins, lepiej zebys to mial!" );
                    int choice;
                    cin >> choice;
                    if (choice == 1) {
                        typeWriterEffect("Ja gut! To ty jestes jager tak? Stephan mowil ze przyjdziesz po nia.\n Trzymaj!\n*Otrzymano przepustke Sektion Eins, nowa sciezka odblokowana*");
                        typeWriterEffect("*Przechodzisz do Sektion Eins*");

                    }
                    else if (choice == 2) {
                        typeWriterEffect("Kto? Herr Obersturmbannfuhrer Klaus? *Zaczyna celowac z karabinu*");
                        typeWriterEffect("*zauwaza slady walki na twoim mundurze*");
                        typeWriterEffect("Partyzanci!!! *strzela*");
                        player.health = 0;
                        return;
                        
                    }
                }
                else if (choice == 2) {
                    typeWriterEffect("Stop Soldaten! - krzyczy straznik magazynu Sekcji Zwei");
                    typeWriterEffect("*zatrzymales sie*");
                    typeWriterEffect("Cos sie stalo?");
                    typeWriterEffect("Tak! Znowu nie sluchasz polecen Jager.. - powiedzial straznik");
                    typeWriterEffect("Prosze mi wybaczyc, to juz sie nie powtorzy.");
                    typeWriterEffect("Ha! mam nadzieje. Swoja droga, gdzie teraz masz isc? slyszalem ze maja cie przeniesc.");
                    typeWriterEffect("Erm... Sektion Eins! Rozkazy od wyzszego szczebla... wiesz.");
                    typeWriterEffect("Oh ja! naturalnie, trzymaj tu przepustke i znikaj stad, zebys nie dostal ujemnych punktow do dokumentoww jak ostatnim razem!");
                    typeWriterEffect("* Otrzymano przepustke Sektion Eins, nowa sciezka odblokowana * ");
                    typeWriterEffect("Naturalnie!");
                    typeWriterEffect("*Przechodzisz do Sektion Eins*");
                }
            }
            else if (choice == 2) {
                typeWriterEffect("*Przechodzisz do Armory*");
                typeWriterEffect("*Slyszysz Panzerhunda i 2 straznikow z bronia biala*");
                typeWriterEffect("1. udawaj niemieckiego zolnierza");
                typeWriterEffect("2. spowodoj zwarcie i odwroc uwage zolnierzy");
                int choice;
                cin >> choice;
                if (choice == 1) {
                    typeWriterEffect("Halo! - Powiedzialem");
                    typeWriterEffect("Guten tag Soldaten! Co cie tu sprowadza? - odpowiedzieli");
                    typeWriterEffect("Wiecie gdzie moge znalesc innych wiezniow? Przenosza mnie do pilnowania wieznia Brada Smitha");
                    typeWriterEffect("Hm? *spojrzyli na siebie z zdziwieniem straznicy* Idz do Sektion Eins, tam idz do straznika bramy on ci da wiecej informacji.");
                    typeWriterEffect("Danke!");
                    typeWriterEffect("*Tyle karabinow, ladunkow wybuchowych, mozna by z nich zrobic dobry uzytek, no cos nic tu po mnie musze wyruszac do Sektion Eins*");

                    typeWriterEffect("*..idziesz przez korytarz*\n*otwierasz stalowe drzwi, okazuje sie ze jestes teraz w magazynie*\n*zauwazasz wielki napis Sektion Eins, sekcja biochemiczna tego budynku, cos ci mowi ze tam musisz sie udac*");
                    typeWriterEffect("*widzisz zolnierza siedzacego na skrzyni, wola cie*");
                    typeWriterEffect("1. interakcja z zolnierzem");
                    typeWriterEffect("2. zignoruj go");
                    int choice;
                    cin >> choice;
                    if (choice == 1) {
                        typeWriterEffect("Halo, zolnierzu nie powinno cie tu byc, teraz to jest moja zmiana!");
                        typeWriterEffect("1. Przyslal mnie Herr Obersturmbannfuhrer po przepustke do Sektion Eins.");
                        typeWriterEffect("2. Klaus mnie przyslal po cos zeby sie dostac do Sektion eins, lepiej zebys to mial!");
                        int choice;
                        cin >> choice;
                        if (choice == 1) {
                            typeWriterEffect("Ja gut! To ty jestes jager tak? Stephan mowil ze przyjdziesz po nia.\n Trzymaj!\n*Otrzymano przepustke Sektion Eins, nowa sciezka odblokowana*");
                            typeWriterEffect("*Przechodzisz do Sektion Eins*");

                        }
                        else if (choice == 2) {
                            typeWriterEffect("Kto? Herr Obersturmbannfuhrer Klaus? *Zaczyna celowac z karabinu*");
                            typeWriterEffect("*zauwaza slady walki na twoim mundurze*");
                            typeWriterEffect("Partyzanci!!! *strzela*");
                            player.health = 0;
                            return;

                        }
                    }
                    else if (choice == 2) {
                        typeWriterEffect("Stop Soldaten! - krzyczy straznik magazynu i Sekcji Zwei");
                        typeWriterEffect("*zatrzymales sie*");
                        typeWriterEffect("Cos sie stalo?");
                        typeWriterEffect("Tak! Znowu nie sluchasz polecen Jager.. - powiedzial straznik");
                        typeWriterEffect("Prosze mi wybaczyc, to juz sie nie powtorzy.");
                        typeWriterEffect("Ha! mam nadzieje. Swoja droga, gdzie teraz masz isc? slyszalem ze maja cie przeniesc.");
                        typeWriterEffect("Erm... Sektion Eins! Rozkazy od wyzszego szczebla... wiesz.");
                        typeWriterEffect("Oh ja! naturalnie, trzymaj tu przepustke i znikaj stad, zebys nie dostal ujemnych punktow do dokumentoww jak ostatnim razem!");
                        typeWriterEffect("* Otrzymano przepustke Sektion Eins, nowa sciezka odblokowana * ");
                        typeWriterEffect("Naturalnie!");
                        typeWriterEffect("*Przechodzisz do Sektion Eins*");
                    }
                }
                else if (choice == 2) {

                }
            }

        }
    }


}
  


    int main() {
        chooseDisplayMode();
        Player player = createCharacter();
        tankPrologue(player);

        if (player.health <= 0) {
            typeWriterEffect("K.I.A. porazka. Koniec gry!");
            return 0;
        }
        else {
            typeWriterEffect("Zyjesz! Misja zakonczona sukcesem!");
        }

        return 0;
    }