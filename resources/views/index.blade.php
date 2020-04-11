<?php
session_start();
?>

<html>

  <head>
    <title> Home | Yummy.com </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Yummy.com</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="home.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="feedback.php">Feedback</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="home.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-1 logo"><img src="images/logo.jpg"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Good Food is Good Mood</div>
    </div>
    <br>
    <!--<center><img src="images/orderimg.png" alt="image" height="50%"></center>-->
    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>
    <br>  <br>  <br>  <br>  <br>

     <div class="col-xs-12 line"><hr></div>

     <div class="paragraph1">
     <h1>Welcome to Yummy.com</h1>
   
    <p>
      Well whatever the shower love on us.</h4>
    </p>
    </div>
 
    <div class="col-xs-12 line"><hr></div>

   

    <div class="paragraph1">
     <h1>FOOD Court - Good Food is Good Mood</h1>
    <p><br> 
      <h4>
      Food Court will help in making your quest for enjoying good lunch, dinner which is are home delivered all the more interesting and excited when you are scartching your head to entertain your guest with their demands met.
      </h4>
    </p>
    <p>
      <h4>
        There are two ways you can <font color="green"><strong>order food online</strong></font> with us. <font color="green"><strong>Download Food Exploria app on your smartphone</strong></font> or open our user friendly website and get it home delivered. Or if you are busy in your schedule and just want to eat at leisure at home you can order takeaway from host of restaurants and pickup the food parcel kept ready for you while you are on the way to home.
      </h4>
    </p>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
          <h1>HOW TO ORDER?</h1>
          <p>
            <h4>
              All it takes is 3 easy steps:
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>SELECT YOUR CITY AND AREA OF DELIVERY</u>
            </h3>
          </p>
          <p>
            <h4>
              A list of restaurants is displayed that can deliver your food order to your home.
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>SELECT YOUR RESTAURANT</u>
            </h3>
          </p>
          <p>
            <h4>
              You select as per your choice of restaurant from the list serving <font color="green"><strong>cuisines like Italian, Chinese dishes, Hyderabadi, North Indian,</strong></font> Burgers or Desserts like Ice-cream or Cakes.
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>CHOOSE YOUR DISHES AND PAY ONLINE/OFFLINE</u>
            </h3>
          </p>
          <p>
            <h4>
              Once Restaurant is finalised then you browse the restaurants see its reviews, and then Menu. Click on the dishes you have been waiting to enjoy and they get added to the cart automatically.
            </h4>
          </p>
          <p>
            <h4>
              That’s all once everything is in order hit on the checkout and pays online or cash on delivery, choose the way you want we accept all major credit cards or pay cash on delivery. <font color="green"><strong>You can order food online in cities and areas like Mangalore, Chennai, Kerala and very soon in Mumbai, Bangalore and Pune.</strong></font>
            </h4>
          </p>
          <br>
          <p>
            <h4>
              Yes, Food  is another way to live life with our loved ones...
            </h4>
          </p>
      </div>


        <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
</body>
 <?php  include_once 'footer.php';?>
</html>