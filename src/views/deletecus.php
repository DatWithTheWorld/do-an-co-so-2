<?php
require_once "../controller/connectiondb.php";
$id = $_GET['cid'];
$sqlacc = "Delete from Account where CID = $id";
mysqli_query($conn,$sqlacc);
$sql = "DELETE FROM customer WHERE CID = '$id'";
$sql1 = "Delete from schedule WHERE CID = '$id'";
mysqli_query($conn, $sql1);
mysqli_query($conn, $sql);
header("Location: customer.php");
?>