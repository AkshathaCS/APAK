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
$uname=$_POST["user_name"];
$uphone=$_POST["user_phone"];
$street=$_POST["street"];
$city=$_POST["city"];
$state=$_POST["state"];
$pincode=$_POST["pincode"];
$password=$_POST["user_password"];

if( is_numeric($uname[0])){echo "<font size=30>invalid username</font>";}
else if(is_numeric($city[0])){echo "<font size=30>invalid city name</font>";}
else if(is_numeric($state[0])){echo "<font size=30>invalid state name</font>";}
else if(strlen($uphone)!=10 ){echo"<font size=30>invalid phone number</font>";}
//else if(($uphone[0])!=9 || ($uphone[0])!=8 || ($uphone[0])!=7){echo"<font size=30>invalid phone number</font>";}
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

$valid="SELECT * FROM user WHERE user_name = '$uname'";
$result=$con->query($valid);
if($result->num_rows>0)
{
	echo "<font size= 40 ><center>Username already exists..try with some other name.</center></font>";
 }

else
{
$sql = "INSERT INTO `user`(`user_name`, `user_phone`,`street`,`city`,`state`,`pincode`,`password` ) 
VALUES ('$uname','$uphone','$street','$city','$state','$pincode','$password')";
if ($con->query($sql) === TRUE)
  {
  	echo "<font size= 40 ><center>Account has been created successfully..!!</center></font>";
 $id1="SELECT id FROM user WHERE user_name='$uname'";
$id2=$con->query($id1);
if($id2->num_rows==1)
while($rowid= $id2->fetch_assoc())
$_SESSION["id"] =$rowid["id"];
  ?>
  <a href="home.php"><br><font size=5>
            <center>Click here to continue</center></font></a> 
<?php  
}
$con->close();
}
}
 ?>
 </body>
 </html>