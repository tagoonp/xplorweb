<?php
include "xplor-config.php";
include "xplor-connect.php";

$db = new database();
$db->connect();

$tbPrefix = $db->getTablePrefix();
$sessPrefix = $db->getSessionPrefix();


?>
