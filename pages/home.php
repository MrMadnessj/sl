<?php
    require_once 'pdo.php';
    require_once 'util.php';
    session_start();

    $stmt = $pdo->query('SELECT * FROM users');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $lgsuContent = "<p>This is Home Page";
    $lgsuContent = isset($lgsuContent) ? $lgsuContent : 'Default content for lgsu';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../head.php'?>
    <script type="text/javascript" src="../scripts/index.js" defer></script>
    <title>Document</title>
</head>
<body>
    <?php require_once 'layout/header.php'; ?>
    <?php require_once 'layout/body.php'; ?>
    <?php
        flashMessage();
        if( isset($_SESSION['user_id']) ){
            echo ('<p><a href="/projects/sl/pages/loginlogout/login.php">Logout</a></p>'."\n");
        }else{
            echo ('<p><a href="/projects/sl/pages/loginlogout/login.php">Please Log in</a></p>'."\n");
        }
    ?>
</body>
</html>
