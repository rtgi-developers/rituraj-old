</div></div><!--Body main content wrapper -->
</div><!-- End top nav heading container-fluid -->
</body>

<footer class="text-center">
	<!-- Sitemaps -->
	<section class="py-5 bg-whitesmoke">
	    <div class="row align-middle mx-75">
	    	<!-- Products text -->
	        <div class="col-md-3 text-left">
	        	<div class="text-secondary font-weight-bolder pt-2 pb-3">ABOUT</div>
	        	<p class="text-justify">We manufacture a large number of value added product mix of Pillows, Bath, Table linens, Kitchen, and other Textiles along with Wooden items which are exported to different parts of world and are available for sale on <a href="https://www.amazon.in/s?me=AR6VYHAWXDE8&marketplaceID=A21TJRUUN4KGV">Amazon.in</a> or you can buy directly from our factory store.</p>
	    	</div>

	    	<!-- Company -->
	        <div class="col-md-2 text-left">
				<ul class="nav flex-column">
					<li class="nav-item">
				    	<a class="nav-link lea disabled font-weight-bolder" href="#" tabindex="-1" aria-disabled="true">COMPANY</a>
				  	</li>
					<li class="nav-item">
					    <a class="nav-link active" href="#">About us</a>
					</li>
				  	<li class="nav-item">
				    	<a class="nav-link" href="#">Products</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" href="#">Clients</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" href="#">Our Team</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" href="#">Gallery</a>
				  	</li>
				</ul>
	        </div>
	        <!-- Website -->
	        <div class="col-md-2 text-left">
				<ul class="nav flex-column">
					<li class="nav-item">
				    	<a class="nav-link lea disabled font-weight-bolder" href="#" tabindex="-1" aria-disabled="true">WEBSITE</a>
				  	</li>
					<li class="nav-item">
					    <a class="nav-link active" href="#">User Agreement</a>
					</li>
				  	<li class="nav-item">
				    	<a class="nav-link" href="#">Privacy Policy</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" href="#">Cookie Policy</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" href="#">Copyright Policy</a>
				  	</li>
				</ul>
	        </div>
	        <!-- Get In Touch -->
	        <div class="col-md-2 text-left">
				<ul class="nav flex-column">
					<li class="nav-item">
				    	<a class="nav-link lea disabled font-weight-bolder" href="#" tabindex="-1" aria-disabled="true">GET IN TOUCH</a>
				  	</li>
					<li class="nav-item">
					    <a class="nav-link active" href="#">Careers</a>
					</li>
				  	<li class="nav-item">
				    	<a class="nav-link" href="#">Contact us</a>
				  	</li>
				  	<li class="nav-item">
					  	<div class="nav-link text-secondary">
					    	<strong>Connect with us</strong><br>
						  	<a class="pr-3" href="#"><i class="fab fa-facebook-f"></i></a>
						  	<a class="pr-3" href="#"><i class="fas fa-envelope"></i></a>
						  	<a class="pr-3" href="#"><i class="fas fa-phone-alt"></i></a>
						 	<!-- 
						 	<a class="pr-3" href="#"><i class="fab fa-twitter"></i></a>
						  	<a class="pr-3" href="#"><i class="fab fa-pinterest-p"></i></a> -->
					    </div>
					</li>
					
				</ul>
	        </div>
	        <!-- Contacts -->
	        <div class="col-md-3 text-left">
				<ul class="nav flex-column">
					<li class="nav-item">
				    	<div class="nav-link text-secondary font-weight-bolder">CONTACTS</div>
				  	</li>
					<li class="nav-item">
					    <div class="nav-link text-secondary">
					    	<strong>Adrress</strong><br>
					    	<span>31B, Loni Road, Mohan Nagar,</span><br>
					    	<span>Ghaziabad, Uttar Pradesh 201007</span>
					    </div>
					</li>
				  	<li class="nav-item">
				    	<div class="nav-link text-secondary">
					    	<span><strong>Email: </strong><a href="mailto:info@rituraj.com">info@rituraj.com</a></span>
					    </div>
				  	</li>
				  	<li class="nav-item">
				    	<div class="nav-link text-secondary">
					    	<span><strong>Phone: </strong><a href="tel:+911204185100">+91-120-4185-100</a></span>
					    </div>
				  	</li>
				  	<li class="nav-item">
					  	<div class="nav-link text-secondary">
					    	<strong>We are open</strong><br>
					    	<span>Mon-Sat from 9am to 6pm</span>
					    </div>
					</li>
				</ul>
	        </div>
	    </div>
	</section>
	<!-- Copyright -->
	<section class="py-3">
		<div class="align-middle mx-75 clearfix">
	        <div class="float-left">
	        	&copy; <?php echo date('Y').', '.$app_name; ?>
	        </div>
	        <div class="float-right">
	        	Designed and developed by <a href="mailto:developers@rituraj.com">RTGI Developers</a>
	        </div>
	    </div>
	</section>
</footer>

</html>
<script>
	$(document).ready(function(){
		$('.menu-nav-item').each(function(){
			var pageTitleClient = $(this).text();
			var pageTitleServer = "<?php echo $page_title; ?>";
			if(pageTitleServer == pageTitleClient)
			{
				$(this).addClass('text-info font-weight-bold border-bottom border-warning border-thick-2');
			}
		});
	});
</script>


