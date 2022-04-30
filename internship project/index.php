<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee salary slip Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<section class="home">
    <div class="formset">
<form method="POST">
  <h3 class="text-center text-white">Salary Slip Form</h3>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Your Name</label>
    <input type="text" class="myinput" name="user" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Month</label>
    <select id="exampleFormControlSelect1" name="month" class="myinput">
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select>
  </div>
  <button type="submit" class="mybtn" name="submit">Submit</button>
</form>
</div>
</section>
</body>
</html>


<?php

include "conn.php";
if(isset($_POST['submit'])){
  $user = $_POST['user'];
  $pass = $_POST['month'];
  $select_user = "SELECT * FROM `salaryslip` WHERE user ='$user'";
  $run = mysqli_query($conn,$select_user);
  if(mysqli_num_rows($run)>0){
    echo "<script>alert ('Your Pdf file is ready to download');window.location.href='downloadpdf.php'</script>";
  }else{
    echo "<script>alert ('your information is not match on database');</script>";
  }
}
?>