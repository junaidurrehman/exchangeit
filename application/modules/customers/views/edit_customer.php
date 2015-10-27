<?php echo form_open('customers/save_customer', array('name' => 'save-customer', 'id' => 'save-customer')); ?>
<div class="main-area-wraper">
	<?php $this->load->view("customer_buttons");
    if (isset($customer))
    {
   		$page_title = $this->lang->line('CUSTOMERS_EDIT_CUSTOMER_PAGE_TITLE');
   		$action = 'update';
   		$customer_id = $customer->id;
   	}
   	else
   	{
        $page_title = $this->lang->line('CUSTOMERS_ADD_CUSTOMER_PAGE_TITLE');
        $action = 'add';
        $customer_id = 0;
        
        $customer = new stdClass();
        
        $customer->id = 0;
        $customer->name = '';
        $customer->phone = '';
        $customer->address = '';
        $customer->zip = '';
   	} 
   	?>

   	<h1 class="title"><?php echo $page_title ?></h1>
	<div class="row">
		<div class="col-xs-12 col-lg-6 col-sm-6">
			<div class="form-group<?php if($error_fields['name']) echo ' has-error' ?>">
			<?php
				echo lang('CUSTOMERS_CUSTOMER_NAME_TEXT', 'name',
					array('class' => 'semibold'));
				$data = array(
	      			'name'			=> 'name',
	      			'id'			=> 'customer_name',
	      			'value'			=> isset($customer->name) ? $customer->name : set_value('name'),
	      			'class'			=> 'form-control',
		      	);
		      	echo form_input($data);
			?>
			</div>
			<div class="form-group">
			<?php
				echo lang('CUSTOMERS_CUSTOMER_PHONE_TEXT', 'phone',
					array('class' => 'semibold'));
				$data = array(
	      			'name'			=> 'phone',
	      			'id'			=> 'customer_phone',
	      			'value'			=> isset($customer->phone) ? $customer->phone : set_value('phone'),
	      			'class'			=> 'form-control',
		      	);
		      	echo form_input($data);
			?>
			</div>
			<div class="form-group">
			<?php
				echo lang('CUSTOMERS_CUSTOMER_ADDRESS_TEXT', 'address',
					array('class' => 'semibold'));
				$data = array(
	      			'name'			=> 'address',
	      			'id'			=> 'customer_address',
	      			'value'			=> isset($customer->address) ? $customer->address : set_value('address'),
	      			'class'			=> 'form-control',
		      	);
		      	echo form_textarea($data)
			?>
			</div>
			<div class="form-group">
			<?php
				echo lang('CUSTOMERS_CUSTOMER_ZIP_TEXT', 'zip',
					array('class' => 'semibold'));
				$data = array(
	      			'name'			=> 'zip',
	      			'id'			=> 'customer_zip',
	      			'value'			=> isset($customer->zip) ? $customer->zip : set_value('zip'),
	      			'class'			=> 'form-control',
		      	);
		      	echo form_input($data);
			?>
			</div>
			<div class="form-group">
			<?php
				echo lang('CUSTOMERS_CUSTOMER_REVIEWS_TEXT', 'reviews',
					array('class' => 'semibold'));
				$data = array(
	      			'name'		=> 'reviews',
	      			'id'		=> 'customer_reviews',
	      			'value'		=> isset($customer->reviews) ? $customer->reviews : set_value('reviews'),
	      			'class'		=> 'form-control',
		      	);
		      	echo form_input($data);
			?>
			</div>
			<div class="form-group">
			<?php
				echo lang('CUSTOMERS_CUSTOMER_REVIEWS_COMMENT_TEXT', 'reviews_comment',
					array('class' => 'semibold'));
				$data = array(
	      			'name'		=> 'reviews_comment',
	      			'id'		=> 'customer_reviews_comment',
	      			'value'		=> isset($customer->reviews_comment) ? $customer->reviews_comment : set_value('reviews_comment'),
	      			'class'		=> 'form-control',
		      	);
		      	echo form_textarea($data)
			?>
			</div>
    	</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-4 text-right">
			<input class="btn btn-blue" type="submit" name="submit" value="<?php echo $this->lang->line('SAVE')?>" />			
		</div>
	</div>
</div>
<?php 
echo form_hidden('id', $customer_id);
echo form_hidden('action', $action);
echo form_close(); 
?>	
