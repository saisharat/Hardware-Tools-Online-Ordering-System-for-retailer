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
    <h1>Payment Details</h1>

    <table class="table table-primary table-striped table-responsive table-bordered">
      <thead>
        <th colspan="1">Serial No</th>
        <th colspan="9">Billing Details</th>
        <th colspan="7">Shipping Details</th>
        <th colspan="4">Credit Card Details</th>
        <th colspan="1">Timestamp</th>
      </thead>


        <tr>
          <th scope="col">Sno</th>
          <th scope="col">Email</th>
          <th scope="col">firstname</th>
          <th scope="col">lastname</th>
          <th scope="col">address</th>
          <th scope="col">country</th>
          <th scope="col">zipcode</th>
          <th scope="col">city</th>
          <th scope="col">state</th>
          <th scope="col">phone</th>
          <th scope="col">sname</th>
          <th scope="col">sbusinessname</th>
          <th scope="col">saddress</th>
          <th scope="col">scity</th>
          <th scope="col">sstate</th>
          <th scope="col">szipcode</th>
          <th scope="col">scountry</th>
          <th scope="col">cardnumber</th>
          <th scope="col">expirationdate</th>
          <th scope="col">cvc</th>
          <th scope="col">cardownername</th>
          <th scope="col">timestamp</th>
        </tr>


      <tbody>
        <?php
        include('config.php');
        $sql="select * from paymentinfo";
        $query=mysqli_query($con,$sql);
        $nums=mysqli_num_rows($query);

        while($res=mysqli_fetch_array($query)){
        ?>


        <tr>
          <td><?php echo $res['Sno']; ?></td>
          <td><?php echo $res['email']; ?></td>
          <td><?php echo $res['firstname']; ?></td>
          <td><?php echo $res['lastname']; ?></td>
          <td><?php echo $res['address']; ?></td>
          <td><?php echo $res['country']; ?></td>
          <td><?php echo $res['zipcode']; ?></td>
          <td><?php echo $res['city']; ?></td>
          <td><?php echo $res['state']; ?></td>
          <td><?php echo $res['phone']; ?></td>
          <td><?php echo $res['sname']; ?></td>
          <td><?php echo $res['sbusinessname']; ?></td>
          <td><?php echo $res['saddress']; ?></td>
          <td><?php echo $res['scity']; ?></td>
          <td><?php echo $res['sstate']; ?></td>
          <td><?php echo $res['szipcode']; ?></td>
          <td><?php echo $res['scountry']; ?></td>
          <td><?php echo $res['cardnumber']; ?></td>
          <td><?php echo $res['expirationdate']; ?></td>
          <td><?php echo $res['cvc']; ?></td>
          <td><?php echo $res['cardownername']; ?></td>
          <td><?php echo $res['timestamp']; ?></td>
          </tr>


         <?php
    }

     ?>
      </tbody>
      </table>

 <br>
 <br>
 <form class = "logout" action="Admin.html" method="post">
<h3>Click Here to Log Out !</h3>
<button class="btn">Log out</button>
 </form>
<br>
 <footer class="footer1">
   <p>Copyright @ Nextware Technologies</p>
 </footer>

</body>
</html>
