<html>
    <head>
        <title> User Login </title>
    </head>
    <body>
        <h1> Login </h1>
    <form action="log.php" method="POST">
    <?php
                if($_GET['message'] == true)
                {
                    echo $_GET['message'];
                }
            ?>
            <?php
                if($_GET['invalid'] == true)
                {
                    echo $_GET['invalid'];
                }
            ?>
            <div>
                <label for = "username">Username </b></label>
                <input type="text" class="textbox" name="txt_uname" placeholder="Username" style = "width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    box-sizing: border-box;"/>
            </div>
            <div>
                <label for = "password">Password </b></label>
                <input type="password" class="textbox" name="txt_pwd" placeholder="Password" style = "width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    box-sizing: border-box;"/>
            </div>
            <div>
                <button type="submit" name="submit" style = "background-color: #04AA6D;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    cursor: pointer;
                    width: 100%;">Login</button>
            </div>
        </div>
    </form>
    </body>
</html>