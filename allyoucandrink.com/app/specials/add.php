<?php 
session_start();
require_once('../includes/php/userClass.php');
require_once('../includes/php/specialClass.php');
$user = new userClass();
$user->check_auth();
$spc = new specialClass();
$spc->add_special();
?>
