<?php 
	$childsName = $_POST['Childs_First_Name'].' '.$_POST['Childs_Surname'];
	$dateOfBirth = $_POST['Date_Of_Birth_Day'].'/'.$_POST['Date_Of_Birth_Month'].'/'.$_POST['Date_Of_Birth_Year'];
	$gender = $_POST['Gender'];
	$address = $_POST['Address_Line_One'].",".$_POST['Address_Line_Two'].",".$_POST['Town'].",".$_POST['County'].".".$_POST['Post_Code'];
	$contactNumber = $_POST['Contact_Phone_Number'];
	$contactName = $_POST['Contact_Name']." ".$_POST['Contact_Surname'];
	echo ($childsName);
		echo ($dateOfBirth);
			echo ($childsName);
				echo ($childsName);
					echo ($childsName);
	?>