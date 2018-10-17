<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
  
        <title>ApAk-ToiletCleaners</title>
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
    height:2500px;
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
    height:2500px;
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
           

              
         <div id="ref" style="margin-left: 900px;margin-top: -30px">
            <button class="exit-btn exit-btn-2" onclick="myfunc()">LOGOUT</button>
           
                  <script>
            function myfunc()
            {
                window.open("exit.php","_self");
           }
           </script>
         </div>  
                <div  id="ref" style="margin-left: 1080px;margin-top: 50px;margin-right: 26px">
                   <button class="exit-btn exit-btn-2" onclick="myfunc12()"> CART</button>
                  <script>
            function myfunc12()
            {
                window.open("cart.php","_self");
           }
           </script>
                </div>
         </div>
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

<center>     <div id="section" style="word-spacing: 50px;font-size: x-large">
             <center><H1 STYLE="font-size: 50px"><u>TOILET-CLEANERS</u></H1></center>
    <br><br>

         <b style="margin-left: 90px;">LIZOL</b>  <br><br>
         <img src="image/lizol.jpg" width="300" height="400" alt="lizol"/><br><br>
   <form  action="cart_entry.php" method="post">
 price:70
qty:<input type="number" name="qty" required/> 
<input type="submit" value="Add to cart" /><br>
item_id:<input type="text" name="item_id" value="57" size="1" readonly />
 </form>

 <br><br>------------------------------------------------------------------------------------<br><br>
         
          <b style="margin-left: 90px">HARPIC</b>  <br><br>
          <img src="image/HARPIC.jpg" width="300" height="400" alt="harpic"/><br><br>
   <form  action="cart_entry.php" method="post">
 price:65
qty:<input type="number" name="qty" required/> 
<input type="submit" value="Add to cart" /><br>
item_id:<input type="text" name="item_id" value="56" size="1" readonly />
 </form>
 <br><br>------------------------------------------------------------------------------------<br><br>
  <b style="margin-left: 90px">DOMEX</b> <br><br>
  <img src="image/Domex.JPG" width="300" height="400" alt="domex"/><br><br>
   <form  action="cart_entry.php" method="post">
 price:110
qty:<input type="number" name="qty" required/> 
<input type="submit" value="Add to cart" /><br>
item_id:<input type="text" name="item_id" value="55" size="1" readonly />
 </form>
<br><br>------------------------------------------------------------------------------------<br><br>
   <b style="margin-left: 90px">SANIFRESH</b><br><br>
   <img src="image/sanifresh.png" width="300" height="400" alt="sanifresh"/><br><br>
   <form  action="cart_entry.php" method="post">
 price:95
qty:<input type="number" name="qty" required/> 
<input type="submit" value="Add to cart" /><br>
item_id:<input type="text" name="item_id" value="58" size="1" readonly />
 </form>
 </div></center>
         
         
         
         
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

