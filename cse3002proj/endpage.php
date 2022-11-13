<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment Successful</title>
    <script type="text/javascript">
    function welcome(){
      alert("Payment is done successfully!!");
    }
    </script>
    <style media="screen">
    img {
      margin: auto;
      height: 160px;
      display: block;
    }
    .footer1 {
      background-color: #eeeeee;
      text-align: center;
    }
    h1 {
      text-align: center;
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

  </head>
  <body style="background-color: #EEEDDE;" onload="welcome()">
    <img src="images\NEXTWARE TECH LOGO.png" title="NEXTWARE TECHNOLOGIES" class="" alt="">
    <hr size="3" noshade>
    <br>
    <div class="menubar">
      <a href="http://localhost/cse3002proj/startingpage.html">Home</a>
      <a href="http://localhost/cse3002proj/About.html">About</a>
      <a href="http://localhost/cse3002proj/contactdetails.html">Contact Details</a>
      <br>
      <br>
      <br>
      <br>
      <h1>Payment is completed...
      <br>Thank You!! </h1>



      <form class = "logout" action="startingpage.html" method="post">
     <h3>Click Here to Log Out !</h3>
     <button class="btn">Log out</button>
      </form>
    <br>

      <footer class="footer1">
        <p>Copyright @ Nextware Technologies</p>
      </footer>

    </div>
    <br>

  </body>
</html>
