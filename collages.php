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
            <h1 class="title">COLLAGES</h1>

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


    <div class="container" style="margin: -90;">
        <?php foreach ($collages as $clubInfo) { ?>
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
                    <div class="card">
                        <img class="image" src=<?php echo $clubInfo['pic'] ?> height="100%">
                        <!-- <script>
                            if ("<?php echo $clubInfo['pic']; ?>".height < 50) {
                                console.log("hi");
                            }
                        </script> -->
                        <input type="hidden" name="name" value="<?php echo  $name; ?>">
                        <input type="hidden" name="pic" value=<?php echo  $pic; ?>>
                        <input type="hidden" name="dec" value="<?php echo  $dec; ?>">
                        <button type="submit" class="press">
                            <a href="DEC1.php">
                                <div class="collage-button" type="submit" style="top: 190px; right: 30; font-size: 12; visibility: visable;"> LEARN MORE </div>
                            </a>
                        </button>

                    </div>
                </form>
            </div>
        <?php } ?>
    </div>

    <div style="margin: 500;"></div>


</body>

</html>