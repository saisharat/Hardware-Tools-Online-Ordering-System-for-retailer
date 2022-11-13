<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin_Page</title>

    <script type="text/javascript">
    function welcome(){
      alert("Logged in Successfully!!");
    }
    </script>

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

      .footer1 {
        background-color: #eeeeee;
        text-align: center;
        }

        .logout {
          text-align: center;
        }

        .btn{
        height:40px;
        width:200px;
        font-family: 'Lobster', cursive;
        border-radius:15px;
        font-size:15px;
        border:1px solid black;
        margin-left:20px;

          }


    </style>

  </head>
  <body style="background-color: #EEEDDE;" onload="welcome()">

    <img src="images\NEXTWARE TECH LOGO.png" title="NEXTWARE TECHNOLOGIES" class="" alt="">
    <hr size="3" noshade>
    <br>

    <div class="menubar">
      <a href="http://localhost/cse3002proj/startingpage.html">Home</a>
      <a href="http://localhost/cse3002proj/About.html">About</a>
      <a href="http://localhost/cse3002proj/contactdetails.html">Contact Details</a>

    </div>
    <br>
    <h1>User Details</h1>

    <table class="table table-primary table-striped table-responsive table-bordered">
      <thead>
        <tr>
          <th scope="col">sno</th>
          <th scope="col">name</th>
          <th scope="col">password</th>
          <th scope="col">confirmpd</th>
          <th scope="col">email</th>
          <th scope="col">birthday</th>
          <th scope="col">number</th>
          <th scope="col">gender</th>
          <th scope="col">address</th>
          <th scope="col">timestamp</th>
          <th scope="col">Delete</th>

        </tr>
      </thead>

      <tbody>
        <?php
        include('config.php');
        $sql="select * from userdetails";
        $query=mysqli_query($con,$sql);
        $nums=mysqli_num_rows($query);
        
        if(isset($_POST['add']))
        {
          $addquery = "INSERT INTO userdetails(name, password, confirmpd, email, birthday, number, gender, address) VALUES ('$_POST[username]','$_POST[hashed]','$_POST[hashed]','$_POST[email]','$_POST[birthday]','$_POST[number]','$_POST[gender]','$_POST[address]')";
          mysqli_query($con, $addquery);
        }


        while($res=mysqli_fetch_array($query)){
        ?>


        <tr>
          <td><?php echo $res['Sno']; ?></td>
          <td><?php echo $res['name']; ?></td>
          <td><?php echo $res['password']; ?></td>
          <td><?php echo $res['confirmpd']; ?></td>
          <td><?php echo $res['email']; ?></td>
          <td><?php echo $res['birthday']; ?></td>
          <td><?php echo $res['number']; ?></td>
          <td><?php echo $res['gender']; ?></td>
          <td><?php echo $res['address']; ?></td>
          <td><?php echo $res['timestamp']; ?></td>
          <td><a href="delete.php?del=<?php echo $res['name']?>">Delete</a></td>
          </tr>



         <?php
    }

     ?>

     <?php
     echo "<form action=Admin1.php method = post>";
     echo "<tr>";
     echo "<td>" . "<input type=text name=sno readonly></td>";
     echo "<td>" . "<input type=text name=username ></td>";
     echo "<td>" . "<input type=text name=password ></td>";
     echo "<td>" . "<input type=text name=confirmpd ></td>";
     echo "<td>" . "<input type=text name=email ></td>";
     echo "<td>" . "<input type=text name=birthday ></td>";
     echo "<td>" . "<input type=text name=number ></td>";
     echo "<td>" . "<input type=text name=gender ></td>";
     echo "<td>" . "<input type=text name=address ></td>";
     echo "<td>" . "<input type=text name=timestamp readonly></td>";
     echo "<td>" . "<input type=submit name=add value=Add></td>";
     echo "</tr>";
     echo "</form>"
     ?>



      </tbody>
    </table>

    <br>
    <br>
    <form class = "logout" action="Admin2.php" method="post">
   <h3>Next Page</h3>
   <button class="btn">Next</button>
    </form>
  <br>
    <footer class="footer1">
      <p>Copyright @ Nextware Technologies</p>
    </footer>

  </body>
</html>
