<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>



<?php 
session_start();
$hoten = $_POST['hoten'];
$phone = $_POST['phone'];
require_once 'connectiondb.php';
$sql = "SELECT * FROM customer WHERE Name = '$hoten' AND Phone = '$phone'";

$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0){
    echo "You have signed up in this website, you only see your information if you want to use more function, please login with your password in our previous email";
?>
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
while($r = mysqli_fetch_array($result)){

?>
 <tr>
      <th scope="row"><?php echo $r['CID']; $_SESSION['CID'] = $r['CID']?></th>
      <td> <?php echo $r['Name']; $_SESSION['Name'] = $r['Name'] ?> </td>
      <td> <?php echo $r['Phone'] ?> </td>
      <td> <?php echo $r['Address']?> </td>
      <td> <?php echo $r['Timess']?> </td>
    </tr>
<?php

} 
?>
 </tbody>
</table> 

<?php
}else{
  echo '<h1> No value valid </h1>';
}
?>
  <form action="" method="POST">
  <input style="margin: 20px; padding:10px;border-radius:20px"  type="password" name="pass" placeholder="Password" >
  <button style="background-color: green;color:white;padding:10px 20px;border:none;border-radius:20px" name="login" value="login">Log in</button>
</form>
   <button class="btn btn-secondary" ><a href="../views/index.php">Return</a></button>
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   
</body>
</html>
<?php
if(isset($_POST['login'])){
  $name = $_SESSION['Name'];
  $pass = $_POST['pass'];
  $cid = $_SESSION['CID'];
  $sqllog = "select Account , Password from Account where CID = $cid";
  echo $sqllog;
  echo $pass;

  $resultslogin = mysqli_query($conn,$sqllog);
  $rlogin = mysqli_fetch_assoc($resultslogin);
  if($name === $rlogin['Account']){
  if($pass === $rlogin['Password']){
      $_SESSION['CID'] = $cid;
      echo '<script> alert("Log in successfull");</script>';
      echo '<script>window.location.href="../views/user.php";</script>';
  }
  }
  }
?>