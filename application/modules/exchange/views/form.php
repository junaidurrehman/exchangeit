<?php  
	if (isset($ads))
    {
   		$page_title = $this->lang->line('CUSTOMERS_EDIT_CUSTOMER_PAGE_TITLE');
   		$action = 'update';
   		$ads_id = $ads->id;
   	}
   	else
   	{
//         $page_title = $this->lang->line('CUSTOMERS_ADD_CUSTOMER_PAGE_TITLE');
        $action = 'add';
        $ads_id = 0;
        
        $ads = new stdClass();
        
        $ads->id = 0;
        $ads->name = '';
        $ads->category_id = 0;
        $ads->user_id = $user_id;
        $ads->cat_option1 = 0;
        $ads->cat_option2 = 0;
        $ads->cat_option3 = 0;
        $ads->cat_option4 = 0;
        $ads->name_option1 = '';
        $ads->name_option2 = '';
        $ads->name_option3 = '';
        $ads->name_option4 = '';
        

   	} 
   	?>



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

			<div style="padding-top: 30px" class="panel-body">
    	
                 <?php echo form_open("exchange/save");?> 
				<!-- Form Name -->
					<legend>What you have</legend>

				<fieldset>
					<!-- this inline class will make category select and text box to be on same line/row -->
					<div class="form-inline">
						<label>Select Category:</label> 
						<?php 
						
						$options = array();
						$options[0] = 'Please select';
						foreach($categories as $cat){
							$options[$cat->id] = $cat->name;
						}
						
						
						echo form_dropdown('category_id', $options, $ads->category_id, 'id="category" style="color: blue"');
						
						?>
						
						<label>Product name:</label><input type="text"
							style="color: blue" placeholder="write here" name="name"
							value="<?php echo $ads->name ?>" />
					</div>
					

					<label>Description:</label><br />
					<textarea name="details" rows="5" cols="80" >
                      </textarea>
					<br /> <br /> <br /> 
					
					<label>choose an image to upload</label> <input
					type='file' onchange="readURL(this);" /> <br /> <img id="blah" name="image"
					src="#" alt="" />

                        <!-- File Button -->
<!-- 					<div class="form-group"> -->
<!-- 						<label class=" control-label" for="filebutton">Upload image</label> -->
<!-- 						<div class=""> -->
<!-- 							<input id="filebutton" name="filebutton" class="input-file" -->
<!-- 								type="file"> -->
<!-- 						</div> -->
<!-- 					</div> -->
					
					<br />

					<h2>What you want in exchange</h2>
					<br />

					<div class="form-inline">
						<label>Select Category:</label> 
						<?php 
						
						$options = array();
						$options[0] = 'Please select';
						foreach($categories as $cat){
							$options[$cat->id] = $cat->name;
						}
						
						
						echo form_dropdown('cat_option1', $options, $ads->cat_option1, 'id="category" style="color: blue"');
						
						?>
						
						<label>Product name:</label><input type="text"
							style="color: blue" placeholder="write here" name="name_option1"
							value="<?php echo $ads->name_option1 ?>" />
					</div>					

					  					<br />
					<div class="form-inline">
						<label>Select Category:</label> 
						<?php 
						
						$options = array();
						$options[0] = 'Please select';
						foreach($categories as $cat){
							$options[$cat->id] = $cat->name;
						}
						
						
						echo form_dropdown('cat_option2', $options, $ads->cat_option2, 'id="category" style="color: blue"');
						
						?>
						
						<label>Product name:</label><input type="text"
							style="color: blue" placeholder="write here" name="name_option2"
							value="<?php echo $ads->name_option2 ?>" />
					</div>					

					  					<br />
					<!-- Select Basic -->
															<div class="form-inline">
						<label>Select Category:</label> 
						<?php 
						
						$options = array();
						$options[0] = 'Please select';
						foreach($categories as $cat){
							$options[$cat->id] = $cat->name;
						}
						
						
						echo form_dropdown('cat_option3', $options, $ads->cat_option3, 'id="category" style="color: blue"');
						
						?>
						
						<label>Product name:</label><input type="text"
							style="color: blue" placeholder="write here" name="name_option3"
							value="<?php echo $ads->name_option3 ?>" />
					</div>					
					

					  					<br />
					<!-- Select Basic -->
													<div class="form-inline">
						<label>Select Category:</label> 
						<?php 
						
						$options = array();
						$options[0] = 'Please select';
						foreach($categories as $cat){
							$options[$cat->id] = $cat->name;
						}
						
						
						echo form_dropdown('cat_option4', $options, $ads->cat_option4, 'id="category" style="color: blue"');
						
						?>
						
						<label>Product name:</label><input type="text"
							style="color: blue" placeholder="write here" name="name_option4"
							value="<?php echo $ads->name_option4 ?>" />
					</div>					

					  	
                      	<br /> 
                      	 <input type="submit" class="btn btn-success"
						name="submit" value="submit">

				</fieldset>
     <?php
     echo form_hidden('user_id',  $ads->user_id);
     echo form_hidden('id', $ads_id);
     echo form_hidden('action', $action);
     echo form_close();?>
    </div>

		</div>
	</div>
</div>


