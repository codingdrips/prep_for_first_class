<?php

$localHost = "localhost";
$user = "root";
$password = "";
$db = "tutorials";

$conn = mysqli_connect( $localHost, $user, $password, $db );

if ( !$conn ) die ( "Something went wrong!!" );
// $conn and die ( "Something went wrong!!" );
// $conn or die ( "Something went wrong!!" );
// !$conn ?? die ( "Something went wrong!!" );
// isset( $conn ) ? $conn : die ( "Something went wrong!!" );

