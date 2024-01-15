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
    }

    

