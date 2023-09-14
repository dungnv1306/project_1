<?php
require_once 'connect.php';

function selectProductAll(){
    $conn = db_connect();
    $smt = $conn->prepare('SELECT * FROM tbl_products');
    $smt->execute();
    $arrProduct = $smt->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;
    return $arrProduct;
}
function selectProduct1(){
    $conn = db_connect();
    $pro_id = $_GET['pro_id'];
    $smt = $conn->prepare("SELECT * FROM tbl_products WHERE pro_id = $pro_id ");
    $smt->execute();
    $arrProduct = $smt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $arrProduct;
}