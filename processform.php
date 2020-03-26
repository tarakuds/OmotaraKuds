<?php
	
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$email=$_POST['email'];
	$dept = $_POST['departments'];
	$gender = $_POST['gender'];
	$msg = $_POST['message'];


	/*echo "$fname" . "<br/>" ;
	echo '$lname'. '<br/>';
	echo $email;
	echo $dept;
	echo $gender;
	echo $msg;*/


	$feedback = "<h2>Here are your details below</h2>";

	$feedback  .= "First Name: " . $fname ;    
    $feedback  .= "Last Name: " . $lname ;    
    $feedback  .= "Email: " . $email ;    
    $feedback  .= "Department: " . $dept ;    
    $feedback  .= "Gender: " . $gender;    
    $feedback  .= "Message: " . $msg ;


	$fp=fopen($fname, 'w') or die("unable to create file");
	fwrite($fp, $feedback);
	fclose($fp);

	echo "file upload complete. ";


	/*print_r($_POST);*/
?>

	