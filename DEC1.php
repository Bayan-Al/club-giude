<?php
include("header.php");
include("con.php");
?>

<html>

<head>
    <title>Clubs</title>
    <link rel="stylesheet" href="mainPage.css">
    <link rel="stylesheet" href="text.css">
    <link rel="stylesheet" href="DEC.css">
    <style>
        .Poster {
            position: absolute;
            width: 739px;
            height: 669px;
            left: 77px;
            top: 289px;
            /* background: #B7CAD4; */
        }

        .Logo {
            position: absolute;
            width: 387px;
            height: 301px;
            left: 900px;
            top: 335px;
            /* background: #9DACAD; */
            border-radius: 10px;
        }

        .Title {
            position: absolute;
            width: 1073px;
            height: 106px;
            left: 202px;
            top: 137px;
            /* background: #B7CAD4; */
        }

        .Title-inside {
            position: relative;
            width: 886px;
            height: 70px;
            left: 90px;
            top: 20px;
            /* background: #ffffff; */
            font-size: x-large;
        }

        .B {
            position: absolute;
            width: 189px;
            height: 65px;
            left: 1130px;
            top: 893px;
            top: 703px;
            background: #799597;
            border-radius: 20px;
        }

        .Terms {
            position: absolute;
            width: 387px;
            height: 166px;
            left: 930px;
            top: 682px;
            /* background: #B3CBCC; */
            border-radius: 10px;
        }

        .Terms-inside {
            position: relative;
            width: 350px;
            height: 130px;
            left: 20px;
            top: 20px;
            /* background: #ffffff; */
            font-size: large;
        }
    </style>
</head>

<body>

    <?php
    $name =  $_POST['name'];
    $pic =  $_POST['pic'];
    $dec = $_POST["dec"];
    $apply = $_POST["apply"];
    ?>


    <div class="Title">
        <div class="Title-inside"> <?php echo $name ?></div>

    </div>


    <div class="Poster">
        <?php echo $dec ?>

    </div>

    <div class="Logo">
        <img src=<?php echo $pic ?> style="max-width: 387px; max-height: 301px;  border-radius: 10px;" height=100%>

    </div>

    <div class="Terms">
        <div class="Terms-inside"></div>
    </div>

    <div class="B">
        <a href=<?php echo  $apply; ?>>
            <div class="collage-button" style="top: 5; left:4;   
                 width: 189px; font-size:large;    box-sizing: border-box; 
                  border-radius: 20px; height: 65px; padding:23;"> APPLY </div>
        </a>

    </div>
    <div style="margin: 500; height: 100px;"></div>


</body>

</html>