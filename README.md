- Site vitrine Washafo 

    Objectif du projet 
    + Présenter les services proposés
    + Permettre aux utilisateurs de réserver un rendez-vous en ligne
    + Offrir un formulaire de contact pour toute demande ou question

    Technos utilisées
    - HTML/CSS (Bootstrap 5 CDN), PHP natif, JS, AdminLTE CDN, MySQL


    Structure des fichiers

    - index.php = centralisation des fichier
    - home.php = page d'accueil
    - db.php = connexion à la base de donnée
    - footer.php = pied de page
    - header.php = tete de page
    - function.php = centralisation de logique metier php( token, envoi d'email etc..)
    - register.php = geré l'inscription
    - login.php = gerer la partie connexion
    - logout.php = gerer la deconnexion
    - prestation.php = presentation des service pour le client les tarif
    - dashbord.php = gerer la partie admin si le patron souhaite consulté (optionnel).
    - mention.php = mise en place de mention légal



    - script.js = JS global léger (animations, interactions, popup)
    - calendar.js = permet de mettre en place un calendrier pour les rdv 


    - gitignore = va permettre de cacher mes variable d'environement qui concernent le .env
    - .env = va permettre de placer ma varaible d'environement
    - .htaccess = va permettre de configurer mon o2switch de mon app pendant la recette automatiquement et non manuel.




    --------------PréProduction---------------

    - [x] Préparé le projet sur github
    - [x] Maquette Desktop



    -------------DeveloppementFrontend--------------

    - [x] Mise en place des point d'entrer dynamique de fichier via index.php
    - [] Mise en place page d'accueil (presentation, photo du patron )
    - [] Prestation de service tarifaire
    - [x] Formulaire de connexion
    - [x] Formulaire de mots de passe oublié
    - [x] Formulaire d'inscription
    - [] Mise en place calendrier de rdv
    - [] Mise en place de systeme de rdv
    - [] Affichage des créneaux disponibles dynamiquement
    - [x] Formulaire de contact
    - [] faire un interface admin 



    ---------developpementBackend-------------------

    - [] Création de la base de donnée
    - [] Mise en place d'authentification de connexion
    - [] Mise en place d'authentification de deconnexion
    - [] Mise en place d'authentification d'inscription
    - [] Mise en place d'envoi d'email lors d'un formulaire de contact
    - [] Mise en place d'envoi d'email lors de la prise de rdv
    - [] Gestion de prise de crenaux pour que l'utilisateur  puisse voir a l'avance les crenaux disponible
    - [] Implémenter la gestion synchronisée des créneaux (admin ↔ utilisateur)


    ----------------------test----------------------------

    - [] Verification si l'envoi d'email depuis un formulaire fonctionne
    - [] Verification si l'envoi d'email depuis une prise de rdv fonctionne
    - [] Verification si le calendrier fonctionne
    - [] Verification si le systeme de prise de rdv fonctionne 
    - [] Verification si le certificat SSL fonctionne 
    - [] Verification si les redirections fonctionne 
    - [] Vérification si la reception d'email fonctionne
    - [] Verification si le formulaire de connexion fonctionne 
    - [] Verification si le formulaire de inscription fonctionne 
    - [] Verification si le formulaire de deconnexion fonctionne 


    ------- Déploiement-------------------------------------

    - [] Utilisation o2Switch que sa soit manuelle ou avec .htaccess pour le faire automatiquement