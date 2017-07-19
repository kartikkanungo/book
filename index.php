<?php
include 'common.php';

if (isset($_SESSION['institute_id'])) {
    header('location:buysell.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>The ReadGram</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'bootstrap.php';  ?>
        <link rel="stylesheet" type="text/css" href="indexstyle.css">
    </head>
    <body>
        <header>
            <?php include 'header.php'; ?>
        </header>
        
        
      <!--  <div id="body" class="container"style="margin-top: 70px;background-image: url(images/1.jpeg);" >
            
           
                <div class="jumbotron" > 
                    <h1 style="text-align: center; font-size: 50px;">Welcome to Bookstore!</h1>
                    <p style="text-align: center">We will buy old, we will make it new and deliver it to you!</p>
                </div>
                
               
                <p style="text-align: center; font-size: 30px;"><a href="login.php" class="btn btn-success">Post your ad here!</a></p>
                <p style="text-align: center; font-size: 30px;"><a href="login.php" class="btn btn-primary">Buy books from here!</a></p>
            </div>
        </div
        -->
        <div class=" container-fluid content" style="background: url(images/6.jpg) center;background-repeat: no-repeat" >
            <div class="banner-image" style="margin-top: 40px">
                <div class="innerbannerimage"  >
                    <div class="bannercontent">
                    <h1 style="margin-bottom: 20px;">Welcome to The ReadGram!</h1>
                    <h2 style="margin-bottom: 30px">Sell or Buy books from here.</h2>
                    
                    <a class="button"  href="login.php"> Explore Now!</a>
                    </div>
                    
                    
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
