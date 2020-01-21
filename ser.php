<html>
<title>
	MY PROJECT
</title>
	<head>
		 <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top" style="background-color: black">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> Desi Kitchen </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
    </ul>
    <form class="navbar-form navbar-right" method="POST">
      
<input type="text" name="ser">
<button class="glyphicon glyphicon-search"></button>

    </form>

  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://i1.wp.com/files.hungryforever.com/wp-content/uploads/2015/11/09182416/feature-image-gulab-jamun.jpg?resize=1075%2C605&ssl=1" alt="Los Angeles" style="width:100%;height:720px;margin-top:-60px;">
        <div class="carousel-caption">
        <h3>South Indian</h3>
       <a href="south.php"><button style="color: black; height: 50px; width: 100px;"> Click here </button></a>
      </div>
      </div>

      <div class="item">
        <img  src="https://i.pinimg.com/originals/50/ac/f3/50acf3da3313770a9d6e23a947ac59b7.jpg" alt="Chicago" style="width:100%; height:663px;">
        <div class="carousel-caption">
        <h3>INDIAN TADKA!!</h3>
        <a href="connect.php"><button style="color:black; height: 50px; width: 100px;"> Click here </button></a>
      </div>
      </div>
    
      <div class="item">
        <img src="https://52f073a67e89885d8c20-b113946b17b55222ad1df26d6703a42e.ssl.cf2.rackcdn.com/_800x1000_fit_center-center/chens-chinese-food.jpg" alt="New york" style="width:100%; height:705px;margin-top: -40px">
         <div class="carousel-caption">
        <h3>SPICY CHINEESE!!</h3>
        <a href='chinese.php'><button  style="color: black; height: 50px; width: 100px;"> Click here </button></a>
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</body>
</html>
  <?php
  $conn = pg_connect("host=localhost dbname=dish user=postgres password=sai");
   if(isset($_POST["ser"]))
  {
  
      session_start();
          $p = $_POST["ser"];
          if(strtolower($p)=="dosa"||strtolower($p)=="idili"||strtolower($p)=="pongal"||strtolower($p)=="meals"||strtolower($p)=="utappa"||strtolower($p)=="parota")
          {
            
          echo "<script> location.href='south.php'; </script>";
          exit;
  
          }
          else if(strtolower($p)=="northindian"||strtolower($p)=="paneer")

        {
             echo "<script> location.href='connect.php'; </script>";
          exit;
        }
          
          else if (strtolower($p)=="chinese"||strtolower($p)=="noodles")
          {
              
              echo "<script> location.href='chinese.php'; </script>";
              exit;
          }
          else
          {
              echo "<h4> <sorry this dish isnt available</h4>"  ;      
          }
  
  
  }

      

