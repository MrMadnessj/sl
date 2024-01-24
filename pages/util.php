<?php
    function flashMessage(){
        if( isset($_SESSION['error']) ){
            echo('<p style="color:red">'.htmlentities($_SESSION['error'])."</p>\n");
            unset($_SESSION['error']);
        }
    }

    //validate Book
    function validateBook(){
        if( strlen($_POST['bookname']) == 0 || strlen($_POST['bookauthor']) == 0 ||
        strlen($_POST['totalpages']) == 0 || strlen($_POST['pagesread']) == 0){
            return "All fields are required";
        }

        if($_POST['totalpages'] < $_POST['pagesread']){
            return "Pages read can't be greater than total pages."; 

        }
        return true;
    }

    function loadData($pdo, $userid){
        $stmt = $pdo->prepare('SELECT * FROM books WHERE user_id = :uid ORDER BY title ASC');
        $stmt->execute(array(
            ':uid' => $userid
        ));
        $books = array();
        while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ){
            $books[] = $row;
        }
        return $books;
    }   

    

