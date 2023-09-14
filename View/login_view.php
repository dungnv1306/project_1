<?php
if(isset($_SESSION['user'])){
    require 'login_format.php';
}
else{
    echo ' <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My
    Account</button>
<div class="dropdown-menu dropdown-menu-right">
    <a href="index.php?act=login" class="dropdown-item" type="button">Sign in</a>
    <a href="index.php?act=register" class="dropdown-item" type="button">Sign up</a>
</div>';};