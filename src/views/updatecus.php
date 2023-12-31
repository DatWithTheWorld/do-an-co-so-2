<?php
$id = $_GET['cid'];
require_once "../controller/connectiondb.php";
$sqlr = "select * from customer where CID = '$id'";
$result = mysqli_query($conn, $sqlr);
$row = mysqli_fetch_assoc($result);
if(isset($_POST['submit'])){
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sql = "update customer set Name = '$name', Address = '$address', Phone = '$phone' where CID = '$id'";
mysqli_query($conn, $sql);
echo "<script> alert('Update sussessed')</script>";
echo "<script>window.location.href = 'customer.php';</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<style>
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    form{
        width: 60%;
        background-color: rgba(0, 0, 255, 0.9);
        padding: 20px;
        color: white;
        border-radius: 20px;
    }
</style>
<body>
    <div class="container">

        <form action="" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $row['Name']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="phone" value="<?php echo $row['Phone']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="<?php echo $row['Address']?>">
          </div>
        
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>