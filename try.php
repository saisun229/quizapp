
 
<html lang="en">

 <?php
 
 $host ="localhost";
  $username ="root";
   $password ="";
    $dbname ="quiz";
 
 $connection = new mysqli($host,$username,$password,$dbname);
 
 function runquery($sql){
	 global $result, $connection;
	 if($connection->errno){
		echo "connection failed"; 
	 die (connection->error);
	 try{
		 if($resut=$connection->query($sql)){
			 
			echo "query succeeded";
		 }else {
			 echo "failed";
		 }
		
	 }catch(Exception $e){
			echo "Error:"$e->getMessage();
		}
	 }
 }
 
 
 
 
 function writeComments(){
	 if(isset ($_POST['submit'])){
		 if($_POST['comment']!==""){
			
			$x= addslashes($_POST['comment']);
			 $commentFile = fopen("commentFile.txt",a+);
			 if(is_writable($commentFile)){

					 if (fwrite($commentFile,$x."::"."\n")){
						 echo "suceessfull commented";
			 }else{
				 echo "not able to write ";
			 }
			 
		 }else{
			 echo"please enter something";
		 }
 }
 ?>
 <head>
   

  </head>

 <body>
 <form method="GET">
 <label>give any multiple number</label>
 <input type="text" name="multiple">
 <button name="submission" >submit</button>
 </form>
 <?php
 
 if(isset($_GET['submission'])){
	 
	$x= $_GET['multiple'];
    $y = array(1,2,3,4,5,6,7,8,9,10);
	
 foreach ($y as $multiplier){
echo $x;
echo '*';
echo $multiplier;
echo '=';
echo $x*$multiplier;
echo '</br>';

 }
 }
 ?>
 </body>
 
 </html>