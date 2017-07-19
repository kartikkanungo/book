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
        <div class="container">
        <div class=" table-striped table-hover table-responsive " style="margin-top: 70px;">
            <table class="table">
                <caption>Cart </caption>
                <thead>
                    <tr>
                         <th>
                            S.No.
                        </th>
                        
                        <th>
                            Branch
                        </th>
                        
                        <th>
                            Semester
                        </th>
                        
                        <th>
                            Subject
                        </th>
                        
                        
                        <th>
                            Book
                        </th>
                        
                        
                        <th>
                            Writer
                        </th>
                        
                        <th>
                            S/B
                        </th>
                        
                        <th>
                            Price
                        </th>
                        
                        <th>
                            Remove <br>from Cart
                        </th>
                      
                        <th>
                            Order <br>Confirmation
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
        
            
        
     
        
</table>
        </div>
        </div>
     <footer>
            <?php
                include 'footer.php';
            ?>
     </footer>

    </body>
</html>
