<?php 
    require_once '../pdo.php';
    require_once '../util.php';
    require_once '../layout/forms.php';
    
    session_start();
    // echo $_SESSION['username']." --- ".$_SESSION['user_id'];
    
    unset($_SESSION['username']);
    unset($_SESSION['user_id']);
    
    $lgsuContent = isset($lgsuContent) ? $lgsuContent : 'Default content for lgsu';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../../head.php';?>
    <script src="../../scripts/index.js"></script>
    <title>Document</title>
</head>
<body>
    <?php require_once '../layout/header.php'; ?>
    <?php require_once '../layout/body.php'; ?>
    <?php flashMessage() ?>
    <!-- <form action="login_process.php" method="post" onsubmit=" return doValidate();" >
        <label for="">
            Email: 
            <input type="text" name="email" id="email">
        </label>
        <label for="">
            Password: 
            <input type="text" name="password" id="password">
        </label>
        <input type="submit" value="Log In">
        <input type="submit" value="cancel" name="cancel">
    </form> -->
    
    <p class="error"></p>
    <a href="home.php"></a>
</body>
</html>