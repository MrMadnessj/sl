<?php
    $addForm = '
    <div class="popup-form">
    <div class="form-header">
        <h2 class="form-title">Enter book</h2>
        <button data-close-button class="close-btn" onclick="closeAddForm();">&times;</button>
    </div>
    <div class="form-body" style="display: flex; flex-direction: column;">
        <form id="addForm" method="post" action="pages/add.php">
            <label for="bname">Name</label>
            <input type="text" id="bname" name="bookname">

            
            <label for="author">Author</label>
            <input type="text" id="author" name="bookauthor">
            
            <div class="pages">
                <div>
                    <label for="tpages">Total Pages</label>
                    <input type="number" id="tpages" name="totalpages">
                </div>

                <div>
                    <label for="cpages">Completed Pages</label>
                    <input type="number" id="cpages" name="pagesread">
                </div>
            </div>
            <p class="error"></p>
            <button id="addform-sub" type="submit">Add</button>
        </form>
    </div>
    </div>
    ';

    $loginForm = '<form action="login_process.php" method="post" onsubmit=" return doValidate();" >
    <label for="">
        Email: 
        <input type="text" name="email" id="email">
    </label>
    <label for="">
        Password: 
        <input type="text" name="password" id="password">
    </label>
    <input type="submit" value="Log In">
    <!-- <input type="submit" value="cancel" name="cancel"> -->
    </form>';
?>