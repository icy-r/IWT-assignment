<?php

$conn = mysqli_connect("localhost", "root", "", "iwt");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>