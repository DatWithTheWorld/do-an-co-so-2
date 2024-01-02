<?php
session_start();
$_SESSION['CID'] = "";
header("Location: index.php");
?>