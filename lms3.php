<?php

session_start();



$username=$_POST['nme'];
$pass=$_POST['psw'];

$username=stripcslashes($username);
$pass=stripcslashes($pass);

$username= mysql_real_escape_string($username);
$pass=mysql_real_escape_string($pass);

mysql_connect("localhost", "root","");
mysql_select_db("lms");




$result =  mysql_query("select * from st where ID= '$username' and password ='$pass'") or die ("Failed".mysql_error());

$row = mysql_fetch_array($result);
$url="http://localhost/lms/faculties.php";


if($row['ID']==$username && $row['password'] == $pass)
{
    _SESSION['status']=="Active";
    $_SESSION['login_std']=$username;
    header("Location:$url");
    
}

$result =  mysql_query("select * from lecturer where l_id= '$username' and l_password ='$pass'") or die ("Failed".mysql_error());
$row = mysql_fetch_array($result);
$lurl="http://localhost/lms/faculties_lec.php";

if($row['l_id']==$username && $row['l_password'] == $pass)

{
     $_SESSION['status']=="Active";
    $_SESSION['login_lec']=$username;
    header("Location:$lurl");
}

else
{
}



?>

