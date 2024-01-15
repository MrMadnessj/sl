<?php
    require_once '../pdo.php';
    require_once '../util.php';
    
    session_start();
    // echo $_SESSION['username']." --- ".$_SESSION['user_id'];
    
    unset($_SESSION['username']);
    unset($_SESSION['user_id']);

    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
        if( isset($_POST['cancel']) ){
            header('Location: ../home.php');
            return;
        }

        if( isset($_POST['email']) && isset($_POST['password']) ){
            if( strlen($_POST['email']) < 1 || strlen($_POST['password']) < 1 ){
                $_SESSION['error'] = "Email and password are required";
                header("Location: /projects/sl/pages/loginlogout/login.php");
                return;
            }
        }

        $user_check = $pdo->prepare("SELECT user_id, name FROM users WHERE email = :em");
        $user_check->execute(array(':em' => $_POST['email']));
        $u_id = $user_check->fetch(PDO::FETCH_ASSOC);

        $stmt = $pdo->prepare("SELECT user_id, name FROM users WHERE email = :em AND password = :pw");
        $stmt->execute(array(':em' => $_POST['email'], ':pw' => $_POST['password']));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        

        if( $row !== false ){
            $_SESSION['username'] = $row['name'];
            $_SESSION['user_id'] = $row['user_id'];
            header('Location: /projects/sl/app.php');
            return;
        }else{
            if($u_id){
                $_SESSION['error'] = "Wrong Password";
                header('Location: /projects/sl/pages/loginlogout/login.php');
                return;
            }
            $_SESSION['error'] = "Incorrect Username or Password";
            header('Location: /projects/sl/pages/loginlogout/login.php');
            return;
        }
    }
?>