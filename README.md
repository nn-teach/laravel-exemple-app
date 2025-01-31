- [Installation](#org9082fcf)


<a id="org9082fcf"></a>

# Installation

-   Si vous souhaitez utiliser l'exemple du cours *(ou récupérer un projet existant déjà sur git, c'est à dire sans l'installer avec composer)*, voici la marche à suivre:
    -   on clone le repo
    -   on «créer» un `.env`
    -   on installe les dépendances du projet
    -   on genere une clé
    -   on lance l'application

```bash 
git clone https://github.com/nn-teach/laravel-example-app
cp .env.example .env
composer install
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```
