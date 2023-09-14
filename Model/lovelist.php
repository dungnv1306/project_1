<?php
require_once 'connect.php';
function lovelist_select(){
    $conn = db_connect();
    $sql = "select * from tbl_lovelists";
    $smt = $conn->prepare($sql);
    $smt->execute();
    $result = $smt->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;
    return $result;
}
function lovelist_insert($pro_name,$pro_img,$pro_price){
    $conn = db_connect();
    $pro_name = $_POST['pro_name'];
    $pro_img = $_POST['pro_img'];
    $pro_price = $_POST['pro_price'];
    $sql = "insert into tbl_lovelists (pro_name,pro_img,pro_price) values (?,?,?)";
    $smt  = $conn->prepare($sql);
    $smt->execute([$pro_name,$pro_img,$pro_price]);
}