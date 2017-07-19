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
       
        <div class="container-fluid" style="color: white;margin-top: 0px;margin-bottom:0px; ;background-image: url('images/2.png')  ;background-size: 100% 100%;background-repeat:no-repeat ">
        
            <div class=" table-striped  table-hover table-responsive " style="margin-top: 45px;">
                <div class="container-fluid" style="margin-top: 0px;margin-bottom:0px"><p style="text-align: center; color: white;margin-bottom: 0px;margin-top: 0px; font-size: 30px" > Welcome <?php echo $_SESSION['fname'].'!' ?></p></div>
                <table class="table" width="100%;" style="margin-top: 0px;margin-bottom:0px">
                <thead>
                    <tr>
                        <th width="1%">
                            S No.
                        </th>
                        
                        <th width="8%">
                            Branch
                        </th>
                        
                        <th width="3%">
                            Sem
                        </th>
                        
                        <th width="10%">
                            Subject
                        </th>
                        
                        
                        <th width="10%">
                            Book
                        </th>
                        
                        
                        <th width="8%">
                            Writer
                        </th>
                        
                        <th width="3%">
                            Edition
                        </th>
                        
                        <th width="7%">
                            Sell/<br>Buy
                        </th>
                        
                        <th width="10%">
                            Add <br>to Cart
                        </th>
                      
                        
                    </tr>
                </thead>
                <tbody>
                    
                    
                    <tr>
                        <td> <p class="btn btn-default">1.</p></td>
                        <td><input type="text" name="branch" class="btn btn-default" placeholder="Branch"></td>
                        <td><div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" name="sem" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             
                            </ul>
                            </div>
                        </td>
    
                        <td><input type="text" class="btn btn-default" name="subject" placeholder="Subject"></td>
                        <td><input type="text" class="btn btn-default" name="book" placeholder="Book"></td>
                        <td><input type="text" class="btn btn-default" name="writer" placeholder="Writer"></td>
                        <td><div class="dropdown ">
                                <button class="btn btn-default dropdown-toggle" type="button" name="edition" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             <li><a >15</a></li>
                            </ul>
                            </div>
                        </td>
                        <td><p style="font-size: 12px">
                    <input type="radio" name="sb" value="B" checked  ><b> Buy</b><br>
                    <input  type="radio" name="sb" value="S" > <b>Sell</b></p></td>
                        <td> <input type="checkbox" name="adcart" value="Y"  ></td>
                    </tr>
                    
                    
                    <tr>
                        <td> <p class="btn btn-default">2.</p></td>
                        <td><input type="text" name="branch" class="btn btn-default" placeholder="Branch"></td>
                        <td><div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" name="sem" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             
                            </ul>
                            </div>
                        </td>
    
                        <td><input type="text" class="btn btn-default" name="subject" placeholder="Subject"></td>
                        <td><input type="text" class="btn btn-default" name="book" placeholder="Book"></td>
                        <td><input type="text" class="btn btn-default" name="writer" placeholder="Writer"></td>
                        <td><div class="dropdown ">
                                <button class="btn btn-default dropdown-toggle" type="button" name="edition" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             <li><a >15</a></li>
                            </ul>
                            </div>
                        </td>
                        <td><p style="font-size: 12px">
                    <input type="radio" name="sb" value="B" checked  ><b> Buy</b><br>
                    <input  type="radio" name="sb" value="S" > <b>Sell</b></p></td>
                        <td> <input type="checkbox" name="adcart" value="Y"  ></td>
                    </tr>
                    
                    
                    <tr>
                        <td> <p class="btn btn-default">3.</p></td>
                        <td><input type="text" name="branch" class="btn btn-default" placeholder="Branch"></td>
                        <td><div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" name="sem" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             
                            </ul>
                            </div>
                        </td>
    
                        <td><input type="text" class="btn btn-default" name="subject" placeholder="Subject"></td>
                        <td><input type="text" class="btn btn-default" name="book" placeholder="Book"></td>
                        <td><input type="text" class="btn btn-default" name="writer" placeholder="Writer"></td>
                        <td><div class="dropdown ">
                                <button class="btn btn-default dropdown-toggle" type="button" name="edition" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             <li><a >15</a></li>
                            </ul>
                            </div>
                        </td>
                        <td><p style="font-size: 12px">
                    <input type="radio" name="sb" value="B" checked  ><b> Buy</b><br>
                    <input  type="radio" name="sb" value="S" > <b>Sell</b></p></td>
                        <td> <input type="checkbox" name="adcart" value="Y"  ></td>
                    </tr>
                    
                    
                    <tr>
                        <td> <p class="btn btn-default">4.</p></td>
                        <td><input type="text" name="branch" class="btn btn-default" placeholder="Branch"></td>
                        <td><div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" name="sem" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             
                            </ul>
                            </div>
                        </td>
    
                        <td><input type="text" class="btn btn-default" name="subject" placeholder="Subject"></td>
                        <td><input type="text" class="btn btn-default" name="book" placeholder="Book"></td>
                        <td><input type="text" class="btn btn-default" name="writer" placeholder="Writer"></td>
                        <td><div class="dropdown ">
                                <button class="btn btn-default dropdown-toggle" type="button" name="edition" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             <li><a >15</a></li>
                            </ul>
                            </div>
                        </td>
                        <td><p style="font-size: 12px">
                    <input type="radio" name="sb" value="B" checked  ><b> Buy</b><br>
                    <input  type="radio" name="sb" value="S" > <b>Sell</b></p></td>
                        <td> <input type="checkbox" name="adcart" value="Y"  ></td>
                    </tr>
                    
                    
                    <tr>
                        <td> <p class="btn btn-default">5.</p></td>
                        <td><input type="text" name="branch" class="btn btn-default" placeholder="Branch"></td>
                        <td><div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" name="sem" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             
                            </ul>
                            </div>
                        </td>
    
                        <td><input type="text" class="btn btn-default" name="subject" placeholder="Subject"></td>
                        <td><input type="text" class="btn btn-default" name="book" placeholder="Book"></td>
                        <td><input type="text" class="btn btn-default" name="writer" placeholder="Writer"></td>
                        <td><div class="dropdown ">
                                <button class="btn btn-default dropdown-toggle" type="button" name="edition" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             <li><a >15</a></li>
                            </ul>
                            </div>
                        </td>
                        <td><p style="font-size: 12px">
                    <input type="radio" name="sb" value="B" checked  ><b> Buy</b><br>
                    <input  type="radio" name="sb" value="S" > <b>Sell</b></p></td>
                        <td> <input type="checkbox" name="adcart" value="Y"  ></td>
                    </tr>
                    
                    
                    <tr>
                        <td> <p class="btn btn-default">6.</p></td>
                        <td><input type="text" name="branch" class="btn btn-default" placeholder="Branch"></td>
                        <td><div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" name="sem" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             
                            </ul>
                            </div>
                        </td>
    
                        <td><input type="text" class="btn btn-default" name="subject" placeholder="Subject"></td>
                        <td><input type="text" class="btn btn-default" name="book" placeholder="Book"></td>
                        <td><input type="text" class="btn btn-default" name="writer" placeholder="Writer"></td>
                        <td><div class="dropdown ">
                                <button class="btn btn-default dropdown-toggle" type="button" name="edition" data-toggle="dropdown">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                             <li><a >1</a></li>
                             <li><a >2</a></li>
                             <li><a >3</a></li>
                             <li><a >4</a></li>
                             <li><a >5</a></li>
                             <li><a >6</a></li>
                             <li><a >7</a></li>
                             <li><a >8</a></li>
                             <li><a >9</a></li>
                             <li><a >10</a></li>
                             <li><a >11</a></li>
                             <li><a >12</a></li>
                             <li><a >13</a></li>
                             <li><a >14</a></li>
                             <li><a >15</a></li>
                            </ul>
                            </div>
                        </td>
                        <td><p style="font-size: 12px">
                    <input type="radio" name="sb" value="B" checked  ><b> Buy</b><br>
                    <input  type="radio" name="sb" value="S" > <b>Sell</b></p></td>
                        <td> <input type="checkbox" name="adcart" value="Y"  ></td>
                    </tr>
                   
                    
                </tbody>
        
            
        
     
                
</table>
            <input style="margin-bottom:50px" type="submit" class="btn btn-primary btn-block">
        </div>
        </div>
     <footer>
            <?php
                include 'footer.php';
            ?>
     </footer>

    </body>
</html>
<tr>
                     