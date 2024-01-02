<?php
require_once "../controller/connectiondb.php";
$id = $_GET['cid'];
$sqlsl = "select CID from schedule where VID = '$id'";
$result = mysqli_query($conn, $sqlsl);
$array = array();
if($result->num_rows>0){
while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row['CID'];
}
$sqldl = "Delete from schedule where VID = '$id'";
mysqli_query($conn, $sqldl);
$i=0;
while(true){
    $sql = "DELETE FROM customer WHERE CID = '$array[$i]'";
    $sqlacc = "delete from Account where CID = '$array[$i]'";
    mysqli_query($conn, $sqlacc);
    $i++;
    mysqli_query($conn, $sql);

}
}

$sql1 = "Delete from vtype WHERE VID = '$id'";

mysqli_query($conn, $sql1);
header("Location: vtype.php");
?>