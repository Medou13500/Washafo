<?php
// Démarrage de la session
session_start();

// Inclusions nécessaires
require_once 'includes/function.php';
require_once 'includes/db.php';

// Liste des pages autorisées
$allowedPages = ['home', 'contact', 'login', 'register', 'prestation', 'rdv', 'logout', 'mdpOublie'];

// Vérifie si une page est passée dans l'URL et qu'elle est autorisée
$page = isset($_GET['page']) && in_array($_GET['page'], $allowedPages) ? $_GET['page'] : 'home';

// Inclusion du header
include 'includes/header.php';

// Inclusion dynamique du contenu de la page
switch ($page) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'prestation':
        include 'pages/prestation.php';
        break;
    case 'contact':
        include 'pages/contact.php';
        break;
    case 'login':
        include 'pages/login.php';
        break;
    case 'register':
        include 'pages/register.php';
        break;
    case 'rdv':
        include 'pages/rdv.php';
        break;
    case 'logout':
        include 'pages/logout.php';
        break;
    case 'mdpOublie':
        include 'pages/mdpOublie.php';
        break;
    default:
        echo "<p>Page introuvable.</p>";
        break;
}

// Inclusion du footer
include 'includes/footer.php';
?>
