<!DOCTYPE html>
<?php 
	include 'db.php';
	date_default_timezone_set("Asia/Calcutta");
$date = date("h:i:s d-m-Y ");
?>	
<style>
	.fa{
	font-size: larger;
    color: green;
	}
	h2, p, label, th{
		font-family: cursive;
		color: green;
	}
	#wrap{
		    margin-top: 5em;
	}
</style>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Import Excel and send whatsapp auto message | +91-9911983098 | febtech.online</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">

		 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css">
<link rel="icon" href="https://selsdonprimary.files.wordpress.com/2019/11/580b57fcd9996e24bc43c543.png" type="image/gif" sizes="16x16">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body>    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
			
				<h2 style="color:white;text-align: center;">Import Excel (.CSV File) then auto send <i class="fa fa-whatsapp" aria-hidden="true"></i>Whatsapp message</a></h2>
				
			</div>
		</div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<input type="hidden" name="date" value="<?=$date;?>">
					<fieldset>
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
							<div class="col-lg-6">
								<label>1. Excel File format: .csv</label><br>
								<label>2. Only one collum in excel file (Mobile No.)</label>
								<br>
<!-- <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:150px;">
   <a class="a2a_button_facebook"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_facebook_messenger"></a>
<a class="a2a_button_google_gmail"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>
 -->
<center><a href="https://livetrafficfeed.com/website-counter" data-time="Asia%2FKolkata" data-root="0" id="LTF_counter_href">Traffic Count</a><script type="text/javascript" src="//cdn.livetrafficfeed.com/static/static-counter/live.v2.js"></script><noscript><a href="https://livetrafficfeed.com/website-counter">Traffic Count</a></noscript></center>

							</div>
							<div class="col-lg-6">
							<div class="form-group">
								<textarea type="text" name="head" ></textarea>
							</div>
							<div class="controls">
								<label>Image select</label>
								<input type="file" name="image" id="files" class="input-large">
								<span id="uploaded_image"></span>
							</div><br>
							<div class="controls">
							<label>Excel file(.csv)</label>
								<input type="file" name="file" id="file" class="input-large">
								<span id="uploaded_images"></span>
							</div><br>
												
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary ">Upload</button>
							</div>
						</div>
					</div>

					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
		

		<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
			<thead>
				  	<tr>
				  		<th>ID</th>
				  		<th>Image</th>
				  		<th>Message</th>
				  		<th>Mobile</th>
				  		<th>Date</th>
				  		<th><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</th>				 
				  	</tr>	
				  </thead>
			<?php
			$sn='1';
				$SQLSELECT = "SELECT * FROM subject ORDER BY id DESC";
				$result_set =  mysqli_query($conn, $SQLSELECT);
				while($row = mysqli_fetch_array($result_set))
				{
				?>
			
					<tr>
						<td><?php echo $sn++; ?></td>
						<td><a href="img/<?=$row['image'];?>"><img src="img/<?=$row['image'];?>" style="width:100px;"></a></td>
						<td><textarea><?php echo $row['head']; ?></textarea></td>
						<td><?php echo $row['mobile']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><i class="fa fa-check-circle"></i>&nbsp; Message send</td>

					</tr>
				<?php
				}
			?>
		</table>
	</div>

	</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
	</body>
</html>


  <script>
$(document).ready(function(){
 $(document).on('change', '#files', function(){
  var name = document.getElementById("files").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg','svg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("files").files[0]);
  var f = document.getElementById("files").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('files').files[0]);
   $.ajax({
    url:"upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
     // alert("successfully upload Click ( OK ) to submit");
     
    }
   });
  } 
 });
});
</script>


  <script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['csv']) == -1) 
  {
   alert("Invalid Excel File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 20000000)
  {
   alert("Excel File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_images').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_images').html(data);
     // alert("successfully upload Click ( OK ) to submit");
     
    }
   });
  } 
 });
});
</script>


<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>