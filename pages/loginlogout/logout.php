<?php
    session_start();
    session_destroy();
    header('Location: /projects/sl/pages/home.php');