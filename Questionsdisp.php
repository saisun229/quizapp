<?php 

?>
	<div class="container">
		<div class="row" id="nameJumbo">
			<!-- Container is the parent class -->
		<div class="col-lg-8">
			<div class="jumbotron" >
				<h4>Don't refresh the page.</h4>		  
				<?php
				// storing user answer into session 
				//Check if next button or finish button in the form has been set. First time page load will not set the variables here.
				if(!empty($_POST['next_btn']) || !empty($_POST['finish_btn'])) {
					// store every answer into session to calculate result at last page
					$count = intval($_SESSION['question_count']); //conversion ti integer
					$_SESSION['question_count'] = ++$count; //pre increment and update the counter again in session variable.
		
		$sql_check = "select * from questions where Q_No = '".($_POST['qid'])."' and Answer = '".@$_POST['selectedOption']."' "; 
					//Here sql query is checking if the user selected answer matches with the database answer for the question.
					if($result_check=$connection->query($sql_check)){
						if($result_check->num_rows > 0){
							//if the result is not zero that means that is a match sp user has selected right option.So increment the score.
							$_SESSION['question_result']  = $_SESSION['question_result']?++$_SESSION['question_result']:1;
						}else{
							//do nothing
							}//end if-else
					}else{
							throw new Exception("Fetch failed". $connection->error);
							//if connection failed while fetching then throw the error.
					}//end if else
			
				}//end if
				//When the page loads first time.It directly comes here because none of the next and finish button were set.
				//Fetch the question and display on the page.	
				$myArray=$result->fetch_assoc();
				$question_counter = $_SESSION['question_count'];
				if( $question_counter <= 10){
					//display the question number with the random question from the database and increment the counter after displaying the question.
					print($question_counter++.')'.$myArray['Question']);
				?>
				</br>
				<form action='#' method='POST'><!-- Form to display the questions from Database-->
				<input name="qid" id="qid" type="hidden" value="<?php echo $myArray['Q_NO'];?>">
				<input type='radio' name='selectedOption' value='1'/><?php print($myArray['Option_1']);?></br>
				<input type='radio' name='selectedOption' value='2'/><?php print($myArray['Option_2']);?></br>
				<input type='radio' name='selectedOption' value='3'/><?php print($myArray['Option_3']);?></br>
				<input type='radio' name='selectedOption' value='4'/><?php print($myArray['Option_4']);?></br></br>
		
				<?php
					if($question_counter > 10){//if question number is more than 10 then display the finish button else display the else button and next button.
			?>
			<input type='submit' class="btn btn-danger" name="finish_btn" id='finish_btn' value='Finish>>'/> <!--when button clicked js executes-->
			<?php
		}
		else
		{
			?>
			<input class="btn btn-success" type='submit' name="next_btn" id='next_btn' value='next>>'/> <!--when button clicked js executes-->
			<?php
		}
		?>
		<!--<label id='cg'></label>-->
	</form>	
	<?php
}
else{
	//echo $_SESSION['studentID'].'</br>';
	//echo $_SESSION['email'].'</br>';
	echo 'Congratulations '.$_SESSION['firstName'] .' '.$_SESSION['lastName'].'</br>' ;
	echo "<br/>Total questions ".($_SESSION['question_count']-1);
	echo "<br/>Attempted Correct: ".$_SESSION['question_result'];
	echo  "<br/>Your Score is ".($_SESSION['question_result']*25).'</br>';

	$store_Result="INSERT INTO user(id, fname, lname, email, score, course) VALUES('".$_SESSION['studentID']."','".$_SESSION['firstName']."','".$_SESSION['lastName']."','".$_SESSION['email']."','".$_SESSION['question_result']."','Not selected');";
	//store the result into the user table.			
	try
	{
		if($connection->query($store_Result))
		{
			echo "Your result is updated in our records.You can now enroll the course or come back anytime and and enroll the course with your ID.";
			print("<a class='deletebtn' href='inc_enrollmentPage.php'/> enroll now ");
		}else
		{
			throw new Exception("insert failed". $connection->error);
		}//end if else
	}catch(Exception $e)
	{
		echo "Your test is now completed ,To improve the score Please click on Enroll to Enroll in the course</br>";
			
		//die ("error".$e->getMessage());
	}//end try-catch
}
?>
			
							

		</div>
		</div>
		</div>
		</div>


	


</body>
</html>









