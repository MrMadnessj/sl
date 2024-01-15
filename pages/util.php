<?php
    function flashMessage(){
        if( isset($_SESSION['error']) ){
            echo('<p style="color:red">'.htmlentities($_SESSION['error'])."</p>\n");
            unset($_SESSION['error']);
        }
    }

    //validate Book

    

