<?php

include("header.php");
?><html>

<head>
    <title>PHP login system</title>
    <style>
        body {
            background: rgb(238, 238, 238);
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
    </style>
</head>

<body>
    <div id="frm">
        <h1>Login</h1>
        <form name="f1" action="authentication.php" onsubmit="return validation()" method="POST">
            <p>
                <label> UserName: </label>
                <input type="text" id="user" name="user" />
            </p>
            <p>
                <label> Password: </label>
                <input type="password" id="pass" name="pass" />
            </p>
            <p>
                <input type="submit" id="btn" value="Login" />
            </p>
        </form>
    </div>
    #Using javascript for validation purpose
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
</body>

</html>