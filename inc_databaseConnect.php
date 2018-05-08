<!--
		created by Id: 700657837,700678947,700663385

-->

	<?php 
		include('inc_enrollmentConnection.php');
   	?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="main.css">
		<!--main.js -->
		<script type="text/javascript" src="homePage.js"></script>
	</head>
	<body>
         <!--Navigation bar -->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <a class="navbar-brand" href="homePage.php"><img src="image/logo.jpg" style="width: 120px;height: 85px;"> IQcenter</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                       <a class="nav-link" href="homePage.php ">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="inc_enrollmentPage.php">Enroll Course</a>
                    </li>
                   <li class="nav-item">
                      <a class="nav-link" href="articlePage.html">Articles</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="aboutUs.html">About Us</a>
                   </li>
      
                 </ul>
             </div>
         </nav>


<div class="container">
	<div class="row" id="nameJumbo">
       	<div class="col-lg-8">
            <div class="jumbotron" >
			  <?php
					//no need of credentials because of file included in top credentials
					
					$randomNumber=mt_rand(1,30);
					$question= "select Q_NO,Question,Option_1,Option_2,Option_3,Option_4 from questions where Q_No= $randomNumber";
					//$answer="select Answer from questions were Q_NO=$randomNumber";
					$Check_user="select count(id) as user_count, score as userCount from user where id = '".(@$_SESSION['studentID'])."' ";
					//To check if new user?		
					//check if it connected
					if($connection->errno){
						echo ("connection filed: Error Deatails:".$connection->errno ."<br>");
						die ($connection->error);
						//If error in connectiong then kill the conneciton
					}// end if
					try{
						if($user_count=$connection->query($Check_user)){
							//if count >0 that means user already exists or gave the exam.
							$isuser = $user_count->fetch_assoc();
							//echo $isuser['userCount'].'</br>';
							if(!empty($isuser['user_count'])){	
								//check if old user with id 
								echo 'You have already taken the test, click enroll now to check your score and enroll in the course to improve the score</br>';
								print("<a class='deletebtn' href='inc_enrollmentPage.php'/> enroll now ");// on click to enroll page
							}else{
								//if new user then go for the quiz
								//now connected : run the query
								if($result=$connection->query($question)){
									include("Questionsdisp.php");
								}else{
									throw new Exception("Fetch failed". $connection->error);
									}//end if else	
				
							}//end if-else query check
						}else{
							throw new Exception("checking user  failed". $connection->error);
						}//end if-else checking user			
					}catch(Exception $e)
						{
							die ("error".$e->getMessage());
						}//end try catch
					$connection->close();	
				?>			
			</div>
		</div>
	</div>
</div>

</body>
</html>