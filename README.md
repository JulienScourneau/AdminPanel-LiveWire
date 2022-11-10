# Livewire

Projet de démonstration de livewire, le back office est fait de composant livewire et blade pour démontrer la différence d'utilisation.

## Lancer le projet en local
1. Installer les dépendances.

```terminal
composer install
composer update
```
2. Crée le fichier .env et copier le contenue de .env.exemple dedans

```terminal
touch .env
```
3. Configurer la connexion à votre base de donnée dans le .env

```terminal
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=livewire
DB_USERNAME=root
DB_PASSWORD=
```
4. Utiliser la migration de laravel pour remplir la base de donnée.


```terminal
php artisan migrate
php artisan db:seed
```
ou
```terminal
php artisan migrate
php artisan db:seed
```

5. Lancer votre serveur

```terminal
php artisan serve
```

### Documentation
<a href="https://laravel.com" target="_blank">Laravel</a> <br>
<a href="https://livewire.com" target="_blank">livewire</a>


