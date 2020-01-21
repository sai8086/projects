<html>
        <head>
        <link rel="stylesheet" href="fs.css" type="text/css">
                
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
    <form  target='frame' method="POST">
   <img src="tamil.jpg" id="sai">
        <div class="dosa">
            <img id= "dosa" src="dosa.jpg" class="image"><br>
                <input type="submit" value="ADD"style = color:white ; name="adosa" id="adosa"><br>
                    <input type="submit" value="DELETE"style = color:white ; name="ddosa" id="ddosa">
                        <div class="middle">
                            <div class="text"> DOSA Rs.80</div>
                        </div>
                        </div>
        <div class="idli">
            <img id= "idli" src="idli.jpg" class="image"><br>
                <input type="submit" value="ADD" style = color:white ; name="aidli" id="aidli"><br>
                <input type="submit" value="DELETE"style = color:white ; name="didli" id="didli">
                <div class="middle">
                    <div class="text">IDILI Rs.60</div>
                </div>
        </div>

<div class="vada">
    <img id= "vada" src="vada.JPG" class="image"><br>
<input type="submit" value="ADD"style = color:white ; name="avada" id="avada"><br>
<input type="submit" value="DELETE"style = color:white ; name="dvada" id="dvada">
<div class="middle">
        <div class="text"> VADA 2pc Rs.40</div>
</div>
</div>

<div class="pongal">
        <img id= "pongal" src="pongal.JPG" class=image><br>
    <input type="submit" value="ADD" style = color:white ; name="apongal" id="apongal"><br>
    <input type="submit" value="DELETE" style = color:white ; name="dpongal" id="dvada">
    <div class="middle">
            <div class="text"> PONGAL Rs.90</div>
    </div>
    </div>

    <div class="meals">
            <img id= "pongal" src="meals2.JPG" class="image"><br>
        <input type="submit" value="ADD"style = color:white ;  name="ameal" id="apongal"><br>
        <input type="submit" value="DELETE"style = color:white ;  name="dmeal" id="dvada">
        <div class="middle">
                <div class="text"> MEALS Rs.200</div>
        </div>
        </div>

        <div class="parota">
                <img id= "parota" src="parota.jpg" class="image"><br>
            <input type="submit" value="ADD"style = color:white ;  name="aparota" id="aparota"><br>
            <input type="submit" value="DELETE" style = color:white ; name="dparota" id="dparota">
            <div class="middle">
                    <div class="text"> PAROTA 2 pc Rs.50</div>
            </div>
            </div>

            <div class="apam">
                    <img id= "apam" src="utt.jpg" class="image"><br>
                <input type="submit" value="ADD"style = color:white ;  name="aapam" id="avada"><br>
                <input type="submit" value="DELETE"style = color:white ;  name="dapam" id="dvada">
                <div class="middle">
                        <div class="text"> UTAPPA Rs.50</div>
                </div>
                </div>
               <form action="bill.php">
                <input type="button" value="Order" onclick="myfunc()" id="order"> 
                
</form>
                           
                
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
 if (isset($_POST["adosa"]))
{
    //$name=$_get["name"];
        $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Dosa','80')";
 $psql=pg_query($q);

}
else if(isset ($_POST["ddosa"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Dosa'";
    $psql=pg_query($q);
}
else if (isset($_POST["aidli"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Idli','60')";
 $psql=pg_query($q);
}
else if(isset ($_POST["didli"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Idli'";
    $psql=pg_query($q);
}
else if (isset($_POST["avada"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Vada','40')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dvada"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Vada'";
    $psql=pg_query($q);
}
else if (isset($_POST["apongal"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Pongal','90')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dpongal"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Pongal'";
    $psql=pg_query($q);
}
else if (isset($_POST["ameal"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Meals','200')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dmeal"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Meals'";
    $psql=pg_query($q);
}
else if (isset($_POST["aparota"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Parota','50')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dparota"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Parota'";
    $psql=pg_query($q);
}
else if (isset($_POST["aapam"]))
{
    //$name=$_get["name"];
    $q="INSERT INTO orderlist (mname,dish,amount)
 VALUES ((SELECT mname FROM dets WHERE mname='$k'),'Apam','50')";
 $psql=pg_query($q);
}
else if(isset ($_POST["dapam"]))
{
    $q="delete from orderlist where mname='$k' and dish ='Apam'";
    $psql=pg_query($q);
}

?>