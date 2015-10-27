
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="icon" href="<?php echo base_url() ?>assets/images/web/icon.png">

<title>ExchangeIt</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo  base_url() ?>assets/css/bootstrap.css" rel="stylesheet">

<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<script src="<?php echo  base_url() ?>assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- Custom CSS's rather than bootstrap css -->
<link href="<?php echo  base_url() ?>assets/css/carousel.css" rel="stylesheet">
<link href="<?php echo  base_url() ?>assets/css/my.css" rel="stylesheet">
<link href="<?php echo  base_url() ?>assets/css/signin.css" rel="stylesheet">

<!-- -its for image uploaded in form.php -->
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type='text/javascript'>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

<!-- Optional theme -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->

<script
	src="<?php echo base_url() ?>assets/js/ie-emulation-modes-warning.js"></script>



</head>

<body>
	<div class="navbar-wrapper">
		<div class="container">

			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed"
							data-toggle="collapse" data-target="#navbar"
							aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span> <span
								class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>

						<a class="navbar-brand" href="#">Exchangeit</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo  base_url() ?>home">Home</a></li>

							<li><a href="#">Help</a></li>
							
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Categories <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Mobile and Tablets</a></li>
									<li><a href="#">Vehicles</a></li>
									<li><a href="#">Electronics</a></li>
									<li><a href="#">Laptops and Computers</a></li>
									<li><a href="#">Furniture</a></li>
									<li><a href="#">Books</a></li>
									<li><a href="#">Pets</a></li>
									<li><a href="#">Real Estate</a></li>
									<li><a href="#">Clothes</a></li>
									<li role="separator" class="divider"></li>
									<li class="dropdown-header">Other categories</li>
									<li><a href="#">shoes</a></li>
									<li><a href="#">Accessories</a></li>
								</ul></li>

						</ul>
						


						<ul class="nav navbar-nav navbar-right">
	<?php if($this->ion_auth->logged_in()) {?>					
							 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">My account  <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
            <li class="divider"></li>
            <li><a href="#">Favourites Snippets <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url()?>users/logout">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>

								<?php }?>
								
								
							<!-- when not log in or its admin then show signup button -->
                         <?php if(!$this->ion_auth->logged_in() || $this->ion_auth->is_admin()) {?>

						<li><a href="<?php echo  base_url() ?>users/register"><span
									class="glyphicon glyphicon-log-in"></span> Signup</a></li>

						<?php }?>
                          
									
									
							
						</ul>


						<!-- if not logged in then show login button -->
                       <?php if(!$this->ion_auth->logged_in()) {?>

						<a href="<?php echo base_url()?>users/login"
							class="pull-right btn btn-info navbar-btn"> <span
							class="glyphicon glyphicon-log-in"></span> Log-in
						</a>

						<?php }?>

                          <!-- if user will log in only then logout button will shown  -->
						<?php if($this->ion_auth->logged_in()) {?>

						<a href="<?php echo base_url()?>users/logout"
							class="pull-right btn btn-info navbar-btn"> <span
							class="glyphicon glyphicon-log-out"></span> Log out
						</a> <a href="<?php echo base_url()?>exchange" class="pull-right btn btn-success navbar-btn"> <span
							class="glyphicon glyphicon-plus"></span> Post an ad
						</a>
						   

						<?php }?>

                                  
                       

					</div>
				</div>

			</nav>
		</div>
	</div>