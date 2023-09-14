<?php 

include_once 'connect.php';

function bill_insert($bill_id,$bill_total,$bill_mount,$bill_name,$bill_address,	$bill_phone,$bill_email,$bill_payment,$bill_proname,$bill_proimg){
    $conn = db_connect();
    $bill_id = 'HD'.rand(0,999);
    $bill_total = $_POST['bill_total'];
    $bill_mount = $_POST['bill_mount'];
    $bill_name = $_POST['bill_name'];
    $bill_address = $_POST['bill_address'];
    $bill_phone = $_POST['bill_phone'];
    $bill_email = $_POST['bill_email'];
    $bill_proname = $_POST['bill_proname'];
    $bill_proimg = $_POST['bill_proimg'];
    $bill_payment = $_POST['bill_payment'];
    $smt = $conn->prepare("INSERT INTO tbl_bills (bill_id,bill_total,bill_mount,bill_name,bill_address,	bill_phone,bill_email,bill_payment,bill_proname,bill_proimg) values ('$bill_id','$bill_total','$bill_mount','$bill_name','$bill_address',	'$bill_phone','$bill_email','$bill_payment','$bill_proname','$bill_proimg')");
    $smt->execute();
    $conn=null;
}

function bill_select(){
    $conn = db_connect();
    $smt = $conn->prepare("SELECT * FROM tbl_bills");
    $smt->execute();
    $arr = $smt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function bill_select1($bill_id){
    $conn = db_connect();
    $smt = $conn->prepare("SELECT * FROM tbl_bills WHERE bill_id = ?");
    $smt->execute([$bill_id]);
    $arr = $smt->fetch(PDO::FETCH_ASSOC);
    return $arr;
}