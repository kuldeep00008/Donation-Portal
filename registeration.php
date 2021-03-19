<?php
session_start();

$host="localhost";
$uname="root";
$pas="";
$db_name="Donation_p_regitration";
$tbl_name="userdata";

$link = mysqli_connect("$host","$uname","$pas") or die ("cannot connect");
mysqli_select_db($link,'Donation_p_regitration');
	
//session_start();


//$con=mysqli_connect('localhost','root','@Kush1234')

//mysqli_select_db($con,'Donation_p_regitration');
if(isset($_POST['submit'])){
	$email =$_POST['user'];
	$pass=$_POST['password'];

	$s ="select * from userdata where email= '$email' ";

	$result= mysqli_query($link,$s);	

	$num= mysqli_num_rows($result);

	if($num==1){
		echo ("<script LANGUAGE='JavaScript'>
       		 alert('Email Id already taken!! please use another..');
		window.location.href='index.php';
       		</script>");
	}
	else{
		$register="insert into userdata(email,password) values ('$email', '$pass')";
		mysqli_query($link,$register);
		echo ("<script LANGUAGE='JavaScript'>
        		alert('Good job!.. registraion successful.. please login');
			window.location.href='index.php';
       		</script>");

		}
}

?>