<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Successfull</title>
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

if(isset($_POST['username'])){


 // Collect post variables
$name= $_POST['username'];
$password=$_POST['password'];
$hashed= hash('sha256',$password);
$confirmpd= $hashed;
$email= $_POST['email'];
$birthday= $_POST['birthday'];
$number= $_POST['phone'] ;
$gender= $_POST['gender'];
$address= $_POST['address'];

$sql="INSERT INTO `cse3002proj`.`userdetails` (`name`, `password`, `confirmpd`, `email`, `birthday`, `number`, `gender`, `address`, `timestamp`)
 VALUES ('$name', '$hashed','$hashed', '$email', '$birthday', '$number', '$gender', '$address', current_timestamp())";

 if($con->query($sql) == true){

   $insert=true;
   echo "<center><h1>Registration Successfull!!<h1><center>";
   print("<img src=images/thank-removebg-preview.png>");
   echo"<br>";
   echo "<a href= http://localhost/cse3002proj/startingpage.html>Back to Home Page</a>";

}
else{
    echo "Error:<br> $con->error";
}

 $con->close();
 }
?>
