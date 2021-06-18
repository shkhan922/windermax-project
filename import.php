<?php
include 'db.php';
include 'api.php';
extract($_POST);
if(isset($_POST["Import"])){
		
// $date=$_POST["date"];
// $head=$_POST["head"];
 $image=$_FILES["image"]["name"];

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	             
				send($emapData[0],$head,$image);
	    
	          //It wiil insert a row to our subject table from our csv file`
   $result = mysqli_query($conn,"INSERT into subject (`mobile`,`date`) values('$emapData[0]', '$date')");

$last_id = $conn->insert_id;

 $result = mysqli_query($conn,"UPDATE `subject` SET `head`='$head', `image`='$image' WHERE id='$last_id'");
	         //we are using mysql_query function. it returns a resource on true else False on error
	          // $result = , $sql );
	        
				if(!$result)	{

					echo "<script type=\"text/javascript\">
							alert(\"Message not send :Please try again.\");
							window.location = \"index.php\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"Message send successfully .\");
						window.location = \"index.php\"
					</script>";
	        
			 

			 //close of connection
			mysqli_close($conn); 
				
		 	
			
		 }
	}	 
?>