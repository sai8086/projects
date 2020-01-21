<html>
    <body>
        <head>
            <title>BILLING</title>
            <link rel="stylesheet" href="bill.css" type="text/css">
</head>
        <form method="POST">
            <div class="bill">
            <br><input type="submit" name="place" style = color:white id="place"  value="place order"> <br>
            <input type="submit" name="cancel" style = color:white id="cancel" value ="cancel order">
</div>
</form>
</body>
</html>
<?php
$conn = pg_connect("host=localhost dbname=dish user=postgres password=sai");
session_start();
$k= $_SESSION['sai'];
$t="SELECT SUM (amount) AS total FROM orderlist WHERE mname='$k' ";
$result3 = pg_query($t); 
$sum1=pg_fetch_assoc($result3);
$jk=$sum1['total'];
//echo "<p align='center'><font color=black  size='45pt'>$jk</font></p>";
$q="SELECT dish FROM orderlist WHERE mname='$k' ";
$result = pg_query($q); 
while($rows=pg_fetch_assoc($result))
{
    $sum=$rows['dish'];
    $q1="SELECT COUNT(distinct dish) as pp FROM orderlist WHERE dish='$sum'";
    $result1= pg_query($q1); 
    $row1= pg_fetch_assoc($result1);
    $n=$row1['pp'];
    $q2="SELECT amount from orderlist where dish ='$sum'";
    $result2= pg_query($q2); 
    $row2= pg_fetch_assoc($result2);
    $n1=$row2['amount'];
    echo "<p class='ram'align='center'><font color=black  size='45pt'>$sum $n -Rs $n1</font></p>";
   
}
echo "<p align='center'><font color=black  size='45pt'>Total Rs. $jk</font></p>";
 if (isset($_POST["place"]))
{
        
    header("location:delivery.html");
    
 }
else if(isset($_POST["cancel"]))
{
    $c="delete from orderlist where mname='$k'";
    $res=pg_query($c);
header("location:home.php");
}
?>
