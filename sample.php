<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="signup.css" type="text/css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$conn = pg_connect("host=localhost dbname=dish user=postgres password=sai");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"]) or empty($_POST["email"]) or empty($_POST["address"]) or empty($_POST["phone"]) ) 
  {
    $nameErr = "please enter all the fields";
    
  } 

  else {
    $name = test_input($_POST["name"]);
    session_start();
    $name = $_POST["name"];
    $email = test_input($_POST["email"]);
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    if (!preg_match("/^[a-zA-Z ]*$/",$name) or !filter_var($email, FILTER_VALIDATE_EMAIL) or !preg_match("/^[0-9]{10}+$/", $phone))
    
  {
    echo "please enter the fields properly";
   
  }
   else{
       
       $_SESSION['sai'] = $name;
       $k= $_SESSION['sai'] ;
       $l="SELECT COUNT(mname) AS  pp FROM dets WHERE mname='$k'";
       $result1= pg_query($l); 
       $row1= pg_fetch_assoc($result1);
       $n=$row1['pp'];
       if($n>=1)
       {
         echo "the username already exsist please enter a new username";
       }
       else
       {
      $q ="insert into dets (mname,address,email,phone) values ('$name','$email','$address','$phone')";
      $sql=pg_query($q);
      header('location:ser.php');
       }
   }    
  } 
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<form action = connect.php method="POST">
           Enter your name  <br><input type="text" placeholder="Enter Name" name="name" id="name">
          <br> Enter your address <br><input type="text" name ="address" placeholder="Enter Delivery address"id="add">
           <br>Enter your phone no <br><input type="text" placeholder="Enter mobile no "name="phone" id="phone">
           <br> Enter your email id <br><input type="text"placeholder="Enter Email" name="email" id="mail">
           <br> <input type="submit" name="submit" value="ok" id="submit">
       
</form>
<div class="header">
                        <a href="#default" class="logo">DESI KITCHEN </a>
                        
                        
</body>
</html>