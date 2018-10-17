<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
  
        <title>ApAk-Purchase</title>
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
define('DB_HOST', 'localhost');
 define('DB_NAME', 'apak');
 define('DB_USER','root');
 define('DB_PASSWORD','');
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT * FROM orderinfo WHERE id='$_SESSION[id]'";
$result=$con->query($sql);
if($result->num_rows==0) 
{
    echo "<font size=40><center>Sorry...your cart is empty.!!</center><?font>";
}
else
{
$sql2="INSERT INTO `payment`(`id`,`tprice`,`discount`,`fprice`) 
VALUES ('$_SESSION[id]','$_SESSION[tprice]','$_SESSION[dis]','$_SESSION[fprice]')";
$res2=$con->query($sql2);

    while($row = mysqli_fetch_array($result)) {
   $sql1="INSERT into `ordereditems`(`id`, `item_id`,`quantity`)
VALUES ('$_SESSION[id]','$row[item_id]','$row[quantity]')";
$res1=$con->query($sql1);
}

?>
<h1>DEAR USER,</h1>
<h2>Your orders have been placed.It will be delivered within next 12-24 working hours.</h2>
<h3>Hope you enjoyed shopping at ApAk.Visit us again.</h3>
<h4>Please dont forget to logout before leaving.</h4>


<?php

$sql="SELECT * FROM user where id=$_SESSION[id]";
$result=$con->query($sql);
if($result->num_rows>0)
{
while($row = mysqli_fetch_array($result)) {
  
   ?> <h1>The items will be delivered to,</h1><table>
 <tr><td><b>NAME:</b></td><td><?php   echo $row["user_name"];?></td></tr><br>
  <tr><td><b>CONTACT NO.:</b></td><td><?php echo $row["user_phone"];?></td></tr><br>
  <tr><td><b>ADDRESS:</b></td><td><?php echo $row["street"];?></td></tr><br>
   <tr><td></td> <td><?php  echo $row["city"];?></td></tr><br>  
   <tr><td></td><td><?php  echo $row["state"]; ?></td></tr><br> 
     <tr><td></td><td><?php echo $row["pincode"]; ?></td></tr><br> 
   
</table>
    <?php
    
    }

  }
}
$con->close();
?>
</body>
</html>