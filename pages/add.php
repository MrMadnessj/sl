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
            $msg = validateBook();
            if( is_string($msg) ){
            $_SESSION["error"] = $msg;
            header('Location: ../app.php');
            return;
            }

            $stmt = $pdo->prepare('INSERT INTO books
            (user_id, title, author) VALUES (:uid, :tit, :aut)
            ');
            $stmt->execute(array(
                ':uid' => $_SESSION['user_id'],
                ':tit' => $_POST['bookname'],
                ':aut' => $_POST['bookauthor']
            ));

            $books = loadData($pdo, $_SESSION['user_id']);
            foreach($books as $book){
                echo "<pre> ".$book['title']  ." </pre";
                echo "\n";
            }
        }
?>