<?php
    session_start();
    // unset($_SESSION['username']);
    // unset($_SESSION['user_id']);\
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    
    if( !isset($_SESSION['username']) || !isset($_SESSION['user_id'])){
        header('Location: /projects/sl/pages/loginlogout/login.php');
        // echo $_SESSION['username']." --- ".$_SESSION['user_id'];
        return;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'head.php'; 
        require('pages/layout/book.php');
        require('pages/layout/forms.php');
    ?>
    <title>ScribeLog</title>
</head>
<body>
    <header class="header">
        <h1>ScribeLog</h1>
        <!-- <a href="#side-panel" class="btn btn-primary" data-bs-toggle="offcanvas">click me</a> -->
        <a onclick="showSidebar()"><svg class="svgs" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a>
    </header>
    <div>
        <!-- <div class="offcanvas offcanvas-start" id="side-panel"> class = "side-panel" -->
        <div class="sidebar" id="sidebar">
            <div class="stat">
                <div class="stat-bar">
                    <h1 class="stat-head">STATS</h1>
                    <a onclick="hideSidebar()"><svg class="svgs black" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a>
                </div>
                <div class="stat-content">
                    <ul class="stats">
                        <li>
                            <p>Books Added</p>
                            <p>5</p>
                        </li>
                        <li>
                            <p>Books Completed</p>
                            <p>5</p>
                        </li>
                        <li>
                            <p>Total Pages Read</p>
                            <p>5</p>
                        </li>
                        <li>
                            <p>Arbitrary Added</p>
                            <p>5</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="signup-data">
                <h2>Signup</h2>
                <h2>Data</h2>
                <a href="/projects/sl/pages/loginlogout/logout.php"><button>Log Out</button></a>
                <button>Data</button>
            </div>
            <div class="quotes">
                <div class="quote">
                    <p>"Think before you speak. Read before you think."</p>
                </div>
                <div class="qaut">
                    <p>----</p>
                </div>
                <div class="credits">
                    <p>-mmj-</p>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <button class='add-btn' onclick='openAddForm()'>+</button>
        <?php echo $book?>
    </div>
    <?php echo $addForm?>
    <div class="overlay"></div>
    <script>
        var form = $('.popup-form');
        var overlay = $('.overlay');
        function openAddForm(){
            console.log('im inside open Add form');
            form.addClass('active');
            overlay.addClass('active');
        }

        function closeAddForm(){
            form.removeClass('active');
            overlay.removeClass('active');
        }    
    </script>
</body>
http://localhost/projects/sl/app.php
</html>