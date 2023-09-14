<?php
ob_start();
session_start();

include '../view/header.php';

if (isset($_GET['act']) && $_GET['act']) {

    switch ($_GET['act']) {
        case 'home':
            include '../view/home.php';
            break;
        case 'logout':
            unset(  $_SESSION['username']);
           
            header('location: http://localhost/mvc1/controller/index.php?act=home');
    }
}
include '../view/footer.php';