<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/sidebar.css">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="scripts/dom.js"></script>
    <title>Document</title>
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
                <button>Sign Up</button>
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
</body>
</html>