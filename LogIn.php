<?php

include("header.php");





$conn =  mysqli_connect('localhost', 'root', '', 'Club_Guide');

if (!$conn) {
    echo "Connection error";
}



?>
<html>

<head>
    <title>PHP login system</title>
    <!-- // insert style.css file inside index.html   -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background: #eee;
        }

        #frm {
            border: solid gray 1px;
            width: 25%;
            border-radius: 2px;
            margin: 120px auto;
            background: white;
            padding: 50px;
        }

        #btn {
            color: #fff;
            background: #337ab7;
            padding: 7px;
            margin-left: 70%;
        }

        #new-button {
            box-sizing: border-box;
            position: relative;
            top: 30;
            right: -70;
            width: 90;
            height: 40;
            background-color: #82c5c8;
            transform: translate(1%, 1%);
            overflow: hidden;
            box-shadow: 0 2px 10px #82c5c8;
            transition: 0.5s;
            border-radius: 10px;
            padding: 9;
            font-size: 13;
            color: #000;
        }
    </style>
</head>

<body>
    <div id="frm">
        <h1>Login</h1>
        <form name="f1" action="LogIn.php" onsubmit="return validation()" method="POST">
            <p>
                <label> UserName: </label>
                <input type="text" id="user" name="user" />
            </p>
            <p>
                <label> Password: </label>
                <input type="password" id="pass" name="pass" />
            </p>
            <p>
                <input type="submit" id="new-button" value="Login" />
            </p>
        </form>
    </div>
    <!-- // validation for empty field    -->
    <script>
        function validation() {
            var id = document.f1.user.value;
            var ps = document.f1.pass.value;
            if (id.length == "" && ps.length == "") {
                alert("User Name and Password fields are empty");
                return false;
            } else {
                if (id.length == "") {
                    alert("User Name is empty");
                    return false;
                }
                if (ps.length == "") {
                    alert("Password field is empty");
                    return false;
                }
            }
        }
    </script>

<div style="margin: 250;"></div>


</body>

</html>

<?php

$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select *from login where username = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "<h1><center> Login successful </center></h1>";
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
?>