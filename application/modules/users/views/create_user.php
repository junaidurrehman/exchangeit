

<div id="signupbox" style="display: ''; margin-top: 50px"
	class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="panel-title">Sign Up</div>
			<div
				style="float: right; font-size: 85%; position: relative; top: -10px">
				<a id="signinlink" href="<?php echo base_url()?>users/login">Sign In</a>
			</div>
		</div>






		<div class="panel-body">
			<form method="post" action="<?php echo base_url()?>users/register" id="signupform"
				class="form-horizontal" role="form" enctype="multipart/form-data">

<div id="infoMessage"><?php echo $message;?></div>


				<div class="form-group">
					<label class="col-md-3 control-label">Email</label>
					<div class="col-md-9">
						<input type="email" value="<?php echo $email['value']?>" class="form-control" name="email"
							placeholder="Email Address">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label">Username</label>
					<div class="col-md-9">
						<input type="text" value="<?php echo $first_name['value']?>" class="form-control" name="first_name" required="required"
							placeholder="Username">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label">Password</label>
					<div class="col-md-9">
						<input type="password" value="<?php echo $password['value']?>" class="form-control" name="password" required="required"
							placeholder="Password">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-3 control-label">Confirm Password</label>
					<div class="col-md-9">
						<input type="password" value="<?php echo $password_confirm['value']?>" class="form-control" name="password_confirm" required="required"
							placeholder="Password">
					</div>
				</div>



				<div class="form-group">
					<!-- Button -->
					<div class="col-md-offset-3 col-md-9">
						<button id="btn-signup" type="submit" class="btn btn-info">
							<i class="icon-hand-right"></i> Sign Up
						</button>
						<span style="margin-left: 8px;">or</span>
					</div>
				</div>


				<div style="border-top: 1px solid #999; padding-top: 20px"
					class="form-group">

					<div class="col-md-offset-3 col-md-9">
						<button id="btn-fbsignup" type="button" class="btn btn-primary">
							<i class="icon-facebook"></i>   Sign Up with Facebook
						</button>
					</div>

				</div>





			</form>
		</div>
	</div>

</div>

