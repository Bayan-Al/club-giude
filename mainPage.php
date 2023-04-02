<?php
include("header.php");
include("con.php"); ?>
<html>

<head>
    <title>Clubs Guide</title>
    <link rel="stylesheet" href="text.css">
    <link rel="stylesheet" href="mainPage.css">

    <style> </style>
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
                }
                $name  = $clubInfo['name'];
                $pic = $clubInfo['pic'];
                ?>
                <form action="DEC1.php" method="post">
                    <div class="card">
                        <img class="image" src=<?php echo $clubInfo['pic'] ?> height="100%">
                        <input type="hidden" name="name" value="<?php echo  $name; ?>">
                        <input type="hidden" name="pic" value=<?php echo  $pic; ?>>
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
    <!--------------CLUBS MORE-------------------------------------------------------------------------------------->

    <a href="clubs.php" style="text-decoration: none;">
        <div class="collage-button" style="position:relative; top: 260px; left: 640px;
         width: 170px; background-color:  #9dc2c4; margin-top:-120;"> SEE MORE </div>
    </a>

    <!--------------COLLAGE TITLE-------------------------------------------------------------------------------------->

    <div class="twelve" style="margin: 230; margin-top: 400;">
        <h1>Choose collage</h1>
    </div>

    <!--------------COLLAGE CONTAINERS-------------------------------------------------------------------------------------->

    <div class="clubs-container" style="  margin-top: -380;">
        <?php foreach ($club as $clubInfo) { ?>
            <div class="card-wrapper">
                <!-- here where the database is sent -->
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST["name"];
                    $pic = $_POST["pic"];
                }
                $name  = $clubInfo['name'];
                $pic = $clubInfo['pic'];
                ?>
                <form action="DEC1.php" method="post">
                    <div class="card">
                        <img class="image" src=<?php echo $clubInfo['pic'] ?> height="100%">
                        <input type="hidden" name="name" value="<?php echo  $name; ?>">
                        <input type="hidden" name="pic" value=<?php echo  $pic; ?>>
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
    <!--------------COLLAGE MORE-------------------------------------------------------------------------------------->

    <a href="collages.php" style="text-decoration: none;">
        <div class="collage-button" style="position:relative; top: 260px; left: 640px;
         width: 170px; background-color:  #9dc2c4; margin-top:-120;"> SEE MORE </div>
    </a>


    <!--------------NEWS TITLE-------------------------------------------------------------------------------------->

    <div class="twelve" style="margin: 230; margin-top: 420;  margin-bottom: 60; ">
        <h1>
            <div style="margin-left: 100;">NEWS</div>
        </h1>
    </div>

    <!--------------NEWS CONTAINERS-------------------------------------------------------------------------------------->


    <div class="NEWS-container">
        <?php foreach ($club as $clubInfo) { ?>
            <div class="card-wrapper">
                <!-- here where the database is sent -->
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST["name"];
                    $pic = $_POST["pic"];
                }
                $name  = $clubInfo['name'];
                $pic = $clubInfo['pic'];
                ?>
                <form action="DEC1.php" method="post">

                    <div class="NEWS-card">
                        <div class="card-wrapper">
                            <img class="NEWS-image" src=<?php echo $clubInfo['pic'] ?> width="150">
                            <input type="hidden" name="name" value="<?php echo  $name; ?>">
                            <input type="hidden" name="pic" value=<?php echo  $pic; ?>>
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

        <!--------------NEWS MORE-------------------------------------------------------------------------------------->

    </div>
    <a href="news.php" style="text-decoration: none;">
        <div class="collage-button" style="position:relative; top: 260px; left: 640px;
         width: 170px; background-color:  #9dc2c4; margin-top:-120;"> SEE MORE </div>
    </a>

    <div style="margin: 350;"></div>

    <?php include("footer.php"); ?>



</body>


</html>