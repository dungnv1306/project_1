<?php
ob_start();
session_start();
require_once '../Model/connect.php';
require_once '../Model/product.php';
require_once '../Model/comment.php';
require_once '../Model/bill.php';
require_once '../Model/user.php';
require_once '../Model/lovelist.php';
db_connect();


include '../View/header.php';


if (isset($_GET['act']) && $_GET['act']) {

    switch ($_GET['act']) {
        case 'cart':
            if (isset($_POST['uptocart']) && $_POST['uptocart']) {
                $pro_sl = $_POST['pro_sl'];
                $pro_name = $_POST['pro_name'];

                if (isset($_SESSION['giohang']) & count($_SESSION['giohang']) > 0) {
                    $i = 0;
                    foreach ($_SESSION['giohang'] as $item) {
                        if ($item[0] == $pro_name) {
                            $_SESSION['giohang'][$i][3] = $pro_sl;
                            break;
                        }
                        $i++;
                    }
                }
                echo "
                    <script>
                    alert('Done!');
                    window.location.href='http://localhost/mvc1/controller/index.php?act=cart';
                    </script>
                    ";
            }

            include '../View/cart.php';
            break;
        case 'delcart':
            if (isset($_GET['i']) && $_GET['i'] >= 0) {
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0)
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
            }
            echo "
            <script>
            alert('Done!');
            window.location.href='http://localhost/mvc1/controller/index.php?act=cart';
            </script>
            ";
            break;
        case 'addcart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $pro_name = $_POST['pro_name'];
                $pro_img = $_POST['pro_img'];
                $pro_price = $_POST['pro_price'];
                if (isset($_POST['pro_sl']) && $_POST['pro_sl']) {
                    $pro_sl = $_POST['pro_sl'];
                } else {
                    $pro_sl = 1;
                }
                if (isset($_POST['pro_size']) && $_POST['pro_size']) {
                    $pro_size = $_POST['pro_size'];
                } else {
                    $pro_size = 'Oversizes';
                }
                if (isset($_POST['pro_color']) && $_POST['pro_color']) {
                    $pro_color = $_POST['pro_color'];
                } else {
                    $pro_color = 'Random color';
                }
                $f = 0;
                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[0] === $pro_name) {
                        $new_sl = $item[3] + $pro_sl;
                        $_SESSION['giohang'][$i][3] = $new_sl;
                        $f = 1;
                        break;
                    }
                    $i++;
                }
                if ($f == 0) {
                    $item = array($pro_name, $pro_img, $pro_price, $pro_sl, $pro_size, $pro_color);
                    $_SESSION['giohang'][] = $item;
                }
                echo "
            <script>
            alert('Done!');
            window.location.href='http://localhost/mvc1/controller/index.php?act=cart';
            </script>
            ";
            }
            break;
        case 'tolovelist':
            if (isset($_POST['likelist']) && $_POST['likelist']) {
                $pro_name = $_POST['pro_name'];
                $pro_img = $_POST['pro_img'];
                $pro_price = $_POST['pro_price'];
                lovelist_insert($pro_name, $pro_img, $pro_price);
                echo "
                <script>
                alert('Done!');
                window.location.href='http://localhost/mvc1/controller/index.php?act=lovelist';
                </script>
                ";
            }
            break;
        case 'checkout':
            if (isset($_POST['buy']) && $_POST['buy']) {
                $bill_id = 'HD' . rand(0, 999);
                $bill_total = $_POST['bill_total'];
                $bill_mount = $_POST['bill_mount'];
                $bill_name = $_POST['bill_name'];
                $bill_address = $_POST['bill_address'];
                $bill_phone = $_POST['bill_phone'];
                $bill_email = $_POST['bill_email'];
                $bill_proname = $_POST['bill_proname'];
                $bill_proimg = $_POST['bill_proimg'];
                $bill_payment = $_POST['bill_payment'];
                bill_insert($bill_id, $bill_total, $bill_mount, $bill_name, $bill_address, $bill_phone, $bill_email, $bill_payment, $bill_proname, $bill_proimg);
                unset($_SESSION['giohang']);
                echo "
            <script>
            alert('Done!');
            window.location.href='http://localhost/mvc1/controller/index.php?act=bill_detail&bill_id=$bill_id';
            </script>
            ";
            }
            include '../View/checkout.php';
            break;
        case 'register':
            if (isset($_POST['register']) && $_POST['register']) {
                $username = $_POST['username'];
                $user_pasword = $_POST['user_password'];
                $user_phone = $_POST['user_phone'];
                $user_email = $_POST['user_email'];
                $user_address = $_POST['user_address'];
                $user_role = $_POST['user_role'];
                user_insert($username, $user_pasword, $user_phone, $user_email, $user_address, $user_role);
                echo "
                <script>
                alert('Done!');
                window.location.href='http://localhost/mvc1/controller/index.php?act=user';
                </script>
                ";
            }
            include '../View/register.php';
            break;
        case 'login':
            if (isset($_POST['login']) && $_POST['login']) {
                $username = $_POST['username'];
                $user_password = $_POST['user_password'];
                $user_role = $_POST['user_role'];
                $user = user_select1($username);
                //echo var_dump($user);
                // echo $user['user_role'];
                if ($user['user_password'] == $user_password) {
                    if ($user['user_role'] == 1) {
                        $_SESSION['username'][] = $user;
                        //echo var_dump($_SESSION['username']);
                        // session_unset();
                        //  $_SESSION['admin2'] = $user['user_password'];
                        header('location: ../Admin/controller/index.php?act=home');
                        //   echo "
                        //   <script>
                        //   alert('Done!');
                        //   window.location.href='http://localhost/mvc1/Admin/controller/index.php?act=home'';
                        //   </script>
                        //   ";
                    } else {

                        $_SESSION['username'][] = $user;

                        header('location: ../User/controller/index.php?act=home');
                    }
                } else {
                    echo "
                  <script>
                  alert('Wrong password! Retry! ');
                  window.location.href='http://localhost/mvc1/controller/index.php?act=login'';
                   </script>
                  ";
                }
            }
            include '../View/login.php';
            break;
        case 'contact':
            include '../View/contact.php';
            break;
        case 'bill':
            include '../View/bill.php';

            break;
        case 'bill_detail':
            $bill_id = $_GET['bill_id'];
            $a = bill_select1($bill_id);
            include '../View/bill_detail.php';

            break;
        case 'product':
            $a = selectProductAll();
            include '../View/product.php';
            break;
        case 'lovelist';
            $a = lovelist_select();
            include '../View/lovelist.php';
        case 'productdetail':
            $b = selectProduct1();
            $cm = cmtSelectOne();
            include '../View/productdetail.php';
            break;
        default:
            include '../View/home.php';
            break;
    }



}
include '../View/footer.php';