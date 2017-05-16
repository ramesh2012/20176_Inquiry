<?php
//session start
ob_start();
session_start();
var_dump($_SESSION);
//ƒf[ƒ^‚ðˆê‚Â“ü‚ê‚é
$_SESSION['rand']= mt_rand(0, 1000);
var_dump($_SESSION);