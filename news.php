<?php

include("header.php");
include("con.php")
?>

<html>

<head>
    <title>Clubs Guide</title>
    <link rel="stylesheet" href="mainPage.css">
    <link rel="stylesheet" href="text.css">

    <style>
        .container {
            max-width: 100%;
            justify-content: space-evenly;
            margin: -100;
            margin-top: -150;
            margin-bottom: -150;
            padding: 80;
            box-sizing: border-box;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 92px;
            position: absolute;
            top: 300;
            left: -220;

        }
    </style>
</head>

<body>
    <div class="Text_wrapper">
        <div class="seven">
            <h1 class="title">NEWS</h1>

        </div>
    </div>

    <div class="Text_wrapper" style="margin-bottom: -100;">
        <div class="text">
        <p>
                <!-- write an intro -->
            </p>
        </div>
    </div>
    <div style="margin: 100;"></div>

    <div class="NEWS-container">
        <?php foreach ($news as $clubInfo) { ?>
            <div class="card-wrapper">
                <!-- here where the database is sent -->
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST["name"];
                    $pic = $_POST["pic"];
                    $dec = $_POST["dec"];
                }
                $name  = $clubInfo['name'];
                $pic = $clubInfo['pic'];
                $dec = $clubInfo["dec"];
                ?>

                <form action="DEC1.php" method="post">

                    <div class="NEWS-card">
                        <div class="card-wrapper">
                            <img class="NEWS-image" src=<?php echo $clubInfo['pic'] ?> width="150">
                            <input type="hidden" name="name" value="<?php echo  $name; ?>">
                            <input type="hidden" name="pic" value=<?php echo  $pic; ?>>
                            <input type="hidden" name="dec" value="<?php echo  $dec; ?>">
                            <div class="new-des">
                                <div style="font-size: 15px; height: 55; overflow: hidden; padding: 20;">
                                    <span class="decs"><?php echo ($clubInfo['dec']); ?></span>
                                </div>
                                <button type="submit" class="press" style="    visibility:hidden;">
                                    <a href="DEC1.php">
                                        <div class="new-button" type="submit" style="left: 135; font-size: 12;  visibility:visible;
     "> LEARN MORE </div>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>


        <div style="margin: 250;"></div>





</body>

</html>