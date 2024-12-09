#include <iostream>
#include <string>
#include <vector>
#include <cstdlib>
#include <thread> // Dla sleep_for
#include <chrono> // Dla chrono::seconds

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
bool fastMode = false;

void typeWriterEffect(const std::string& text, int delayMs = 50) {
    for (char c : text) {
        std::cout << c;
        if (!fastMode) { // Skrócenie opóźnienia, jeśli włączono szybki tryb
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
};

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
        typeWriterEffect("\n=== Rozdzial 1: " + player.unit + " ===");
        typeWriterEffect("Rok 1945. Po latach brutalnych zmagan na frontach Europy, II wojna swiatowa miala zakonczyc sie w inny sposob. Alianci, wspierani przez komunistyczne sil ZSRR, przeprowadzili ostatnia, desperacka ofensywe na Berlin w grudniu 1945 roku. Operacja byla pelna nadziei, ale rowniez zmeczenia. Zimowa ofensywa miala zakonczyc rzady III Rzeszy, a niemieckie panowanie mialo stac sie wspomnieniem. Jednak niespodziewane wydarzenie zmienilo wszystko.\n");
        typeWriterEffect("Niemcy, z pomoca swoich nowoczesnych technologii i tajnych broni, zatrzymali atak. Ale to nie wystarczylo. W odpowiedzi na zblizajacy sie upadek, III Rzesza zdecydowala sie na ostateczny krok. W wyniku desperackich dzialan, 10 grudnia 1945 roku, zrzucono bombe atomowa na Londyn, a kilka godzin pozniej na Nowy Jork, zmieniajac uklad sil na calym swiecie. Alianci, w obliczu tak ogromnej katastrofy, poddali sie, a cala zachodnia cywilizacja upada. Ziemie opanowywane przez Niemcow weszly w nowa, brutalna ere.\n");
        typeWriterEffect("Nazywam sie " + player.name + ". Jestem, a wlasciwie byly " + player.unit + ". Ledwo co pamietam z naszej ostatniej akcji w Torgau, jedynie iskry, mroz i Brada, ktorego tutaj nie ma...\n");
        typeWriterEffect("Minelo moze 12 godzin? Moze nawet i 14. Sam nie wiem, jestem zdezorientowany. Znalazlem sie w jakims wiezieniu? Nie jestem tu sam, jest tu duzo innych ludzi, od Niemcow, po Francuzow, a nawet i Polakow\n");
        typeWriterEffect("Ochroniarze nosza cos podobnego do pancerzy, posiadaja maski z jednolitej plyty pancerza na twarz z otworami na czarne wizjery. Dwie rury spod tej plyty ida do jego plecaka lub jakiegos urzadzenia, ktore nosi tu prawie kazdy szkop.\n");
        typeWriterEffect("Leze na tym niewygodnym lozku z podbitym okiem, myslac jak stąd uciec, az nagle uslyszalem alert, ktory byl transmitowany przez radia niemieckie i naglosnienie w tym obiekcie\n");
        typeWriterEffect("Wielka chwila nadeszla. Nowy Jork, serce Ameryki, zostalo zniszczone. Nasza potege, nasza bron, zadecydowaly o losach wojny. Rzesza wykonała pierwszy, decydujacy krok ku ostatecznemu zwyciestwu.\nBomba atomowa spadla na wroga, a sily amerykanskie zostaly calkowicie zniszczone. W obliczu tej poteznej sily, nie ma juz watpliwosci – wojna zostala wygrana! Swiat, teraz pod nasza kontrola,\n bedzie zyl zgodnie z nasza wola. To my, Narod Niemiecki, ksztaltujemy przyszlosc tej planety. Zwyciestwo jest nasze!\n");
        typeWriterEffect("Ale to nie koniec. \nZ ostatnich resztek alianckich sil na zachodzie nie zostanie nic. Nasze plany przewiduja calkowite wyeliminowanie wszelkiego oporu – zarówno na ziemiach europejskich, jak i w pozostalych zakatkach swiata.\nJuz wkrotce kazda forma buntu czy sprzeciwu wobec nowego porzadku zostanie bezwzglednie stlumiona.\n");

        typeWriterEffect("Swjat, teraz pod nasza kontrola, bedzie zyl zgodnie z nasza wola.\nTo my, Narod Niemiecki, ksztaltujemy przyszlosc tej planety. Zwyciestwo jest nasze, a kazda ostatnia nadzieja na opor zostanie zmiazdzona.");
        typeWriterEffect("O nie.. to nie moze byc prawda. Musze sie stąd jak najszybciej uciec, ale musze znalezc Brada.");
        typeWriterEffect("1. Zawolaj straznika, blefuj, zacznij walke gdy wejdzie do celi");
        typeWriterEffect("2. Zatkaj zlew i zalej cele woda");

        cin >> choice;
        if (choice == 1) {
            typeWriterEffect("AY! Szczury sa pod lozkiem!");
            typeWriterEffect("Was? Pokaz gdzie, zachowaj dystans, wiezniu.");
            typeWriterEffect("*Straznik uklęknął i patrzy pod lozkiem, odkładając karabin na ziemię obok niego*\n");
            typeWriterEffect("1. Weź karabin i zagroź straznikowi");
            typeWriterEffect("2. Skocz na straznika i sproboj go przewrocic i udusic");

            cin >> choice;  // Decyzja pierwsza: co robic ze straznikiem?

            if (choice == 1) {
                typeWriterEffect("*Odglos przeladowania* Nie ruszaj sie! - krzyknąłem");
                typeWriterEffect("Oh man! Stop! Nie strzelaj!");
                typeWriterEffect("Brad Smith!");
                typeWriterEffect("Gdzie?");
                typeWriterEffect("Brad Smith gdzie on jest!?");
                typeWriterEffect("*Dowiadujesz sie gdzie jest Brad, obezwladniasz zakladnika oraz bierzesz jego uniform*");
                typeWriterEffect("*Ciche wejscie oraz nowa sciezka odblokowana!*");
                player.health = 100;
            }
            else if (choice == 2) {
                typeWriterEffect("*Zaczyna się walka!*");
                typeWriterEffect("Wybierz akcje, ktora chcesz wykonać:");
                typeWriterEffect("1. Lekki atak");
                typeWriterEffect("2. Mocny atak");
                typeWriterEffect("3. Obrona");

                cin >> choice;  // Decyzja druga: jak atakowac straznika?

                if (choice == 1) {
                    typeWriterEffect("Zadano 40 obrazen!");
                    typeWriterEffect("Straznik cie uderza!");
                    player.health = 30;
                    typeWriterEffect("1. Uciekaj z celi");
                    typeWriterEffect("2. Zaatakuj ponownie");

                    cin >> choice;  // Decyzja trzecia: co dalej po ataku?

                    if (choice == 1) {
                        typeWriterEffect("Straznik cie postrzelił");
                        player.health = 0;
                        return;
                    }
                    else if (choice == 2) {
                        typeWriterEffect("Zadano 40DMG! *Straznik zemdlał* *Podniesiono apteczkę z ekwipunku straznika +50HP*");
                        player.health = 80;
                    }
                }
                else if (choice == 2) {
                    typeWriterEffect("Przyjąłeś cios na brzuch! (-20HP) *Zadano 80DMG straznikowi!* *Straznik zemdlał*");
                    typeWriterEffect("Bierzesz jego ubrania i uciekasz z celi");
                    player.health = 80;
                }
                else {
                    typeWriterEffect("Straznik cie postrzelił!");
                    player.health = 0;
                    return;
                }
            }
        }
        else if (choice == 2) {
            typeWriterEffect("*Zaczyna się walka!*");
            typeWriterEffect("Wybierz akcje, ktora chcesz wykonać:");
            typeWriterEffect("1. Lekki atak");
            typeWriterEffect("2. Mocny atak");
            typeWriterEffect("3. Obrona");

            cin >> choice;  // Decyzja druga: jak atakowac straznika?

            if (choice == 1) {
                typeWriterEffect("Zadano 40DMG!");
                typeWriterEffect("Straznik cie uderza! (-70HP)");
                player.health = 30;
                typeWriterEffect("1. Uciekaj z celi");
                typeWriterEffect("2. Zaatakuj ponownie");

                cin >> choice;  // Decyzja trzecia: co dalej po ataku?

                if (choice == 1) {
                    typeWriterEffect("Straznik cie postrzelił");
                    player.health = 0;
                    return;
                }
                else if (choice == 2) {
                    typeWriterEffect("Zadano 40DMG! *Straznik zemdlał* *Podniesiono apteczkę z ekwipunku straznika +50HP*");
                    player.health = 80;
                }
            }
            else if (choice == 2) {
                typeWriterEffect("Przyjąłeś cios na brzuch! (-20HP) *Zadano 80DMG straznikowi!* *Straznik zemdlał*");
                typeWriterEffect("Bierzesz jego uniform i uciekasz z celi");
                player.health = 80;
            }
            else {
                typeWriterEffect("Straznik cie postrzelił!");
                player.health = 0;
                return;
            }
        }

        if (player.health == 100) {
            cout << "Zajmujesz sie swoja misja!";
        }
        else if (player.health == 80) {
            cout << "Udalo ci sie przezyc, ale zraniony!";
        }
    }
}
int main() {
    chooseDisplayMode(); // Dodano wybór trybu przed rozpoczęciem gry
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