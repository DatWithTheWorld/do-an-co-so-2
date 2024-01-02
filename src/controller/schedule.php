<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../../vendor/autoload.php';
if(isset($_POST['submit'])){
  $id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pattern = '#[0-9]{9}#';
$phonept = '#^0\d{9}$#';
$timess = 1;
if($id==""){
   echo '<script>alert("fill id input sp")</script>';
 
}else{
  if(preg_match_all($pattern,$id)){
    
  }else{
    echo "<script>alert('id format error')</script>";
  }
}
if($name==""){
  echo "<script> alert('name format error')</script>";
}else{
  
}
if($address==""){
  echo "<script> alert('address format error')</script>";
}
if($phone == ""){
echo "<script>alert('fill phone input sp')</script>";
}else{
  if(preg_match_all($phonept,$phone)){

  }else{
    echo "<script>alert('phone format error')</script>";
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
       echo "<script>alert('Can\'t submit your information because you haved submited 2 times');</script>";
    }else if($timess>1){
      $sqlu = "Update customer set Timess = '$timess' where CID = '$id'";
      echo "<script>alert('This is the lastest time you can use covid vaccine');</script>";
      mysqli_query($conn,$sqlu);
    }
}else{
$sqli = "insert into customer (CID,Name,Phone,Address,Timess,Email) values ('$id','$name','$phone','$address','$timess','$email')";
$sqlslvid = "select MAX(VID) as vids from vtype ";
$rs = mysqli_query($conn,$sqlslvid);
$r = mysqli_fetch_assoc($rs);
$maxnum = (int) $r['vids'];
$randv = rand(1,$maxnum);
$sqlss = "insert into schedule (VID,CID,VSID) values ('$randv','$id','1');";

mysqli_query($conn,$sqli);
mysqli_query($conn,$sqlss);
 $sqlaccount = "insert into Account (Account,Password,CID) values ('$name','12345','$id')";
   mysqli_query($conn,$sqlaccount);
   try{
    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'datnd.22git@vku.udn.vn';
    $mail -> Password = 'qucbymduifoaqrix';
    $mail -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail -> Port = 465;
    $mail -> setFrom('datnd.22git@vku.udn.vn','Vacination.ng');
    $mail -> addAddress($_POST['email'],'$name');
    $mail -> isHTML(true);
    $mail -> Subject = "Vaccination.ng notifications";
    $mail -> Body = "You have already signed up, this is your username:$name and password:12345 to login to website here:http://localhost/do-an-co-so-2/src/views/customer.php";
    $mail ->send();
    echo "<script>alert('Email has been sent');</script>";
   }catch(Exception $e){
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
  
   echo "<script>alert('Successfully inserted');</script>";
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
  <input type="email" name="email" placeholder="Email">
  <button class="btn-danger" name="submit" value="submit">Submit</button>
  <button class="btn-success" ><a href="../views/index.php" style="text-decoration:none">Return</a></button>
</form>
  
</div>

<script>
  document.onkeydown = function (event) {
  event = event || window.event;
  var key = event.keyCode || event.which;
  if (key == 116) { // 116 là mã phím F5
    event.preventDefault();
    alert("Can't press F5");
    return false;
  }
};
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   
</body>
</html>