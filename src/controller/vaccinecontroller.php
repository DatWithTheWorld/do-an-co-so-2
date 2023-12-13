<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">CID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Times</th>
    </tr>
  </thead>
  <tbody>
<?php 
$hoten = $_POST['hoten'];
$phone = $_POST['phone'];
require_once 'connectiondb.php';
$sql = "SELECT * FROM customer WHERE Name = '$hoten' AND Phone = '$phone'";

$result = mysqli_query($conn, $sql);
if ($result){
    echo "You have signed up in this website, you only see your information";
}
while($r = mysqli_fetch_array($result)){

?>
 <tr>
      <th scope="row"><?php echo $r['CID'] ?></th>
      <td> <?php echo $r['Name'] ?> </td>
      <td> <?php echo $r['Phone'] ?> </td>
      <td> <?php echo $r['Address']?> </td>
      <td> <?php echo $r['Times']?> </td>
    </tr>
<?php
} 
?>
  </tbody>
</table>  
   <button class="btn btn-secondary" ><a href="../views/index.php">Return</a></button>
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   
</body>
</html>