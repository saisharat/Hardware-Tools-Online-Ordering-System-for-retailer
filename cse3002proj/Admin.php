<?php
$user=$_POST['Username'];
$password=$_POST['Password'];
$userf="Admin2022";
$passwordf="Admin2022!!@";

if (empty($user)) {
  echo '<script type ="text/JavaScript">';
  echo 'alert("Username is empty")';
  echo '</script>';
}

if (empty($password)) {
  echo '<script type ="text/JavaScript">';
  echo 'alert("Password is empty")';
  echo '</script>';
}

if($user==$userf && $password==$passwordf){
  header('Location: http://localhost/cse3002proj/Admin1.php');

}
else{
  echo "<br>
  <br>
  <br><h1><center>
  Login failed !! <br />Invalid username and password.
  <br>
  <br>
  <a href= http://localhost/cse3002proj/Admin.html>Back to Admin Login Page</a>
  </center></h1>";
}
?>
