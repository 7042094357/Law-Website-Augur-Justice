<?php 
$fname='lastname.txt';
echo("hi")
$file = fopen("lastname.txt","r");
$lname=fread($file);
$lname=fgets($file);
$topic =$_POST['topic'];
$religion=$_POST['religion'];
$subject = $_POST['subject'];
$description = $_POST['descrptn'];
$output=Shell_exec("python3 surname.py '$lname' '$religion' '$description' ");
echo ($output); 
file_put_contents("lastname.txt","");
//fclose($fname);

?>
