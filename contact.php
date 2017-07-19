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
        <title>Bookstore</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'bootstrap.php';  ?>
    </head>
    <body>
        <header>
            <?php include 'header.php'; ?>
        </header>
        
        <div class="container" style="margin-top: 70px">
            
            <div class="row">
                <div class="col-xs-6">
                     <h1>
                Call Us:
            </h1>
            <p>
            <ul>
                <li>For Technical Support: +91 </li>
                <li>For Technical Support: +91 </li>
                <li>For Technical Support: +91 </li>
            </ul>
            </p>
                    
                </div>
                
                <div class=" col-xs-6">
                    <h1>
                Mail Us:
            </h1>
            <p>
            <ul>
                <li>For Technical Support:  </li>
                <li>For Technical Support:  </li>
                <li>For Technical Support:  </li>
            </ul>
            </p>       
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