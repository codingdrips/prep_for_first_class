<?php

require "conn.inc.php";
require "CoolApp.php";

$obj = new CoolApp( $conn );

// CIRUD
// $obj->createTable ( $conn );
// $obj->readData ( $conn );
// $obj->insertData ( $conn );
// $obj->updateData ( $conn );
// $obj->deleteData ( $conn );
$obj->serveTemplate ( );



