<?php
session_start();
$id=$_SESSION['id'];
$dbc= mysqli_connect('localhost', 'root', '', 'books') or die(mysqli_error($dbc));

$branch= filter_input(INPUT_POST,'branch');
$semester=filter_input(INPUT_POST,'sem');
$subject=filter_input(INPUT_POST,'sub');
$book=filter_input(INPUT_POST,'book');
$writer=filter_input(INPUT_POST,'writer');
$edition=filter_input(INPUT_POST,'edition');
$fcolour=filter_input(INPUT_POST,'fcolour');
$sb=filter_input(INPUT_POST,'sb');


$qrs= "insert into books.form (customer_id,branch,sem,subject,bname,wname,edition,fcolour,sellorbuy)"
        . " values ('$id','$branch','$semester','$subject','$book','$writer','$edition','$fcolour','$sb')";

$run_que= mysqli_query($dbc,$qrs) or die(mysqli_error($dbc));

echo 'Order Placed Successfully';


?>
