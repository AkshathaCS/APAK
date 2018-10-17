<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
  
        <title>ApAk-Logout</title>
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
  $sql="DELETE  FROM orderinfo WHERE id='$_SESSION[id]'";
  $con->query($sql);
if($con->query($sql)==TRUE)
{
  echo "<font size=40><center>LOGOUT SUCCESSFUL..! <BR>THANKYOU.VISIT US AGAIN..!</center></font>";
}
$con->close();
session_unset();
?>
       
    </body>
</html>
 