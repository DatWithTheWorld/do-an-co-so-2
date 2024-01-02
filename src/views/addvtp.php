<?php
require_once "../controller/connectiondb.php";
if(isset($_POST['submit'])){
$name = $_POST['name'];
$desciption = $_POST['desciption'];
$price = $_POST['price'];
$sql = "INSERT INTO vtype(Name, Desciption, Price) VALUES('$name', '$desciption', '$price')";
mysqli_query($conn, $sql);
header("Location: vtype.php");
}
echo "sadf";
?>