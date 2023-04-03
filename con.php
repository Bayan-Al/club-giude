<!---- club database----------------------------------------------------------------------------------------------------->

<?php

$conn =  mysqli_connect('localhost', 'root', '', 'Club_Guide');

if (!$conn) {
    echo "Connection error";
}

$sql = " SELECT * FROM clubs";

$result = mysqli_query($conn, $sql);

$club = mysqli_fetch_all($result, MYSQLI_ASSOC);

//   print_r($club);
//   echo $cafe

?>

<!---- collages database---------------------------------------------------------------------------------------------->

<?php
$conn =  mysqli_connect('localhost', 'root', '', 'Club_Guide');

if (!$conn) {
    echo "Connection error";
}

$sql = " SELECT * FROM collages";

$result = mysqli_query($conn, $sql);

$collages = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!---- news database---------------------------------------------------------------------------------------------------->

<?php
$conn =  mysqli_connect('localhost', 'root', '', 'Club_Guide');

if (!$conn) {
    echo "Connection error";
}

$sql = " SELECT * FROM news";

$result = mysqli_query($conn, $sql);

$news = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!---- workshop database---------------------------------------------------------------------------------------------->

<?php
$conn =  mysqli_connect('localhost', 'root', '', 'Club_Guide');

if (!$conn) {
    echo "Connection error";
}

$sql = " SELECT * FROM workshop";

$result = mysqli_query($conn, $sql);

$workshop = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!---- contest database------------------------------------------------------------------------------------------------->

<?php
$conn =  mysqli_connect('localhost', 'root', '', 'Club_Guide');

if (!$conn) {
    echo "Connection error";
}

$sql = " SELECT * FROM contest";

$result = mysqli_query($conn, $sql);

$contest = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>