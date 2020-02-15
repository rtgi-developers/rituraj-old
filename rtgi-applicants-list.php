<?php 
// Load database connection configurations
require_once($_SERVER['DOCUMENT_ROOT'].'/config/ConnString.php');
// Load email library
// require_once($_SERVER['DOCUMENT_ROOT'].'/lib/phpmailer/PHPMailerAutoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Candidate List | Rituraj Textile</title>
  	<link href="img/logo/favicon.png" rel="shortcut icon" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=" crossorigin="anonymous" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha256-ZT4HPpdCOt2lvDkXokHuhJfdOKSPFLzeAJik5U/Q+l4=" crossorigin="anonymous" >
  	<link rel="stylesheet" href="css/w3howto.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/dataTables.bootstrap.min.css" integrity="sha256-TihKTLoy3iBCO16p5bOOdNJiNbl+sUEYZlSZvMzaK6E=" crossorigin="anonymous" />
</head>
<body>
<div class="container">
   <!-- Brand logo -->
	<a class="navbar-brand" href="#">
	  <img src="img/logo/rtgi_logo.png" alt="Rituraj Logo" style="margin-top: -10px; width: 90px; height: 45px;">
	</a>
   <br>
   <!-- Page header -->
   <div class="page-header"><h3>Applicants List</h3></div>

   <!-- Page description -->
   <p>Below is the list of all applicants who applied for job in Riruraj Textile. You can download the resume of any candidate by clicking on download resume link.</p>
   
   <!-- Candidate tables list -->
   <?php 
      echo '
         <table class="table table-condensed table-hover table-striped" id="tblCandList">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Applied Date</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Action</th>
               </tr>
            </thead>
           <tbody>
      ';
      // Query to get candidate list from database
      $sql_get_cand = $conn->query("SELECT * FROM candidate") 
      or die("An error occured: ".$conn->error);

      // Loop through query result
   	while($row_get_cand = $sql_get_cand->fetch_array()){
   		echo '
   			<tr>
   				<td>'.$row_get_cand['cand_id'].'</td>
   				<td>'.$row_get_cand['cand_name'].'</td>
   				<td>'.$row_get_cand['cand_pos'].'</td>
   				<td>'.$row_get_cand['appl_date'].'</td>
   				<td>'.$row_get_cand['cand_email'].'</td>
   				<td>'.$row_get_cand['cand_mobile'].'</td>
   				<td>
                  <a href="process.php?candidateid='.$row_get_cand['cand_id'].'">Download Resume 
   				  <span class="glyphicon glyphicon-download-alt"></span></a>
               </td>
   			</tr>
   		';
   	}

      // Print table closing tags
      echo '</tbody></table>';
   ?>  

   <!-- Modal for privacy -->
   <div id="modPrivacy" class="modal fade" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h2 class="modal-title">Privacy Policy</h2>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body"><?php include('privacy.html'); ?></div>

            <!-- Modal footer -->
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal for terms -->
   <div id="modTerms" class="modal fade" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h2 class="modal-title">Terms &amp; Conditions</h2>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body"><?php include('terms.html'); ?></div>

            <!-- Modal footer -->
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">I Agree</button>
            </div>
         </div>
      </div>
   </div>	

</div>
<!-- javascript links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/1.2.1/bootstrap-filestyle.min.js" integrity="sha256-D9HtfjDqQvTcNZ9GzvTPh57clN8z8B6x53d1lI8LaJo=" crossorigin="anonymous"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTXJ8EHNl5nTitOHnHXUJWIDRvXd2KbKY&callback=initMap"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js" integrity="sha256-8G/BdtcUMWw3c6j5nBvVtzaoj3sq/kX6xNN2FQ0w0MY=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js" integrity="sha256-j007R7R6ijEWPa1df7FeJ6AFbQeww0xgif2SJWZOhHw=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/dataTables.bootstrap.min.js" integrity="sha256-X/58s5WblGMAw9SpDtqnV8dLRNCawsyGwNqnZD0Je/s=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {
	    $('#tblCandList').DataTable({
	    	"order": [[ 0, "desc" ]]
	    });
	});
</script>
</body>
<!-- Footer -->
<footer id="Footer">
   <div class="container">
      <div class="row" style="padding-top: 15px;">
         <div class="col-sm-6">
            <a href="" data-toggle="modal" data-target="#modPrivacy">Privacy</a>&nbsp;&nbsp;&nbsp;
            <a href="" data-toggle="modal" data-target="#modTerms">Site Terms</a>
         </div>
         <div class="col-sm-6 text-right">
            <p>&copy; 2017-<?php echo date('Y'); ?> Rituraj Textiles. All rights reserved.</p>
         </div>
      </div><!-- / .row -->
   </div><!-- / .container-fluid -->
</footer><!-- @End Footer -->
</html>

