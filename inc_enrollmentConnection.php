
<!DOCTYPE html>
<html>
	<head>
		<title>UCM IQ Center </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<style>
			.top7 
		{ margin-top:100px; }
		  .ex1 {
    height: 200px;
    width: 500px;
    overflow-y: scroll;
}

  </style>
  <?php 
  	//Global variables for creating connection
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quiz";
	$connection = new mysqli($host, $username, $password, $dbname); 
	
	
	function runquery($sql){
		global $result, $connection, $row;
	
	//try to connect to db checking connection succeded or not
	if($connection->errno){
		echo "connection failed: error details::".$connection->errno."<br>";
		die ($connection->error);
	}//connect check
	//try to insert data , now that you know connection succeded.
	try{
		//run inser query:
		if ($result=$connection-> query($sql)){
			//query succeded
		}else{
			echo "failed";
		}
	}catch(Exception $e){
	echo ("Error:".$e->getMessage());
	}//end try catch
			 
	}//end fun
	
	
	
	function readFeed(){
		$feedbackFile= "feedback.txt";
		if(file_exists($feedbackFile)){
			$feedbackText= (file_get_contents($feedbackFile));
			$feedArray = explode("::",($feedbackText));
			foreach($feedArray as $feedback){
				echo "<p>".stripslashes($feedback)."</p>";
			}
		}else{
				echo 'No Feedback Yet';
			}
		}
		
		
	function writeFeed(){
		if (isset ($_POST['submit'])){
				if(empty($_POST['feedback'])){
					echo "Looks empty, Enter some text";
				}else{
					$feed = addslashes($_POST['feedback']); 
					//creating file handling using fopen() method_exists
					$feedFile = fopen("feedback.txt","a+");
					// a+ for appending the file
					//fopen() returns a file pointer resource on success, or false on error
					if(is_writable("feedback.txt")){
						if(fwrite($feedFile,$feed."::"."\n")){
							echo "Thankyou for your valuable feedback";
							$_POST = array();
						}else{
							echo "unable to add your feedback";
						     }
					}else{
						echo "cannot write to the file";
						fclose($commentsFile);
					     }
				}
			}
	}
	
	
	
	function updateForm(){
		 if(isset($_POST['submission'])) {
				    if($_POST['id'] != ""){
					   if(is_numeric($_POST['id'])){
				        $sql = "UPDATE user SET course= '". $_POST['course'] ."'  WHERE id= '". $_POST['id'] ."';";
                         runQuery($sql);
					     echo '<script >
					     window.alert("you are enrolled in the course successfully");</script>';
				        }else{
					          echo  '<script>
					          window.alert("Entered value is not a number");</script>';
				              }
				    }else{
					 echo '<script>window.alert("you havent entered any value");</script>';
				        }//if id empty display enter a valid Number
			    }// end isset post	
	}
  
  ?>
	</head>
	</html>
			
