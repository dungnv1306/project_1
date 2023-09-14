<?php
session_start();
include_once '../Model/connect.php';
include_once '../Model/user.php';
if (!isset($_SESSION['user'])){
    $_SESSION['user'] = [];
}
if(isset($_POST['login']) && $_POST['login']){
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];
    $user_role = $_POST['user_role'];
    $user = user_select1($username);
  
if($user){
    if($user['user_password'] == $user_password){
        $_SESSION['user'] = $user;
        if($_SESSION['user']['user_role']==0){
            echo "
            <script>
            alert('Done! User logined');
            window.location.href='http://localhost/mvc1/user/controller/index.php?act=home';
            </script>
            ";
        }
        elseif($_SESSION['user']['user_role']==1){
            echo "
            <script>
            alert('Done! Admin Logined');
            window.location.href='http://localhost/mvc1/admin/controller/index.php?act=home';
            </script>
            ";
        }
        // echo "
        //     <script>
        //     alert('Done!');
        //     window.location.href='http://localhost/mvc1/user/controller/index.php?act=home';
        //     </script>";
    }
    elseif($_SESSION['user']['user_password'] != $user_password){
        echo "
        <script>
        alert('Wrong password!');
        window.location.href='http://localhost/mvc1/controller/index.php?act=login';
        </script>
        ";
    }
    
} else{
    session_unset();
    echo "
    <script>
    alert('Logout!');
    window.location.href='http://localhost/mvc1/controller/index.php?act=home';
    </script>
    ";
}

}