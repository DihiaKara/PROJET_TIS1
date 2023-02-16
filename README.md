**UNIVERSITE PARIS 8 VINCENNES SAINT DENIS**

**Master 1 Informatique Big DATA**

**Dihia KARA**

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

##  Framework : Laravel
Laravel est un framework d'application Web le plus sécurisé avec une syntaxe expressive et élégante. Laravel simplifie le développement en facilitant les tâches courantes utilisées dans de nombreux projets Web.

## Languages 
* php 
* html 

## Base de Données 
* MySQL -> phpMyAdmin 
* Accès admin -> admin/admin

## Technologies 
* Bootstrap

## Architecture 
* pattern MVC (model - view- controller)


## Mode d'emploi : Etapes 

1. Naviguer au niveau du dossier et lancer la commande `composer update`(vérifier l'installation de les modules php)
2. Lancer la commande " `php artisan key:generate`
3. Lancer la commande pour démarrer le serveur: `php artisan serve`.
4. Copier le fichier chat.sql dans votre serveur base de données
5. Aller dans le fichier .env
6. Mettre les informations de votre serveur de BDD et celles de bdd du projet : DB_CONNECTION jusqu'à DB_PASSWORD
7. Accéder via navigateur au localhost : `http://127.0.0.1:8000`

- Dans la table Users : les mots de passes sont chiffrés automatiquement par une fonction de hachage « Hash make » afin de sécuriser ce champ.
  

-> On retrouve bien les messages insérés par les utilisateurs dont le statut « student » qui ont été ajoutés à notre base de données.

- Interface : MiniChat dédié aux Etudiants auquel on accède par un formulaire d'identification
  - La page d’accueil contiendras deux boutons « Inscription » & « Connexion » pour avoir accès au Chat. A savoir qu’après une inscription une validation de la part d’un administrateur est requise.
   

   A.  En tant qu’Administrateur
- La validation se fait sur cette view : soit en sous admin, en student ou en null pour un extra.
  

   B. En tant qu’Etudiant :
- Une fois authentifié en tant que student l’accès est directement à cette page
  Le bouton « Envoyer un message » redirige vers le canal général du Chat. Une fois le message saisi et envoyé ! Celui-ci s’affiche instantanément sur le canal des messages et s’ajoute à la BDD.

