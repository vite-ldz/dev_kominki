kominki
=======

A custom theme based on \_tw

## Installation

1. Move this folder to `wp-content/themes` in your local development environment
2. Run `npm install && npm run dev` in this folder
3. Activate this theme in WordPress

Looking for live reloading? Learn how to [add Browsersync to your project](https://underscoretw.com/docs/getting-started/#h-using-browsersync).

## Development

4. Run `npm run watch`
5. Add [Tailwind utility classes](https://tailwindcss.com/docs/utility-first) with abandon

See the complete [development documentation](https://underscoretw.com/docs/tailwind-plugins-npm-commands/) for more details.

## Deployment

6. Run `npm run bundle`
7. Upload the resulting zip file to your site using the “Upload Theme” button on the “Add Themes” administration page

Or [deploy with the tool of your choice](https://underscoretw.com/docs/deployment/#h-other-deployment-options)!


## GIT

echo "# dev_kominki" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/vite-ldz/dev_kominki.git
git push -u origin main


## Server

dodać: "server": "browser-sync start --proxy \"dev_novesto.test\" --files \"theme\" --no-notify --no-inject-changes"

npm run server

## UPDATE

npm install -g npm-check-updates

ncu -u

npm install

## WP CONFIG

wstawiamy pod linią ' $table_prefix = 'db_'; ':


define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );
define('WP_POST_REVISIONS', 5);


## GUTENBERG BLOCKS

text
media
design
widgets
theme
embed

## LH TEST


Baza:
user: serwer162188_fronty
db: serwer162188_fronty
psswd: 1NNcLgi_

## SSH


ssh serwer162188@serwer162188.lh.pl -p 40022

cd /public_html/taxteam.pinkpin.pl

* Przydatne komendy SSH przy obsłudze katalogów:

    pwd – pokaż bieżący katalog i wykonaj polecenia w nim,
    ls – pokaż zawartość katalogu i wykonaj polecenia na nich,
    cd – zmień katalog (wskaż nowy),
    mkdir – utwórz nowy katalog (wskaż nazwę katalogu),
    rmdir – usuń katalog (usuń wskazany katalog).

    wyświetlenie plików i katalogów
        ls
        ls -a
        ls -l
        ls -la --sort=time

    usuwanie plików/katalogów
        rm nazwa_pliku lub rm *
        rm -r katalog lub rm -r *


* Przydatne komendy SSH przy obsłudze plików i katalogów:

    cp – kopiuj plik lub folder,
    mv – przenieś plik lub folder,
    zip – kompresuj plik lub folder,
    unzip – rozpakuj folder,
    tar – tworzenie i rozpakowywanie archiwów skompresowanych.

    rozpakowanie katalogu
        unzip nazwa_pliku.zip

    tworzenie archwium
        zip -r nazwa_archiwum.zip *


* Przydatne polecenia przy obsłudze plików:

    touch – utwórz nowy plik,
    cat – pokaż zawartość pliku,
    grep – wyszukaj określoną frazę,
    head – przeczytaj pierwsze 10 wierszy pliku,
    tail – przeczytaj ostatnie 10 wierszy pliku,
    find – wyszukiwanie plików i katalogów,
    du – pobierz rozmiar pliku,
    chmod – zmień uprawnienia pliku,
    wget – pobierz pliki.


* Przydatne polecenia przy obsłudze okna terminala:

    clear – wyczyść ekran,
    reset – usuń wyjście z terminala,
    history – pokaż 50 ostatnio używanych poleceń,
    screen – wznów sesje SSH,
    exit – wyjście z serwera zdalnego