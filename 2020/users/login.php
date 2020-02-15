<?php
// Prevent script access without system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Login';
$page_desc  = '';

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
require($app_root.'templates/flashmsg.php');
?>

<!-------------------------------------------------------------------------
| Page content
|------------------------------------------------------------------------->

<div class="container vertical-center-85 justify-content-center">
	<div class="col-md-4">
		<!-- OMS Logo -->
		<div class="text-center mb-2">
			<a href="#" class="navbar-brand text-dark">
				<img src="<?php echo $app_path.'assets/img/logo/oms-logo.png'; ?>" width="40" height="40" class="d-inline-block align-middle" alt="OMSLogo"> 
				<p class="lead font-weight-normal my-0">Login to OMS</p>
			</a>
		</div>

		<!-- Login form -->
		<div class="card shadow-sm">
			<div class="card-body">
				<h3 class="card-title"><?php echo $page_title; ?></h3>
				<div id="resLogin"></div>
				<form id="formLogin">
					<div class="form-group">
				    	<label for="txtUsername" class="font-weight-bold">Username</label>
				    	<input type="text" class="form-control" id="txtUsername" name="txtUsername" aria-describedby="txtUsernameHelp" placeholder="Enter username" required>
				    	<small id="txtUsernameHelp" class="form-text text-muted"> Enter username associated with your account.</small>
				  	</div>
				  	<div class="form-group">
				    	<label for="txtPassword" class="font-weight-bold">Password</label>
				    	<input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Enter password" required>
				  	</div>
				  	<div class="form-group">
				    	<input type="hidden" class="form-control" id="g-recaptcha-response" name="g-recaptcha-response">
				  	</div>
				  	<div class="form-group">	
				  		<button type="submit" name="btnLogin" id="btnLogin" class="btn btn-primary">Login</button>
				  	</div>
				  	<div class="form-group">
				  		<a href="/oms/apps/auth/ResetPass1" class="text-decoration-none">Forgot username or passowrd?</a>
				  	</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-------------------------------------------------------------------------
| Page footer
|------------------------------------------------------------------------->
<?php 
require($app_root.'templates/footer_outer.php');
require($app_root.'templates/footer.php'); 
?>

<!-- Google reCaptcha V3 API -->
<script src="https://www.google.com/recaptcha/api.js?render=6LcaTroUAAAAAIT5Vb00BgxcqrDWyIljTQ-sCvia"></script>
<script>
	grecaptcha.ready(function(){
	    grecaptcha.execute('6LcaTroUAAAAAIT5Vb00BgxcqrDWyIljTQ-sCvia', {action: 'login'})
	    .then(function(token)
	    {
	    	$('#g-recaptcha-response').val(token);
	    });
	});
</script>

<!-- Additional javascription -->
<script>
$(document).ready(function(){
	// Submit get import shipment form
	$('#formLogin').submit(function(event){
		// Prevent form default behaviour
		event.preventDefault();

		// Ajax request
		$.ajax({
			type: "post",
			url: "<?php  echo '/oms/v3/users/authenticate.php'; ?>",
			data: $('#formLogin').serialize()+"&btnLogin=",
			dataType: "json",
			beforeSend: function(){$('#loaderAjaxCall').show();},
			complete: function(){$('#loaderAjaxCall').hide();},
			success: function(response){
				if(response.success) $('#resLogin').html(response.data); // Success
				else $('#resLogin').html(response.data); // Failed
			}
		});
	});
});
</script>