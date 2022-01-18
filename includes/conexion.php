<?php
// Base de datos host
// --------------------------
$dbhost	= "localhost";
// Base de datos usario
// --------------------------
$dbuser	= "<DB_USER>";
// Base de datos contasena
// ----------------------------
$dbpass	= "<DB_PASS>";	
// -----------------------
$dbname	= "<DB_NAME>";	### !!! Tienes que cambiar con el tuyo !!!
// Base de datos caracteres
// ----------------------------------
$charset = 'utf8mb4';
// -------------------------------
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("MySQL ERROR >>>".mysqli_error());
// -------------------------------
$db_select = mysqli_select_db($conn, $dbname) or die("ERROR: $dbname >>>".mysqli_error());
//------------------------------------------------
$db_conn_charset = mysqli_set_charset($conn, 'utf8mb4');
?>
