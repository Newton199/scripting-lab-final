<?php

include 'conn.php';

$id = $_GET['ID'];

$q = " DELETE FROM `student` WHERE ID = $ID ";

mysqli_query($con, $q);

header('location:display.php');

?>