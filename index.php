<?php
// header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');
// header('X-Frame-Options: DENY');
// header('X-Content-Type-Options: nosniff');
// header('Content-Security-Policy: worker-src https:');

if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];
} else {
    $filename = "";
}
include('templates/defaults/header.tpl.php');

switch ($filename) {
    case "home":
        include('index.tpl.php');
        break;
    case "about":
        include('templates/about.tpl.php');
        include('templates/defaults/footer.tpl.php');
        break;
    case "admin":
        include('templates/admin.tpl.php');
        include('templates/defaults/footer.tpl.php');
        break;
    case "library":
        include('templates/library.tpl.php');
        include('templates/defaults/footer.tpl.php');
        break;
    case "gallery":
        include('templates/gallery.tpl.php');
        include('templates/defaults/footer.tpl.php');
        break;
    case "wetlands":
        include('templates/wetlands.tpl.php');
        include('templates/defaults/footer.tpl.php');
        break;
    case "garden":
        include('templates/fruit tree garden.tpl.php');
        include('templates/defaults/footer.tpl.php');
        break;
    case "pond":
        include('templates/ornamentalpond.tpl.php');
        include('templates/defaults/footer.tpl.php');
        break;
    case "rainforest":
        include('templates/rainforest.tpl.php');
        include('templates/defaults/footer.tpl.php');
        break;
    default:
        include('index.tpl.php');
    break;
}


?>