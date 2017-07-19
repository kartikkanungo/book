<?php 
if (isset($_POST['login'])) {
     

$user= filter_input(INPUT_POST,'name');
$code= filter_input(INPUT_POST,'password');
$rem=filter_input(INPUT_POST,'rem');
$code= md5($code);


$dbc= mysqli_connect("localhost","root","","books") or
        die(mysqli_error($dbc));
$que= "select * from books.users where institute_id='$user' and pass='$code'";
$result= mysqli_query($dbc, $que);
$num= mysqli_num_rows($result);
$row= mysqli_fetch_array($result);

if (isset($row['institute_id'])){    echo row['institute_id'];
    if (isset($rem)) {
        setcookie('firstname', '$fname');
        
    }
    echo 'Welcome';
        session_start();
        $_SESSION['institute_id']= $row['institute_id'];
        $_SESSION['fname']=$row['fname'];
        $_SESSION['id']= $row['id'];
        $_SESSION['institute']= $row['institute'];
        $_SESSION['lname']= $row['lname'];
        $_SESSION['email']= $row['email'];
        $_SESSION['phone']= $row['phone'];
        header("location:buysell.php");
    
}
    
    
    
}
 else {    echo 'failed';
    header('location:login.php');
}



?>