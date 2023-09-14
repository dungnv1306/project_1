<?php
ob_start();
session_start();

require_once '../../Model/connect.php';
require_once '../../Model/bill.php';
require_once '../../Model/comment.php';
require_once '../../Model/lovelist.php';
require_once '../../Model/product.php';


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