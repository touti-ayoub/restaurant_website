<?php
$servername = 'localhost';
$username = 'root';

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$people=$_POST['people'];
$message=$_POST['message'];


$conn = mysqli_connect($servername, $username);

if(!$conn)
{
die('Erreur : ' .mysqli_connect_error());
}
echo 'Connexion réussie <br>';

mysqli_select_db($conn,'la_casa_del_cibo');


$req="select * from booking where phone='$phone' and time='$time' and date='$date'";
$res=mysqli_query($conn,$req);

if (mysqli_num_rows($res)>0)
	echo"You have already reserved a table in this date.";
	else
	{
		$req2="insert into booking values ('$name','$email','$phone','$date','$time','$people','$message')";
		$result = mysqli_query($conn,$req2);
		echo"Done, thanks for your trust.";
		if(!$result){
			die("OOPPS! query failed".mysqli_error($conn)); 
		}
    }
?>