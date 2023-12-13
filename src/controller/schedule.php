<?php 
if(isset($_POST['submit'])){
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$pattern = '#[0-9]{10}#';
$phonept = '#^0\d{9}$#';
$timess = 1;
if($id==""){
   echo "fill id input sp";
   echo "<br>";
 
}else{
  if(preg_match_all($pattern,$id)){
    
  }else{
    echo "id format error";
    echo "<br>";
  }
}
if($name==""){
  echo "fill name input sp";
  echo "<br>";
}else{
  
}
if($address==""){
echo "fill address input sp";
echo "<br>";
}
if($phone == ""){
echo "fill phone input sp";
echo "<br>";
}else{
  if(preg_match_all($phonept,$phone)){

  }else{
    echo "phone format error";
    echo "<br>";
  }
}
if($name != "" && $phone != "" && $address != "" && $id != "" ){
require_once "connectiondb.php";
$sql = "select Timess from customer where CID = '$id'";
$r = mysqli_query($conn,$sql);
if($r->num_rows>0){
    while($rs = mysqli_fetch_array($r)){
           $timess += $rs['Timess'] ;
    }
    if($timess>2){
       echo "Can't submit your information because you haved submited 2 times";
    }else if($timess>1){
      $sqlu = "Update customer set Timess = '$timess' where CID = '$id'";
      echo "This is the lastest time you can use covid vaccine";
      mysqli_query($conn,$sqlu);
    }
}else{
$sqli = "insert into customer (CID,Name,Phone,Address,Timess) values ('$id','$name','$phone','$address','$timess')";
echo "Successfully inserted";
mysqli_query($conn,$sqli);
}
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
  input{
    height:60px;
    border-radius:20px;
    border:none;
    outline:none;
    padding: 10px;
    width: 90%;
  }
  form{
   position: relative;
   z-index: 10;
   padding: 40px;
   display:flex;
   flex-direction:column;
   justify-content:center;
   align-items:center;
  }
  form:after{
    position:absolute;
    content:"";
    width: 100%;
    height:100%;
     background-color:black;
    z-index: -1;
    border-radius:20px;
    opacity: 0.4;
  }
</style>
</head>
<body style="background: linear-gradient(90deg, rgba(122,212,223,1) 0%, rgba(201,161,193,1) 61%, rgba(200,172,178,1) 100%);height:100vh ">
<h1>SCHEDULE</h1>
<h4>Please give your information </h4>
<div class="formschedule" style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;">
<form method="POST"  action="" style="display:flex;flex-direction:column;gap:20px;width:30%;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
<input type="text" name="id" placeholder="ID">
  <input type="text" name="name" placeholder="Name">
  <input type="text" name="phone" placeholder="Phone">
  <input type="text" name="address" placeholder="Address">
  <button class="btn-danger" name="submit" value="submit">Submit</button>
  <button class="btn-success" ><a href="../views/index.php" style="text-decoration:none">Return</a></button>
</form>
  
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   
</body>
</html>