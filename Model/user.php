<?php
include_once 'connect.php';
function user_insert($username,$user_password,$user_phone,$user_mail,$user_address,$user_role){
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];
    $user_phone = $_POST['user_phone'];
    $user_mail = $_POST['user_mail'];
    $user_address = $_POST['user_address'];
    $user_role = $_POST['user_role'];

    $conn= db_connect();
    $xmt = $conn->prepare("INSERT INTO tbl_users (username,user_password,user_phone,user_mail,user_address,user_role) VALUES ('$username','$user_password','$user_phone','$user_mail','$user_address','$user_role')");
    $xmt->execute();
    $conn = null;
}
function user_select1($username){
         $conn = db_connect();
         $username = $_POST['username'];
         $sql = "select * from tbl_users where username = ?";
         $smt = $conn->prepare($sql);
         $smt->execute([$username]);
         $us = $smt->fetch(PDO::FETCH_ASSOC);
         $conn = null;
         return $us;
}