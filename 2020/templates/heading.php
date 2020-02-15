
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-sno py-1">
	<div class="navbar-nav mr-auto ml-5">
      	<style>
			.page-heading{
				font-size: 28px;
			    font-weight: 400;
			}
		</style>
		<div class="pl-2 py-1">
			<h1 class="mb-0 text-dark page-heading" id="page-title">
				<?php echo $page_title; ?>
			</h1>
		</div>
    </div>
   	<div class="navbar-nav ml-auto mr-5">
		
	</div>
</nav> -->

<div class="row">
	<div class="col-md-12 text-center">
		<h2 class="gfont-raleway" id="page-title">
			<?php echo isset($custom_page_title) ? $custom_page_title : $page_title; ?>
		</h2>
		<!-- <hr style="border: 1.2px solid #ffc107; width: 8%;"> -->
		<p class="gfont-raleway lead">
			<?php echo $page_desc; ?>
		</p>
	</div>
</div>