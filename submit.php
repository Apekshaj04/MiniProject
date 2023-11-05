<?php
require 'functions.php';
require 'Records.php';
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$date=$_POST['date'];
echo '<h1>Congratulations ! On Your Successful Registration</h1>';echo '<br>';
// $rec=new Records($name,$email,$gender,$phone,$date);

$pdo=connectToDb();
// echo '<br>';
echo '<h2>Our Registered Customers :</h2> ';echo '<br>';    
echo '<br>';
insert($pdo,'records',$_POST);



selectAll($pdo,'records','Records');?>
<?php
// echo'<br>';
echo '<h2>Fill up one More form </h2>'?>
<a href="form.html">Back
    <br><br>


