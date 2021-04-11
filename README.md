# Projet 5 - OpenClassrooms - Blog
## _Parcours Développeur d'application - PHP / Symfony_

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/6d60a312bbcc45aab4ed61ef69019576)](https://www.codacy.com/gh/AxelVllR/Blog_P5_OC/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=AxelVllR/Blog_P5_OC&amp;utm_campaign=Badge_Grade)

### Descriptif du besoin
Voici la liste des pages qui devront être accessibles depuis votre site web :

    - la page d'accueil
    - la page listant l’ensemble des blogs posts
    - la page affichant un blog post
    - la page permettant d’ajouter un blog post
    - la page permettant de modifier un blog post
    - les pages permettant de modifier/supprimer un blog post

Vous développerez une partie administration qui devra être accessible uniquement aux utilisateurs inscrits et validés.

Sur la page d’accueil il faudra présenter les informations suivantes :

    - Votre nom et prénom
    - Une photo et/ou un logo
    - Une phrase d’accroche qui vous ressemble (exemple : “Martin Durand, le développeur qu’il vous faut !”) ;
    - Un menu permettant de naviguer parmi l’ensemble des pages de votre site web ;
    - Un formulaire de contact (à la soumission de ce formulaire, un email avec toutes ces informations vous serons envoyé)
    - Un lien vers votre CV au format pdf
    - Et l’ensemble des liens vers les réseaux sociaux où l’on peut vous suivre (Github, LinkedIn, Twitter…)

Sur la page listant tous les blogs posts (du plus récent au plus ancien), il faut afficher les informations suivantes pour chaque blog post :

    - Le titre
    - La date de dernière modification
    - Le châpo
    - Et un lien vers le blog post

Sur la page présentant le détail d’un blog post, il faut afficher les informations suivantes :

    - Le titre
    - Le chapô
    - Le contenu
    - L’auteur
    - La date de dernière mise à jour
    - Le formulaire permettant d’ajouter un commentaire (soumis pour validation)
    - Les listes des commentaires validés et publiés

## Installer le Projet

- Si vous ne disposez pas de mails catcher en local, installez 'MailDev', [cliquez-ici](https://nodejs.org/) pour en savoir plus 
- Clonez le Repo sur votre machine
- Rendez-vous dans l'invite de commande, puis dans le dossier du projet, lancez la commande
```sh
composer install
```
- Modifiez le fichier config.ini à la racine du projet
```
[database]
driver = mysql
host = localhost
;port = 3306
schema = blog
username = root
password =

[mails]
smtp_host = 0.0.0.0
smtp_port = 1025
```
- Encore une fois dans la racine du projet, vous disposez d'un fichier 'blog.sql', il vous suffit de créer une Base de données 'blog' sur votre phpmyadmin, puis d'importer ce fichier dans celle-ci
- après tout ces efforts, il ne vous restes plus qu'à lancer la commande suivante :
```
php -S localhost:8001 -t public/
```
- ENJOY !
 
## Identifiants ADMIN par défaut

MAIL :

> admin@admin.fr

Mot de passe :

> admin 

Si vous souhaitez un compte utilisateur également, vous n'avez qu'à le créer via la page d'inscription :)
