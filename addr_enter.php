<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
            <link rel="stylesheet" type="text/css" href="styles.css">
  
        <style>
        box {<!--font-family: AR BONNIE-->;font-size: 30pt;color:black;text-align:center}
        </style>
        <title>ApAk-Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color: white ">
         <div style="background-color: graytext">
  
            <h1 style="text-align:center;font-size: 50pt"><img src="image/Picture1.bmp" alt="cart" height="100" width="100">
                ApAk
                </h1>
           
            
            <p class="small" style="text-align: center ;font-size: 20pt">
                    Adequate Products in A Kit
                </p>
           
        </div>
    <center style="font-size: 50pt;<!--font-family : AR BONNIE-->">CHANGE ADDRESS</center><br>
    <div>
        
        <box>
        <form  action="addr_action.php" method="post">
 <center>
    <table>
    
    <td>Street:</td>
    <td><input type="text" name="street" required><br></td>
    </tr>
    <tr>
    <td>City:</td>
    <td><input type="text" name="city" required><br></td>
    </tr>
    <tr>
    <td>State:</td>
    <td><input type="text" name="state" required><br></td>
    </tr>
    <tr>
    <td>Pincode:</td>
    <td><input type="number" name="pincode" required><br></td>
    </tr>
    
    </table></center>
   <input type="submit" value="change address">
               <!-- onclick="if(document.getElementById('user_phone').value.length!=10
                          && document.getElementById('pincode').value.length!=6)
                          {
                          alert('invalid phone number or pincode');
                          return false;
                          }"/>
       <button onclick="myfunc()">Submit</button>
        <script>
            function myfunc(){
                window.open("success.html");
            
            }
            </script>-->
          </form>
                       
        </box>
        
        
            </div>
    </body>
</html>
