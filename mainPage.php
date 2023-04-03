<?php
include("header.php");
include("con.php"); ?>
<html>

<head>
    <title>Clubs Guide</title>
    <link rel="stylesheet" href="text.css">
    <link rel="stylesheet" href="mainPage.css">

    <style>
        .buttonBorder {
            /* border: solid gray 1px;   */
            width: 25%;
            border-radius: 2px;
            margin: 120px auto;
            margin-top: 20px;
            margin-bottom: 500px;
            background: white;
            padding: 50px;
            position: relative;
            top: 300;
        }
    </style>
</head>

<body>
    <div class="Section_wrapper"> <img src="img/main.jpeg" width="100%"></div>

    <!--------------CLUBS TITLE-------------------------------------------------------------------------------------->

    <div class="twelve">
        <h1>Explore Clubs</h1>
    </div>

    <!--------------CLUBS CONTAINERS-------------------------------------------------------------------------------------->

    <div class="container" style="margin: -90;">
        <?php foreach ($club as $clubInfo) { ?>
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
                        <input type="hidden" name="name" value="<?php echo  $name; ?>">
                        <input type="hidden" name="pic" value=<?php echo  $pic; ?>>
                        <input type="hidden" name="dec" value="<?php echo  $dec; ?>">
                        <button type="submit" class="press">
                            <a href="DEC1.php">
                                <div class="collage-button" type="submit" style="left: 80; font-size: 12;"> LEARN MORE </div>
                            </a>
                        </button>
                        <a href=<?php echo ($clubInfo['apply']); ?>>
                            <div class="collage-button"> APPLY </div>
                        </a>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
    <!--------------CLUBS MORE BUTTON-------------------------------------------------------------------------------------->

    <div style="  width: 25%; border-radius: 2px;
     margin: 120px auto; margin-top: 120px auto; margin-bottom: -250px;
    background: white; padding: 50px; position: relative; top: 80px;">
        <a href="clubs.php" style="text-decoration: none;">
            <div class="collage-button" style="position:relative; top: -20px; left: 100px;;
         width: 170px; background-color:  #9dc2c4;"> SEE MORE </div>
        </a>
    </div>

    <!--------------COLLAGE TITLE-------------------------------------------------------------------------------------->
    <div class="buttonBorder">
        <div class="twelve">
            <h1>Choose collage</h1>
        </div>
    </div>

    <!--------------COLLAGE CONTAINERS-------------------------------------------------------------------------------------->

    <div class="clubs-container" style="  margin-top: -380;">
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
                        <input type="hidden" name="name" value="<?php echo  $name; ?>">
                        <input type="hidden" name="pic" value=<?php echo  $pic; ?>>
                        <input type="hidden" name="dec" value="<?php echo  $dec; ?>">
                        <button type="submit" class="press">
                            <a href="DEC1.php">
                                <div class="collage-button" type="submit" style="left: 80; font-size: 12;"> LEARN MORE </div>
                            </a>
                        </button>
                        <a href=<?php echo ($clubInfo['apply']); ?>>
                            <div class="collage-button"> APPLY </div>
                        </a>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
    <!--------------COLLAGE MORE BUTTON-------------------------------------------------------------------------------------->

    <div style="  width: 25%; border-radius: 2px;
     margin: 120px auto; margin-top: 120px auto; margin-bottom: -180px;
    background: white; padding: 50px; position: relative; top: 120px;">
        <a href="collages.php" style="text-decoration: none;">
            <div class="collage-button" style="position:relative; top: -20px; left: 100px;;
         width: 170px; background-color:  #9dc2c4;"> SEE MORE </div>
        </a>
    </div>
    <!--------------NEWS TITLE-------------------------------------------------------------------------------------->

    <div class="twelve" style="margin: 230; margin-top: 420;  margin-bottom: 60; ">
        <h1>
            <div style="margin-left: 100;">NEWS</div>
        </h1>
    </div>

    <!--------------NEWS CONTAINERS-------------------------------------------------------------------------------------->


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
    </div>

    <!--------------NEWS MORE BUTTON-------------------------------------------------------------------------------------->

    <div style="  width: 25%; border-radius: 2px;
     margin: 120px auto; margin-top: 120px auto; margin-bottom: -180px;
    background: white; padding: 50px; position: relative; top: -10px;">
        <a href="news.php" style="text-decoration: none;">
            <div class="collage-button" style="position:relative; top: -20px; left: 100px;;
         width: 170px; background-color:  #9dc2c4;"> SEE MORE </div>
        </a>
    </div>

    <!--------------DONE-------------------------------------------------------------------------------------->


    <div style="margin: 250;"></div>

    <?php include("footer.php"); ?>



</body>


</html>