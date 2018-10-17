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

</style>
    </head>
     <body style="background-color: white;background-color: white">
        <?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location:startpage.php");
}?>
         <div  id="parent" style="background-color: graytext" >
  
            <h1 style="text-align:center;font-size: 50pt"><img src="image/Picture1.bmp" alt="cart" height="100" width="100">
                ApAk
                </h1>
           
            
            <p class="small" style="text-align: center ;font-size: 20pt">
                    Adequate Products in A Kit
                </p>
           
<div id="ref" style="margin-right: 900px;margin-top: -30px">
            <button class="exit-btn exit-btn-2" onclick="myfunc01()">ACCOUNT</button>

                  <script>
            function myfunc01()
            {
                window.open("accinfo.php","_self");
           }</script></div>
              
         <div id="ref" style="margin-left: 900px;margin-top: -30px">
            <button class="exit-btn exit-btn-2" onclick="myfunc()">LOGOUT</button>
            
                  <script>
            function myfunc()
            {
                window.open("exit.php","_self");
           }
           </script>
         </div>
          <!--  <div  id="ref" style="margin-left: 1080px;margin-top: 50px;margin-right: 26px">
                <button class="exit-btn exit-btn-2" onclick="myfunc12()"> CART</button>
                  <script>
            function myfunc12()
            {
                window.open("cart.php");
           }
           </script>
                </div>
        -->
         <div id="nav">
    <center> <b style="font-size: 40px">CATEGORIES</b><br>
         
        <input style="background-color: purple;color: white; font-size: 35px " type="button" value="VEGETABLES" onclick="myfunc0()"/> <br>
        <script>
            function myfunc0(){
                window.open("vegies.php","_self");
           }
           </script>
        <input style="background-color: purple;color: white; font-size: 35px" type="button" value="FRUITS" onclick="myfunc1()"/> <br>
<script>
            function myfunc1(){
                window.open("fruits.php","_self");
           }
           </script>   
           <input style="background-color: purple;color: white; font-size: 35px" type="button" value="GRAINS" onclick="myfunc2()" /> <br>
<script>
            function myfunc2(){
                window.open("grains.php","_self");
           }
           </script>
         <input style="background-color: purple;color: white; font-size: 35px" type="button" value="TOILETRIES" onclick="myfunc3()"/> <br>
<script>
            function myfunc3(){
                window.open("toiletries.php","_self");
           }
           </script>
          <input style="background-color: purple;color: white; font-size: 35px" type="button" value="MEDICINES" onclick="myfunc4()"/> <br>
<script>
            function myfunc4(){
                window.open("medicines.php","_self");
           }
           </script>
    </center>
</div>

<div id="section">
    <center><H1 STYLE="font-size: 50px">YOUR CART ITEMS</H1></center><br>
<p>*cost in rupees and quantity in kg(s) or packet(s)</p>
<table border="1" width="670">
<tr>
<th>order_id</th>
<th>item_id</th>
<th>item_name</th>
<th>quantity</th>
<th>price</th>
</tr>
 <?php
 $tprice=0;
 $dis=0;
 $final_price=0;
 //session_start();
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'apak');
 define('DB_USER','root');
 define('DB_PASSWORD','');
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT * FROM orderinfo where id=$_SESSION[id]";
$result=$con->query($sql);
if ($result->num_rows==0)
 {
    echo "<font size= 40 ><center>Your cart is empty..!!!</center></font>";
}
if($result->num_rows>0)
{
while($row = mysqli_fetch_array($result)) {
  
    ?>
    <tr>
    <td><?php echo $row["order_id"]; ?></td>
    <td><?php echo $row["item_id"]; ?></td>
    <td><?php echo $row["item_name"]; ?></td>
    <td><?php echo $row["quantity"]; ?></td>
    <td><?php echo $row["total_price"]; ?></td>
    </tr>
    <?php
    $tprice=$tprice+$row["total_price"];
    
    
    }

  }


  $_SESSION["tprice"]=$tprice;


?>
</table>

<?php
if($tprice>=500){$dis=30;}
if($tprice>=1000){$dis=80;}
if($tprice>=2000){$dis=120;}
if($tprice>=5000){$dis=200;}
$final_price=$tprice-$dis;

$_SESSION["dis"]=$dis;
$_SESSION["fprice"]=$final_price;
?><font size="5">
<p>Total price=<?php echo $tprice;?></p>
<p>Discount=<?php echo $dis;?></p>
<p>TOTAL AMOUNT AFTER DISCOUNT=<?php echo $final_price;?></p></font>
  
<form action="endpage.php" method="post">
<input type="submit" value="BUY NOW">
</form>

<?php

$con->close();
?><br><br>------------------------------------------------------------------------------------------------------------------------------<br><br>
<p>If you wish to remove any item from cart..</p>
<form action="remove.php" method="post">

Enter the item_id:<input type="text" name="item_id" required>
<input type="submit" value="remove" >
</form>
<p><a href="terms.php">terms and conditons</a></p>
</div>
         <div id="right">
             <center> <p style="font-size: 20px">
                     <b>  FAST MOVING </b>
                     </p><br>
           
        </center>
             VEGETABLES<BR>  <a href="vegies.php"><img src="image/POTATO.jpg" width="308" height="164" alt="POTATO"/></a><br>
             ---------------------------------------------------------<br>
             FRUITS <BR> <a href="fruits.php"><img src="image/Apple.jpg" width="308" height="164" alt="Apple"/></a><br>
             ---------------------------------------------------------<br>
             MEDICINES <BR> <a href="medicines.php"><img src="image/crocin.jpg" width="308" height="164" alt="crocin"/></a>
             


    </div>



        </body>
      </html>