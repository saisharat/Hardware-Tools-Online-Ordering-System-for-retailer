<?php
include ('config.php');
if(isset($_GET['del']))
{
  $name = $_GET['del'];
  $query = "DELETE FROM userdetails WHERE name = '".$name."'";
  $result = mysqli_query($con,$query);

  if ($result)
  {
    echo "Record deleted from database";
    echo "<br>"
    echo "<a href= http://localhost/cse3002proj/Admin1.php>Back to Admin page</a>";
  }
  else {
    echo "Record deletion failed from database";
  }
}
else {
  echo "<br>";
  echo "<a href= http://localhost/cse3002proj/Admin1.php>Back to Admin page</a>";
}

 ?>
