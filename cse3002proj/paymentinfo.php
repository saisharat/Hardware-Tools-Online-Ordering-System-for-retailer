<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment_Info</title>
  </head>
  <style media="screen">
  h1 {
    text-align: center;
  }

  img {
    margin: auto;
    height: 160px;
    display: block;
  }
  .menubar {
    text-align: center;
  }

  .menubar a {
    color: black;
    text-align: center;
    padding: 10px 50px;
    font-size: 20px;
    border: 2px solid black;
    text-decoration: none;
  }

  .menubar a:hover {
    background-color: grey;
  }

  </style>
  <body style="background-color: #EEEDDE;">

    <img src="images\NEXTWARE TECH LOGO.png" title="NEXTWARE TECHNOLOGIES" class="" alt="">
    <hr size="3" noshade>
    <br>

    <div class="menubar">
      <a href="http://localhost/cse3002proj/startingpage.html">Home</a>
      <a href="http://localhost/cse3002proj/About.html">About</a>
      <a href="http://localhost/cse3002proj/contactdetails.html">Contact Details</a>

    </div>
    <br>

  </body>
</html>

<?php
include('config.php');
$insert = false;

if(isset($_POST['email'])){

$email= $_POST['email'];
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$address= $_POST['address'];
$country= $_POST['country'];
$zipcode= $_POST['zipcode'];
$city= $_POST['city'];
$state= $_POST['state'];
$number= $_POST['phone'];

$sname= $_POST['sname'];
$sbusiname = $_POST['sbusinessname'];
$saddress= $_POST['saddress'];
$scity= $_POST['scity'];
$sstate= $_POST['sstate'];
$szipcode= $_POST['szipcode'];
$scountry= $_POST['scountry'];

$cardno= $_POST['cardno'];
$expdate= $_POST['expdate'];
$cvc= $_POST['cvc'];
$cowner= $_POST['ownername'];


$sql= "INSERT INTO `cse3002proj`.`paymentinfo` (`email`, `firstname`, `lastname`, `address`, `country`, `zipcode`, `city`, `state`,`phone`,`sname`,`sbusinessname`,`saddress`,`scity`,`sstate`,`szipcode`,`scountry`,`cardnumber`,`expirationdate`,`cvc`,`cardownername`, `timestamp`)
 VALUES ('$email', '$firstname','$lastname', '$address', '$country', '$zipcode', '$city', '$state','$number', '$sname','$sbusiname','$saddress','$scity','$sstate','$szipcode','$scountry','$cardno','$expdate','$cvc','$cowner', current_timestamp())";

 if($con->query($sql) == true){

   $insert=true;
   echo "<center><h1>Payment Data stored Successfully !!<h1><center>";
   print("<img src=images/thank-removebg-preview.png>");
   echo"<br>";
   echo "<a href= http://localhost/cse3002proj/Creditcardpaymentportal.html>Back to Payment Portal</a>";


}
else{
    echo "Error:<br> $con->error";
}

 $con->close();
 }
 ?>
