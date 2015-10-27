
<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide height1" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner imgheight" role="listbox">
		<div class="item active upper">


			<img class="first-slide picheight"
				src="<?php echo  base_url() ?>assets/images/web/hand.jpg"
				alt="First slide">
			<div class="container">
				<div class="carousel-caption settin">
					<h1 class='h11'>Welcome to Exchangeit</h1>
					<p>Here you can exchange your items with desired ones and if you
						dont have signed-up yet then below is the link to signup today and
						enjoy!</p>

					<p>
						<a class="btn btn-lg btn-primary" href="index.php?page=signup"
							role="button">Sign up Now</a>

					</p>

				</div>
			</div>
		</div>

		<div class="item">
			<img class="second-slide "
				src="<?php echo  base_url() ?>assets/images/web/barter1.png"
				alt="Second slide">
			<div class="container">
				<div class="carousel-caption settin">

					<p>
						<a class="learn btn btn-sm btn-info" href="#" role="button">Learn
							more</a>
					</p>
				</div>
			</div>
		</div>
		<div class="item">
			<img class="third-slide"
				src="<?php echo  base_url() ?>assets/images/web/barter.jpg"
				alt="Third slide">
			<div class="container">
				<div class="carousel-caption settin">
					<p>
						<a class="btn btn-sm btn-info" href="#" role="button">Browse
							gallery</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button"
		data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
		aria-hidden="true"></span> <span class="sr-only">Previous</span>
	</a> <a class="right carousel-control" href="#myCarousel" role="button"
		data-slide="next"> <span class="glyphicon glyphicon-chevron-right"
		aria-hidden="true"></span> <span class="sr-only">Next</span>
	</a>
</div>
<!-- end/.carousel -->
