<html>

<head>
    <title>Clubs Guide</title>

    <link rel="stylesheet" href="mainPage.css">
    <style>
        .nav {
            display: block;
            overflow: hidden;
            position: relative;
            right: -250;
            top: 15;
            font-size: 12px;
            padding-left: 170px;
            margin-left: 10;
            color: #fff;
            height: 20;
        }

        /* and (max-width:500px) */

        .nav a {
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            margin-left: 6em;
            font-size: 130%;


        }
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap");

        @font-face {
            font-family: AstroSpace;
            src: url(/fonts/AstroSpace.ttf);
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Montserrat", sans-serif;
            background-color: #212c3b;
        }

        .main-nav {
            background-color: #d3e8e8;
            text-align: center;
            margin: 0 auto;
            padding: 10;
            height: 65;
            width: 100%;
            box-sizing: border-box;
            font-variant: small-caps;
            font-size: 40;
            text-align: center;
            font-family: ui-serif;
            font-weight: bold;
            position: relative;
            font: 'Oleo Script', Helvetica, sans-serif;
            color: #2b2b2b;
            color: #e10c0c;
            text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.1);
            border-radius: 0px 0px 10px 80px;
            z-index: 2;
            overflow: hidden;

        }

        .logo {
            color: white;
            line-height: 90px;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            margin-left: 30px;
            font-family: "AstroSpace", sans-serif;
        }

        .navlinks {
            list-style: none;
            float: right;
            line-height: 90px;
            margin: 0;
            padding: 0;
            position: relative;
            top: -30px;

        }

        .navlinks li {
            display: inline-block;
            margin: 0px 30px;
        }

        .navlinks li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: all 0.3s linear 0s;
            text-transform: uppercase;
        }

        .navlinks li a:hover {
            color: #83c5c8;
            padding-bottom: 7px;
            border-bottom: 2px solid #83c5c8;
        }

        li a.contact {
            background-color: #00adb5;
            padding: 9px 20px;
            border-radius: 50px;
            transition: all 0.3s ease 0s;
            border-bottom: none;
        }

        li a.contact:hover {
            background-color: #047e85;
            color: white;
            border-bottom: none;
        }

        #check {
            display: none;
        }

        .menu-btn {
            font-size: 25px;
            color: white;
            float: right;
            line-height: 90px;
            margin-right: 40px;
            display: none;
            cursor: pointer;
        }

        @media (max-width: 1000px) {

            /* here */
            .navlinks {
                position: fixed;
                width: 30%;
                height: 100vh;
                text-align: center;
                transition: all 0.5s;
                right: -100%;
                background: #d3e8e8;
                top: 65;
            }

            .navlinks li {
                display: block;
            }

            .navlinks li a {
                font-size: 20px;
            }

            .navlinks li a:hover {
                border-bottom: none;
            }

            .menu-btn {
                display: block;
            }

            #check:checked~.navlinks {
                right: 0;
            }

        }

        @media (max-width: 360px) {
            .logo {
                margin-left: 10px;
                font-size: 25px;
            }

            .menu-btn {
                margin-right: 10px;
                font-size: 25px;
            }

            .menu-btn:focus {
                color: blue;
            }

            /* .navlinks li a {
                font-size: 5px;
            } */

        }
    </style>
</head>

<body>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Responsive Navbar</title>
        <link rel="stylesheet" href="styles/styles.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    </head>

    <body>
        <header>
            <nav class="main-nav">
                <a href="mainPage.php"> <span style="display: block; position: absolute; left:120;   color:black;">Clubes Guide</span> </a>
                <img id="logo_top" draggable="false" src="img/logo.svg" width="100">
                <input type="checkbox" id="check" />
                <label for="check" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul class="navlinks">
                    <li> <a href="aboutUs.php">ABOUT US</a></li>
                    <li> <a href="contest.php">CONTESTS</a></li>
                    <li> <a href="workSpace.php">WORKSHOPS</a></li>
                    <li> <a href="LogIn.php">LOGIN</a></li>
                    <!-- <input type="checkbox" id="check2" />
                    <label for="check2" class="menu-btn" style="display:inline-block; position:relative; bottom: -35px; margin-left: 10px;">
                        <i class="fas fa-bars"></i>
                    </label> -->
                </ul>
            </nav>
        </header>
    </body>

    </html>


</body>

</html>