<?php
 require 'common.php';
$dbc= mysqli_connect('localhost', 'root', '', 'books') or die(mysqli_error($dbc));

$fname= filter_input(INPUT_POST,'fname' );
$lname=filter_input(INPUT_POST,'lname');
$email=filter_input(INPUT_POST,'email' );
$phone=filter_input(INPUT_POST,'phone');
$institute=filter_input(INPUT_POST,'institute');
$institute_id=filter_input(INPUT_POST,'institute_id');
$pass=filter_input(INPUT_POST,'pass');
$npass=filter_input(INPUT_POST,'npass');
$gender=filter_input(INPUT_POST,'gender');

$sel_que="select email from books.users where email='$email' or phone='$phone' or institute_id='$institute_id'";
$sel_sub= mysqli_query($dbc, $sel_que) or die(mysqli_error($dbc));
$row1= mysqli_fetch_array($sel_sub);
if ($row1) {    echo 'data repeated';
    
}

else{
if($pass==$npass){
$pass= md5($pass);

$reg_que="insert into books.users (fname,lname,Gender,email,phone,institute,"
        . "institute_id,pass) values ('$fname','$lname','$gender','$email','$phone',"
        . "'$institute','$institute_id','$pass')";

$reg_sub= mysqli_query($dbc, $reg_que) or die(mysqli_error($dbc));





header('location:logout.php ');

}
 else {
    echo 'reenter password';
}


}


?>