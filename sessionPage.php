<?php
session_start();// This will start thhe session.

if(isset($_POST['startquiz']))
{
	//only session handling here. All the variables are stored in the session to use further.
	//All thhe variables POST submission are stored here so that even if the page load data is not lost.

	$_SESSION['studentID'] = $_POST['studentID'];
	$_SESSION['firstName'] = $_POST['firstName'];
	$_SESSION['lastName'] = $_POST['lastName'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['question_count'] = 1;
	$_SESSION['question_result'] = 0;
	if(is_numeric($_POST['studentID'])){
		//student ID is valid
		if(ctype_alpha(trim($_POST['firstName']))){ 
			//first name valid
				 if(ctype_alpha($_POST['lastName'])){
					//lastname valid
		 			 if(is_numeric($_POST['age'])){ 
						//age valid
							include('inc_databaseConnect.php'); 
						}else{
							 echo '<script >
								window.alert("age must be integer. Please submit the form again.");</script>';
								include('homePage.php');
							}//end if/else for age.
					}else{
						 echo '<script >
							window.alert("please enter a valid last name and submit the form again.");</script>';
							 include('homePage.php');
						 }//end if/else for last name.
			}else{
				 echo '<script >
					window.alert("please enter a valid first name and submit the form again.");</script>';
					include('homePage.php');
					 }//end if/else for first name.
		}else{
			echo '<script >
			window.alert("please enter a valid Integer in Id field and submit the form again.");</script>';
			include('homePage.php');
		 }//end if/else for student id

	}else{
	include('inc_databaseConnect.php');
}//end if/else for session.		
			 
?>