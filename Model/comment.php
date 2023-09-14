<?php
require_once 'connect.php';

function cmtSelectOne(){
    $conn = db_connect();
    $pro_id = $_GET['pro_id'];
    $stmt = $conn->prepare("SELECT * FROM TBL_COMMENTS WHERE CMT_PRO = $pro_id");
    $stmt->execute();
    $arrCmt = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $arrCmt;
}