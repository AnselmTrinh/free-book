# SETUP PROJET 

1 - dbeaver download https://dbeaver.io/download/
2 - Composer Download https://getcomposer.org/download/
3 - changer dans le fichier .env "DB_DATABASE" => *nomduprojet*


ressource = dossier ou tt se passe

## Clone du repo et start du projet

1 - `git clone https://github.com/AnselmTrinh/free-book.git`

2 - `composer install`

3 - `cp .env.example .env` (mettre la connection a la DB dans le .env)

4 - `npm install`

5 - `php artisan migrate`

6 - `npm run dev`

7 - `php artisan serve`



## Télécharger React : 

`composer require laravel/ui`