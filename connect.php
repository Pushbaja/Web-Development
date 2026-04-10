<?php
$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["g"];
$d=$_POST["t"];
$e=$_POST["d"];
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,'wonderla');
$sql=("insert into register(n,a,g,t,d) values('$a','$b','$c','$d','$e')");
mysqli_query($con,$sql);
echo("THANKS FOR BOOKING!!!!");
include("register.php");
mysqli_close($con);
?>

