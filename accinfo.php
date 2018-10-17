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


                <h1>YOUR ACCOUNT INFO</h1>
<div id="ref" style="margin-left: 900px;margin-top: -30px">
            <button class="exit-btn exit-btn-2" onclick="myfunc()">DELETE ACCOUNT</button>
            
                  <script>
            function myfunc()
            {
                window.open("delete.php","_self");
           }
           </script>
         </div>

 <?php
 
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'apak');
 define('DB_USER','root');
 define('DB_PASSWORD','');
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="SELECT * FROM user where id=$_SESSION[id]";
$result=$con->query($sql);
if($result->num_rows>0)
{
while($row = mysqli_fetch_array($result)) {
  
   ?> <table>
 <tr><td><b>NAME:</b></td><td><?php   echo $row["user_name"];?></td></tr><br>
  <tr><td><b>CONTACT NO.:</b></td><td><?php echo $row["user_phone"];?></td></tr><br>
  <tr><td><b>ADDRESS:</b></td><td><?php echo $row["street"];?></td></tr><br>
   <tr><td></td> <td><?php  echo $row["city"];?></td></tr><br>  
   <tr><td></td><td><?php  echo $row["state"]; ?></td></tr><br> 
     <tr><td></td><td><?php echo $row["pincode"]; ?></td></tr><br> 
   
</table>
<a href="addr_enter.php">Change address</a>
    <?php
    
    }

  }

$con->close();
?><br><br>------------------------------------------------------------------------------------------------------------------------------<br><br>
</div>
</body></style></head></html>