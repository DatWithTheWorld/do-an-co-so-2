<?php
session_start();
$cid = $_SESSION['CID'];
require_once "../controller/connectiondb.php";
if (isset($_POST['upload'])) {
$errors= array();
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];
$file_parts =explode('.',$_FILES['image']['name']);
$file_ext=strtolower(end($file_parts));
$expensions= array("jpeg","jpg","png");
if(in_array($file_ext,$expensions)=== false){
$errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
}
if($file_size > 2097152) {
$errors[]='Kích thước file không được lớn hơn 2MB';
}
$image = $_FILES['image']['name'];
$target = "../".basename($image);
$sql = "update customer set avt='$image' where CID = $cid";
mysqli_query($conn, $sql);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
echo '<script language="javascript">alert("Successfully update!");</script>';
}else{
echo '<script language="javascript">alert("Error to update image!");</script>';
}
}
header("Location: user.php");
?>