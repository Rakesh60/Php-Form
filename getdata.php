<?php
$conn=mysqli_connect("localhost","root","","userdata")or die("Connection failed");
echo "<html><body bgcolor='red'></body></html>";
echo "<pre>";

var_dump($_POST);

echo "<h1>Successfully Submit</>";
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$addr=$_POST['address'];
$gender=$_POST['gender'];
$quali=$_POST['quali'];
$state=$_POST['state'];
$dob=$_POST['dob'];

$sql="INSERT INTO details(name,email,mobile,address,qualification,gender,state,dob) values('$name','$email',$mobile,'$addr','$gender','$quali','$state','$dob')";

mysqli_query($conn,$sql);




?>