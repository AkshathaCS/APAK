<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
  
        <title>ApAk-Registered</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
#ref{
    float: right;
    
    position: absolute;
        top: 40px;
        right: 50px;
        
}

#parent
{
    width: 100%;
   /* position: relative;*/
    margin-top: -50px;
    height: 200px;
}
#header {
    background-color:graytext;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:50px;
    background-color:#eeeeee;
    height:600px;
    width:307px;
    float:left;
    padding:5px;        
}
#section {
    width:672px;
    float:left;
    padding:10px;    
} 
#right {
    line-height:10px;
    background-color:#eeeeee;
    height:600px;
    width:307px;
    float:left;
    padding:5px;
}

</style></head>
              <body style="background-color: white;background-color: white">
        
         <div  id="parent" style="background-color: graytext" >
  
            <h1 style="text-align:center;font-size: 50pt"><img src="image/Picture1.bmp" alt="cart" height="100" width="100">
                ApAk
                </h1>
           
            
            <p class="small" style="text-align: center ;font-size: 20pt">
                    Adequate Products in A Kit
                </p>
                </div>

<?php
session_start();

$street=$_POST["street"];
$city=$_POST["city"];
$state=$_POST["state"];
$pincode=$_POST["pincode"];


 if(is_numeric($city[0])){echo "<font size=30>invalid city name</font>";}
else if(is_numeric($state[0])){echo "<font size=30>invalid state name</font>";}
else if(strlen($pincode)!=6 ){echo"<font size=30>invalid pincode</font>";}

else{
define('DB_HOST', 'localhost');
 define('DB_NAME', 'apak');
 define('DB_USER','root');
 define('DB_PASSWORD','');
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="UPDATE user set street='$street',city='$city',state='$state',pincode='$pincode' where id='$_SESSION[id]'";
  $result=$con->query($sql);
  if($con->query($sql)==true)
  {
    echo"<font size=40><center>Account updated successfully</center></font>";
  }
}
$con->close();
?>
</body></style></head></html>