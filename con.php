<!---- cafe database---->

<?php

$conn =  mysqli_connect('localhost', 'root', '', 'Club_Guide');

if (!$conn){
echo "Connection error"; }

$sql = " SELECT * FROM clubs";

$result = mysqli_query($conn, $sql);

$club = mysqli_fetch_all($result, MYSQLI_ASSOC);

//   print_r($club);
//   echo $cafe

?>
