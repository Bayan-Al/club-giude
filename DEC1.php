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
</head>

<body>

    <?php
    $name =  $_POST['name'];
    $pic =  $_POST['pic']; ?>



    <div class="w">
        <div class="rec1">
            <div class="rec8">
                <?php echo $name ?>
            </div>
        </div>
        <div class="rec2">
            <div class="rec7">rec7</div>
        </div>
        <div class="rec3">
            <div class="rec6">rec6</div>
        </div>


        <div class="rec4">
            <a href=<?php echo ($clubInfo['apply']); ?>>
                <div class="collage-button" style="top: 5; left:4;   
                 width: 189px; font-size:large;    box-sizing: border-box; 
                  border-radius: 20px; height: 65px; padding:23;"> APPLY  </div>
            </a>
        </div>



        <div class="rec5">
            <img src=<?php echo $pic ?> style="max-width: 387px; max-height: 301px;  border-radius: 10px;" height=100%>
        </div>



        <div style="margin: 350;"></div>


    </div>



</body>

</html>