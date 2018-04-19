<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case '/home':
        require '../views/home.php';
        break;

    case '/login':
    require '../views/login.php';
    break;

    case '/reservation':
        require '../views/FormulaireReservation.php';
        break;

    case '/singlerooms':
        require '../views/Singlerooms.php';
        break;
    case '/checkin':
        require '../views/CheckInForm.php';
        break;

    default:
        header('HTTP/1.0 404 Not Found');
        require '../views/404.php';
        break;
}