<!--
		created by Id: 700657837,700678947,700663385

-->
<!DOCTYPE html>
<html lang="en">
  <head>
     <link rel="stylesheet" type="text/css" href="main.css">
     <!-- This file includes bootstrap cdn and php connection/functions -->

     <?php include('inc_enrollmentConnection.php');?>
	 <script type= "text/javascript" src= "inc_enrollmentPage.js"></script>
    
     <!--main.js -->
     <script type="text/javascript" src="homePage.js"></script>
  </head>

  
  
  
<body>
    <!--navigation panel -->  
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#"><img src="image/logo.jpg" style="width: 120px;height: 85px;"> IQcenter</a>
		  
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
			 
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                       <li class="nav-item">
                           <a class="nav-link" href="homePage.php">Home <span class="sr-only">(current)</span></a>
                       </li>
                       <li class="nav-item active">
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




    <!-- page header-->

	<div class="container">
	<div class="jumbotron">

	     <h1>Got low score in IQ test? 	Want to improve your IQ?</h1>
	         <p>Dont worry,you are in right place. We are going to introduce you to the three best courses which will definetely help you to increase your IQ.
	            We also like to add many free courses in future.</p>	
	</div>
	</div>
	
	
	
	
	<!-- course enroll options-->
	
	<div class="container">
	      <br/><br/><br/>
	</div>
		
	<div class="container">
	   <div class="row">
            <div class="col-lg-4">
                <h4><label>Smarter Brain, Better Life: Brain Training and More</label></h4>
                <p class="text-danger"><label>course1</label></p>
                <p>Requirements:
                   The one prerequisite for this course is a desire to learn and a belief that you can train your brain.
                   Entreprenurs, Professionals and Students who would like to learn new skills at 10x the speed.</p>
				   
	                  <button type="submit"  class="btn btn-danger" id="course1">Enroll</button>
            </div>
            <div class="col-lg-4">
                <h4><label>Brain Training Courses for all the age groups and more</label></h4>
                <p class="text-danger"><label>course2</label></p>
                <p>To help you meet a personal goal, our scientists have designed a series of BrainHQ courses.
                   Each course includes the best exercises to help you sharpen and improve your performance in an activity that is important to you.</p>
				 
                       <button type="submit"  class="btn btn-danger"  id="course2"> Enroll</button>
            </div>
            <div class="col-lg-4">
                <h4><label>Improve your logical and critical thinking skills</label></h4>
                <p class="text-danger"><label>course3</label></p>
                <p> Identify common obstacles to effective thinking in this free online course and improve your skills.
                    Even though we’re called upon to use our critical and logical thinking skills all the time, most of us are not that good at it.</p>
   
                       <button type="submit" class="btn btn-danger"  id="course3">Enroll</button>
            </div>
        </div>
    </div></br>





<!-- update form which is used to enroll in course -->

    <div class="container" hidden id="hideform" >
        <div class= "top7"></div>

        <div class="row">
		    <div class="col-lg-8">
			
		        <h4 class="text-danger">***Submit to enroll in a course</h4>
				
			    <form method = "POST">
				
			    <div class="form-group">
			             <label  for="number"> 700idnumber:</label>
				         <input  name = "id" class="form-control" />
				         <label  for="text-white">Choose a course:</label>
				         <select name="course" class="form-control"  value="<?php if(isset($_POST['submission'])) { echo $_POST['course'];}?>"/>
                                <option   value="course1">course1</option>
                                <option   value="course2">course2</option>
                                <option   value="course3">course3</option>
                         </select><br><br>
					
				        <button type="submit" name="submission" class="btn btn-danger" >Submit</button>
				</div>
				
				                   <?php
			                       updateForm();
			                       ?>
			    </form>
			
			</div>
		</div>
	</div>
			
			
		
	<div class="container" >
		<div class="row">
		    <!-- Our top 10 IQ courses-->	
			<div class="col-lg-6">
			<div class= "top7"></div>
			    <h4 class="text-danger"> Our top 10 IQ scorers</h4>
				
			        <?php
					$sql = "SELECT * FROM user ORDER BY score desc limit 10";
					runquery($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
				            echo "<ol>";
                            while($row = $result->fetch_assoc()) {
                            echo "  <li><b>  Name:</b> " . $row["lname"]. "<b>    ID:</b>" . $row["id"]. " <b>   Score:</b>" . $row["score"]. "</li><br>";
                            }
                    }else{
                            echo "0 results";
                         }
						    echo "</ol>";
			        ?>
			</div>
			
			<!-- Our check back system for course enrollment and score-->	
			<div class="col-lg-6">
			<div class= "top7"></div>
			    <h4>Forgot your score? want to see in which courses you are enrolled?</h4>
				
			     <form method = "POST" action = "<?php echo $_SERVER[ "PHP_SELF"]; ?>"
			     <label> 700Number</label>
			     <input type = "number"  name = "id" class="form-control" /><br>
			
			     <button type="submit" name="idforgot" class="btn btn-danger">Submit</button>
			    </form>
			        <?php
			        if(isset($_POST['idforgot'])) {
					$sql = "SELECT * FROM user WHERE id='".$_POST['id']."';";
					runQuery($sql);
				        if ($result->num_rows > 0) {
                        // output data of each row
				        echo "<ol>";
                           while($row = $result->fetch_assoc()) {
                           echo "  <li><b>  Name:</b> " . $row["lname"]. "<b>    course:</b>" . $row["course"]. " <b>   Score:</b>" . $row["score"]. "</li><br>";
                           }
                    }else{
                     echo "No user with that 700 number";
                     }
				    echo "</ol>";	
			        }
			        ?>
					
			    <!-- Our feedback display-->			
			    <div class="top7">
			       <h4 class="text-justify" > Our Users FeedBack :)</h4>
				   <div class="ex1">
				   <?php 
			       echo "<p><ul>";
			       readFeed(); 
			       echo "</ul><p/>";
			       ?>
			    </div>
				</div>
			
			
			
			</div>
		</div>
	</div>
			
				
				
							
	<div class="container">
	<div class= "top7"></div>
	<div class="card bg-secondary text-white">
    <div class="card-body">
	    <!-- Our  user feedback form-->
	    <div class="row" >
	        <div class="form-group">
	        
	        <form method="POST">
			<label><h5>Your feedback is highly valuable, please say something here. You will be anonymous:)</h5></label><br><br>
			<input  type = "text"  name="feedback" class="form-control" /></br>
			<button type="submit" class="btn btn-danger" name="submit"/>submit</button>
		    </form>
	        </div>
		</div>
	    <div class="row">
            <p>
	        <?php
			writeFeed();
			?>
			</p>
		</div>
	</div>
    </div>
    </div>
 
 
			 
</body>
</html>