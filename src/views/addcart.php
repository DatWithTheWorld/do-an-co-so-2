<?php
session_start();
$cid = $_SESSION['CID'];
require_once "../controller/connectiondb.php";
$sqlcussl1 = "select Timess from customer where CID = '$cid'";
$resultcussl1 = mysqli_query($conn, $sqlcussl1);
$rowcussl1 = mysqli_fetch_array($resultcussl1);
$vid = $_GET['vid'];
if($rowcussl1['Timess']<2){
 $sqlcus = "update customer set Timess = '2' where CID = '$cid'";
 $sqlsche = "insert into schedule (VID,CID,VSID) values ('$vid','$cid','1')";
  mysqli_query($conn, $sqlcus);
  mysqli_query($conn, $sqlsche);
  echo "<script> alert('Added to cart');</script>";
  echo "<script>window.location.href='user.php';</script>";
}else{
    echo "<script> alert('error because your time > 2 ');</script>";
    echo "<script>window.location.href='user.php';</script>";
}
?>