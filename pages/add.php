<?php
    require_once 'pdo.php';
    require_once 'util.php';

    session_start();

    if( !isset($_SESSION['user_id']) ){
        header('Location: loginlogout/login.php');
        return;
    }

    if( isset($_POST['bookname']) && isset($_POST['bookauthor']) &&
        isset($_POST['totalpages']) && isset($_POST['pagesread'])){
            
        }
?>