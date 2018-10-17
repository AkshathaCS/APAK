<html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
  
        <title>ApAk-Cart</title>
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
$qty=$_POST["qty"];
$item_id=$_POST["item_id"];
if($qty==0){echo "<font size= 40 ><center>inavalid quantity</center></font>";}
else if($qty>10){echo "<font size= 40 ><center>Sorry..the max limit is 10 units</center></font>";}
else
{
define('DB_HOST', 'localhost');
 define('DB_NAME', 'apak');
 define('DB_USER','root');
 define('DB_PASSWORD','');
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql1="SELECT * from item where item_id='$item_id'";
$result1=$con->query($sql1);

while($res1=$result1->fetch_assoc()){
$item_name =$res1["item_name"];
$price=$res1["price_unit"];
}
$total_price= $price * $qty;

$valid="SELECT * FROM orderinfo WHERE item_id = '$item_id'";
$result2=$con->query($valid);
if($result2->num_rows>0)
{
  $del="DELETE FROM orderinfo WHERE item_id='$item_id'";
  $con->query($del);
}

$sql2= "INSERT INTO `orderinfo`(`id`, `item_id`,`item_name`,`quantity`,`total_price` ) 
VALUES ('$_SESSION[id]','$item_id','$item_name','$qty','$total_price')";
if ($con->query($sql2) === TRUE)
  {
  	echo "<font size= 40 ><center>Item $item_name has been added to cart..go back to continue shopping.</center></font>";
   }
  $_SESSION["item_id"]=$item_id;
  $_SESSION["qty"]=$qty;
 $con->close();
 }
 ?>

