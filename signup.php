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
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'bootstrap.php';  ?>
        
    </head>
    <body>
        <header>
            <?php include 'header.php'; ?>
        </header>

        <div class="container-fluid" style="margin-top: 50px; margin-bottom: 20px">
            <div class="row">
            
                <div class="col-xs-8" style="margin-top: 5px;" >
                    <img class="img-responsive" width="100%" height="100%"src="images/signup.jpg" alt="Books">
                
            </div>
            
            
                <form class="col-xs-4 " method="POST" action="signupconfig.php">
                <h1>Sign Up</h1>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="fname" placeholder="First Name">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                
                <div class="form-group">
                    <input type="number" class="form-control" name="phone" placeholder="Contact Number">
                </div>
               
                <div class="form-group">
                    <input type="text" class="form-control" name="institute" placeholder="Institute">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="institute_id" placeholder="Institute-Id ">
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control"  name="pass" placeholder="Password"> 
                </div>
                
                        
                 <div class="form-group">
                    <input type="password" class="form-control"  name="npass" placeholder="Re-enter Password">
                       
                </div>
                        
                <input type="radio"  name="gender" value="M" checked> Male
                <input style="margin-left:  20px;"  type="radio" name="gender" value="F"> Female
                <input style="margin-left:  20px;" type="radio" name="gender" value="O" > Other<br><br>
                
                <input style="margin-bottom: 70px" class="btn btn-primary" type="submit">

            </form>   
        </div>
        </div>
            
        <footer>
            <?php
                include 'footer.php';
            ?>
        </footer>

    </body>
</html>
