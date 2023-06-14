<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <title>Jerinance Resort</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <link href="css/justified-nav.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/admin_style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    #content {
      font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
      font-size: large;
      font-style: oblique;
      font-weight: bold;
      background-image: url(images/slide4.jpg);
      text-align: justify;
      height: 500px;
      width: 100%;
  }
      
    button {
    background-color:#533E1A;
    color: white;
    height: 50px;
    width: 20%;
    padding: 12px 20px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
  }
      
  input {
    background-color: #FFFFFF;
    color: black;
    height: 50px;
    padding: 12px 20px;
    border: none;
    border-radius: 10px;
  }
    tbody {
    background-color:#F2F0F0;
    color: black;
    height: 100px;
    padding: 12px 20px;
    border:#F3F1F1;
    border-radius: 10px;
  
    align-content: center;
  }
      </style>



    
  </head>
  <body>
    <div id="main_container">
      <div class="container" id="home">
        <div class="header"> <img src="images/banner3.jpg" alt="header image" class="templatemo-header-img img-responsive cleaner" width="100%" height="30">
          <div class="navbar-collapse collapse">
            <ul class="nav nav-justified">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
          <li><a href="reservation.html">Reservation</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="https://intranet.alxswe.com/">Connect with ALX</a></li>
              </ul>
            </div>
          <!-- nav -->
          <form  action="#" method="get" class="navbar-form pull-right" role="search">
            <div class="form-group">
              <input name="keyword" type="text" required="required" class="form-control" id="keyword" placeholder="Search">
              </div>
            <button type="submit" class="btn btn-default" name="Search">Go</button>
            <p>&nbsp;</p>
            </form>
        <div id="content">
        <h1>Admin Login!</h1>
        <table width="50%" cellspacing="5" cellpadding="5" align="center" bgcolor="#FFFFFF">
    
            <!-- html form -->
          <form action="reservation.php" method="get"><tbody>
      <tr>
        <td scope="col">Username</td>
      <td><input type="text" name="username" placeholder="Enter Your Username"></td>
        
      <tr>
        <td scope="col">Password</td>
      <td><input type="password" name="password" placeholder="Enter Your Password"></td>
        </td>
      </tr>
    <tr>	
      <td><button class="button button-block"/>Log In</button></td>		
      <td scope="col"></td>
    </tr>					
    </tbody>
  </form>
  </table>
    </div>
        <div class="navbar templatemo-nav" id="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
          </div>
        <div class="row" id="thumbnails_container"></div>
        <!-- thumbnail area -->
        </div>

    <!-- footer -->

        <footer class="container">
          <div class="credit row">
            <div class="col-md-6 col-md-offset-3">
              <div id="templatemo_footer">
                <p>&nbsp;</p>
                <p>Copyright © Jerinance 2023 </p>
              </div>
            </div>
            <div class="col-md-3">
              <div style="text-align: right">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>
        </footer>
        
      <!-- templatemo 393 fantasy -->
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/templatemo_script.js"></script>
  </body>
</html>
