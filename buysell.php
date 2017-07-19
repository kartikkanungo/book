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
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'bootstrap.php';  ?>
        
    </head>
    <body>
        <header>
            <?php include 'header.php'; ?>
        </header>

        <div class="container-fluid" style="margin-top: 50px;background-image: url('images/2.png')  ;background-size: 100% 100%;background-repeat:no-repeat ">
            <div class="row">
             
                <form class="col-xs-4 " method="POST" action="buysellconfig.php" style="margin-left: 45px">
                    <h1 style="color: white">Request Forum</h1>
                
                <p style="color: white;margin-top: 20px;margin-bottom: 0px;">
                    <input type="radio" name="sb" value="B" checked  > <b>Buy</b>
                    <input style="margin-left:  10px;" type="radio" name="sb" value="S" > <b>Sell</b></p>
                    
                    <div class="form-group" style="margin-top:10px">
                    <input type="text" class="form-control" name="branch" placeholder="Branch">
                </div>
                    
                
                
                <div class="form-group">
                    <input type="number" class="form-control" name="sem" placeholder="Semester">
                </div>
                
                
                <div class="form-group">
                    <input type="text" class="form-control" name="sub" placeholder="Subject">
                </div>

                
                <div class="form-group">
                    <input type="text" class="form-control" name="book" placeholder="Book">
                </div>
               
                <div class="form-group">
                    <input type="text" class="form-control" name="writer" placeholder="Writer">
                </div>
                
                <div class="form-group">
                    <input type="number" class="form-control" name="edition" placeholder="Edition">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="fcolour" placeholder="Front Page Colour">
                </div>
                 
                
                 <input class="btn btn-primary btn-block"style="margin-bottom: 70px"type="submit">

            </form> 
                
                
                <div class="col-xs-6 col-xs-offset-1" style="margin-top: 120px;margin-left: 90px;">
                <h1 style="color: white; margin-top: 5%;margin-left:30px; font-size: 50px"  >Hello</h1>                </h1>

             <h1 style="color: white; margin-top: 5%;margin-left:30px; font-size: 90px"><?php 
                    echo $_SESSION['fname'].'!';
                    ?></h1>
                </div>
        </div>
        </div>
            
        <footer>
            <?php
                include 'footer.php';
            ?>
        </footer>

    </body>
</html>



