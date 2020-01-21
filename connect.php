<html>
        <head>
        <link rel="stylesheet" href="nn.css" type="text/css">
                
    <title>
        southindian
    </title>
    <script>
        function myfunc()
{
   
    window.location.assign("bill.php");
    
    }
    </script>
    </head>
<body >
    <form target='frame' method="POST">
  

<div class="paneer">
        <img id= "paneer" src="https://i0.wp.com/vegecravings.com/wp-content/uploads/2017/04/paneer-butter-masala-recipe-step-by-step-instructions.jpg?fit=2592%2C1944&ssl=1" class="image"><br>
    <input type="submit" value="ADD" name="apaneer" id="avada"><br>
    <input type="submit" value="DELETE" name="dpaneer" id="dvada">
    <div class="middle">
        <div class="text"> PANEER BUTTER MASALA Rs.155</div>
</div>

</div>
<div class="mixedveg">
    <img id= "mixedveg" src="https://i0.wp.com/vegecravings.com/wp-content/uploads/2018/02/Mix-Veg-Recipe-Step-By-Step-Instructions.jpg?fit=2349%2C1944&ssl=1" class="image"><br>
<input type="submit" value="ADD" name="amixedveg" id="avada"><br>
<input type="submit" value="DELETE" name="dmixedveg" id="dvada">
<div class="middle">
        <div class="text">MIXED VEG Rs.150</div>
</div>

</div>

<div class="mushroom">
    <img id= "mushroom" src="https://www.vegrecipesofindia.com/wp-content/uploads/2016/02/kadai-mushroom-gravy-recipe-11.jpg" class="image"><br>
<input type="submit" value="ADD" name="amushroom" id="avada"><br>
<input type="submit" value="DELETE" name="dmushroom" id="dvada">
<div class="middle">
        <div class="text"> KADAI MUSHROOM GRAVY Rs.160</div>
</div>
</div>


<div class="vegkadai">
    <img id= "vegkadai" src="https://www.sanjeevkapoor.com/UploadFiles/RecipeImages/Kadai-Vegetables-KhaanaKhazana.jpg" class="image"><br>
<input type="submit" value="ADD" name="avegkadai" id="avada"><br>
<input type="submit" value="DELETE" name="dvegkadai" id="dvada">
<div class="middle">
        <div class="text"> KADAI VEG Rs.150</div>
</div>
</div>


   <div class="vegbiriyani">
        <img id= "vegbiriyani" src="https://i0.wp.com/vegecravings.com/wp-content/uploads/2016/07/veg-biryani-recipe-step-by-step-instructions.jpg?fit=3563%2C2976&ssl=1" class=image><br>
    <input type="submit" value="ADD" name="avegbiriyani" id="avada"><br>
    <input type="submit" value="DELETE" name="dvegbiriyani" id="dvada">
    <div class="middle">
            <div class="text"> VEG BIRIYANI Rs.220</div>
    </div>
    </div>
    
    <div class="babycorn">
            <img id= "pongal" src="https://www.yummytummyaarthi.com/wp-content/uploads/2014/12/1-43.jpg" class="image"><br>
        <input type="submit" value="ADD" name="ababycorn" id="avada"><br>
        <input type="submit" value="DELETE" name="dbabycorn" id="dvada">
        <div class="middle">
                <div class="text"> BABYCORN GRAVY Rs.180 </div>
        </div>
        </div>
        
    
    <div class="ppaneerbiriyani">
              <img id= "paneerbiriyani" src="https://pull-revisfoodography.netdna-ssl.com/wp-content/uploads/2017/01/paneer-biryani-1.jpg" class="image">
                <br>
            <input type="submit" value="ADD" name="apaneerbiriyani" id="avada"><br>
            <input type="submit" value="DELETE" name="dpaneerbiriyani" id="dvada">
            <div class="middle">
                    <div class="text"> PANEER BIRIYANI Rs.230</div>
            </div>
            </div>
            


            <div class="roti">
                    <img id= "apam" src="https://keyassets-p2.timeincuk.net/wp/prod/wp-content/uploads/sites/53/2019/09/Roti-1-1842x1212.jpg" class="image"><br>
                <input type="submit" value="ADD" name="aroti" id="avada"><br>
                <input type="submit" value="DELETE" name="droti" id="dvada">
                <div class="middle">
                        <div class="text">Butter ROTI Rs.35</div>
                </div>
                </div>

                 <div class="naan">
                    <img id= "apam" src="https://www.vegrecipesofindia.com/wp-content/uploads/2013/07/naan-recipe-2.jpg" class="image"><br>
                <input type="submit" value="ADD" name="anaan" id="avada"><br>
                <input type="submit" value="DELETE" name="dnaan" id="dvada">
                <div class="middle">
                        <div class="text">BUTTER NAAN Rs.55</div>
                </div>
                </div>
              
                <input type="button" value="Order" onclick="myfunc()"id="order">
                
                </form>
                <div class="header">
                        <a href="#default" class="logo">Desi Kitchen</a>
                        <div class="header-right">
                          <a class="active" href="#home">Home</a>
                          <a href="ser.php">Back</a>
                         
                        </div>

                        
 <iframe name="frame"></iframe>
</body>
</html>
<?php
$conn = pg_connect("host=localhost dbname=dish user=postgres password=sai");
session_start();
$k= $_SESSION['sai'];
 if (isset($_POST["apaneer"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Paneer butter Masala','155')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dpaneer"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Paneer Butter Masala'";
    $psql=pg_query($q);
}

//mixed vegetable

else if (isset($_POST["amixedveg"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM details WHERE mname='$k'),'Mixedveg','150')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dmixedveg"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Mixedveg'";
    $psql=pg_query($q);
}


//kadai mushroom gravy


else if (isset($_POST["amushroom"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Mushroom Gravy','160')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dmushroom"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Mushroom Gravy'";
    $psql=pg_query($q);
}


//veg kadai

else if (isset($_POST["avegkadai"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Vegkadai','150')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dvegkadai"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Vegkadai'";
    $psql=pg_query($q);
}



//vegbiriyani


else if (isset($_POST["avegbiriyani"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Biriyani','220')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dvegbiriyani"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Biriyani'";
    $psql=pg_query($q);
}

// babycorn

else if (isset($_POST["ababycorn"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Babycorn','180')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dbabycorn"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Babycorn'";
    $psql=pg_query($q);
}

// paneerbiriyani

else if (isset($_POST["apaneerbiriyani"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Paneer Biriyani','50')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dpaneerbiriyani"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Paneer Biriyani'";
    $psql=pg_query($q);
}

// roti

else if (isset($_POST["aroti"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Butter Roti','50')";
 $psql=pg_query($q);
}
else if(isset ($_POST["droti"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Butter roti'";
    $psql=pg_query($q);
}
else if (isset($_POST["anaan"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Butter naan','50')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dnaan"]))
{
    $q="delete from orderlist where mname='$k' and dish ='apam'";
    $psql=pg_query($q);
}


else if (isset($_POST["bill"]))
{
    //$name=$_get["name"];
    $q="SELECT SUM(amount) AS total FROM orderlist where mname='$k'";
     $result = pg_query($q); 
    $row = pg_fetch_assoc($result); 
    $sum = $row['total'];
    //echo "<p style=font-size:45px ;'color:red;'>".$sum."</p>";
    echo "<p align='center'> <font color=blue  size='45pt'>$sum</font> </p>";
}

else if (isset($_POST["bill"]))
{
    //$name=$_get["name"];
    $q="SELECT SUM(amount) AS total FROM orderlist where mname='$k'";
     $result = pg_query($q); 
    $row = pg_fetch_assoc($result); 
    $sum = $row['total'];
    //echo "<p style=font-size:45px ;'color:red;'>".$sum."</p>";
    echo "<p align='center'> <font color=blue  size='45pt'>$sum</font> </p>";
}

else if (isset($_POST["bill"]))
{
    //$name=$_get["name"];
    $q="SELECT SUM(amount) AS total FROM orderlist where mname='$k'";
     $result = pg_query($q); 
    $row = pg_fetch_assoc($result); 
    $sum = $row['total'];
    //echo "<p style=font-size:45px ;'color:red;'>".$sum."</p>";
    echo "<p align='center'> <font color=blue  size='45pt'>$sum</font> </p>";
}

?>
