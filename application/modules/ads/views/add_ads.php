
<?php
defined('BASEPATH')  or die('Restricted access'); ?>
<div class="container">
<div id="loginbox" style="margin-top: 50px;"
		class="mainbox col-md-7 col-md-offset-3 col-sm-8 col-sm-offset-2">
	
	<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">Post an ad!</div>
				<div
					style="float: right; font-size: 80%; position: relative; top: -10px">
				</div>
			</div>
			<div style="padding-top: 10px" class="panel-body">
			
		<form method="post" action="<?php echo base_url()?>ads/save_ads">
		<h3 style="color:blue">What you have ?</h3>
		
			<label >Select Category:-</label>
			<select class="form-control" name="category_id">
				<option value="" style="color:blue">Please select</option>
				<?php foreach($categories as $category){ ?>
				<option style="color:blue" value="<?php echo $category->id?>"><?php echo $category->name?></option>
				<?php }?>
			</select>
		<br>
		
			<label>Select Company:-</label>
			<select class="form-control" name="company_id">
				<option value="">Select company</option>
				<?php foreach($companies as $company){ ?>
				<option value="<?php echo $company->id?>"><?php echo $company->company_name?></option>
				<?php }?>
				
			</select>
			<br>
		<div class="form-inline">
		<div class="form-group">
			<label>Model Name</label>
			<input class="form-group" type="text" name="model">
		</div>
		
		<div class="form-group">
			<label>Select Condition</label>
			<select class="form-group" name="condition">
				<option value="">Select condition</option>
				<?php for ($counter=10; $counter>0;$counter--) {?>
				<option value="<?php echo $counter?>"><?php echo $counter?></option>
				<?php }?>
			</select>
		</div>
		</div>
		<br>
		
		<div class="form-group">
			<label>Item Value</label>
			<input class="fom-group" name="value" type="text">
		</div>
		
		<div class="form-group">
			<label>Item Image</label>
			<input class="fom-group" name="img" type="text">
		</div>
		
		<div class="form-group">
			<label>Description:</label><br>
			<textarea rows="3" class="fom-group" name="description" ></textarea>
		</div>
		
		
		
		<hr>
		<h2 style="color:blue">What you want ?</h2>
		<hr>
		<h3 style="color:orange">Prefrence 1</h3>
		
			<label >Select Category:-</label>
			<select class="form-control" name="want[0][want_category_id]">
				<option value="" style="color:blue">Please select</option>
				<?php foreach($categories as $category){ ?>
				<option style="color:blue" value="<?php echo $category->id?>"><?php echo $category->name?></option>
				<?php }?>
			</select>
		<br>
		
			<label>Select Company:-</label>
			<select class="form-control" name="want[0][want_company_id]">
				<option value="">Select company</option>
				<?php foreach($companies as $company){ ?>
				<option value="<?php echo $company->id?>"><?php echo $company->company_name?></option>
				<?php }?>
				
			</select>
			<br>
		<div class="form-inline">
		<div class="form-group">
			<label>Model Name</label>
			<input class="form-group" type="text" name="want[0][want_model]">
		</div>
		
		<div class="form-group">
			<label>Select Condition</label>
			<select class="form-group" name="want[0][want_condition]">
				<option>Select condition</option>
				<?php for ($counter=10; $counter>0;$counter--) {?>
				<option value="<?php echo $counter?>"><?php echo $counter?></option>
				<?php }?>
			</select>
		</div>
     </div>		<br>
		<div class="form-group">
			<label>Compensate Price:</label>
			<input class="form-group" type="text" name="want[0][want_compensate_value]">
		</div>	
	<div class="buying-selling-group" id="buying-selling-group" data-toggle="buttons">
        <label class="btn btn-default buying-selling">
            <input type="radio" name="want[0][want_will_give]" id="option1" value="yes" autocomplete="off">
            <span class="radio-dot"></span>
            <span class="buying-selling-word"> WILL TAKE</span>
        </label>
   
        <label class="btn btn-default buying-selling">
            <input type="radio" name="want[0][want_will_give]" id="option2" value="no" autocomplete="off">
            <span class="radio-dot"></span>
            <span class="buying-selling-word"> WILL GIVE</span>
        </label>
	
    
		</div>
		
		<hr>
		<h3 style="color:orange">Prefrence 2</h3>
		
			<label >Select Category:-</label>
			<select class="form-control" name="want[1][want_category_id]">
				<option value="" style="color:blue">Please select</option>
				<?php foreach($categories as $category){ ?>
				<option style="color:blue" value="<?php echo $category->id?>"><?php echo $category->name?></option>
				<?php }?>
			</select>
		<br>
		
			<label>Select Company:-</label>
			<select class="form-control" name="want[1][want_company_id]">
				<option value="">Select company</option>
				<?php foreach($companies as $company){ ?>
				<option value="<?php echo $company->id?>"><?php echo $company->company_name?></option>
				<?php }?>
				
			</select>
			<br>
		<div class="form-inline">
		<div class="form-group">
			<label>Model Name</label>
			<input class="form-group" type="text" name="want[1][want_model]">
		</div>
		
		<div class="form-group">
			<label>Select Condition</label>
			<select class="form-group" name="want[1][want_condition]">
				<option>Select condition</option>
				<?php for ($counter=10; $counter>0;$counter--) {?>
				<option value="<?php echo $counter?>"><?php echo $counter?></option>
				<?php }?>
			</select>
		</div>
     </div>		<br>
     <div class="form-group">
			<label>Compensate Price:</label>
			<input class="form-group" type="text" name="want[1][want_compensate_value]">
		</div>
		<div class="buying-selling-group" id="buying-selling-group" data-toggle="buttons">
	        <label class="btn btn-default buying-selling">
	            <input type="radio" name="want[1][want_will_give]" id="option1" value="yes" autocomplete="off">
	            <span class="radio-dot"></span>
	            <span class="buying-selling-word"> WILL TAKE</span>
	        </label>
	   
	        <label class="btn btn-default buying-selling">
	            <input type="radio" name="want[1][want_will_give]" id="option2" value="no" autocomplete="off">
	            <span class="radio-dot"></span>
	            <span class="buying-selling-word"> WILL GIVE</span>
	        </label>
		</div>
		<hr>
		<button class="btn btn-success">Submit</button>
	</form>
</div>
</div>
</div>
</div>
<br>
<br>

