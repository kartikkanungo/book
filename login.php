<?php
require 'common.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login BookStore</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'bootstrap.php';  ?>
    </head>
    <body style="margin-top: 80px;margin-bottom: 80px;background: url(images/login1.jpg) no-repeat center; background-size: 100%;">
        <header>
            <?php include 'header.php'; ?>
        </header>
        
        <div class="container "  >
            
                
                    
                        
                        
                           
                        
                        
                           
            <form method="post" class="col-xs-4" action="loginconfig.php" style="margin-top: 70px" >
                <h2><b style="color: whitesmoke">LOGIN</b></h2>
                <p style="color: white"><i><b>Login to buy or sell.</b></i></p>
            <div class="form-group"> 
                
                <input type="text" class="form-control" id="name" name="name" placeholder="Institute-Id">
            </div>
            
            <div class="form-group"> 
            
                <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
            </div>
                             <input type="checkbox"  value="1" name="rem"> <b style="color: black">Remember me</b><br>
                                <input style="margin-top: 2%;" class="btn btn-primary btn-block" type="submit" value="Login" name="login">
            
                                 <p style="margin-top: 5px; "><b>Don't have an account?<a href='signup.php'>Register</a></b></p>
            </form>
                        
                           
                            
                        </div>
                   
            
            
        
        
     <footer>
            <?php
                include 'footer.php';
            ?>
     </footer>

    </body>
</html>
