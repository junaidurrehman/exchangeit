<div class="main-area-wraper">
	<?php $this->load->view("customer_buttons"); ?>
	
	<h1 class="title"><?php echo $this->lang->line('CUSTOMERS_CUSTOMERS_PAGE_TITLE'); ?></h1>
   
    <?php echo form_open('customers', array('name' => 'customers-filter', 'id' => 'customers-filter', 'class' => 'form-inline')); ?>
	
		<div class="form-group">
			<div class="input-group">
	      		<?php 
	      		$data = array(
      				'name'			=> 'filter_search',
      				'id'			=> 'filter_search',
      				'value'			=> $this->session->userdata('filter_search'),
      				'class'			=> 'form-control',
      				'placeholder' 	=> $this->lang->line('CUSTOMERS_SEARCH_BOX_TEXT')
	      		);
	      		echo form_input($data); ?>
	      		<span class="input-group-btn">
					<?php 
					$data = array(
							'name'		=> 'filter_submit',
							'id'		=> 'filter_submit',
							'content'	=> $this->lang->line('GO'),
							'class'		=> 'btn btn-blue',
							'type'		=> 'submit'
					);
					echo form_button($data) ?>
				</span>
	    	</div>
		</div>
		<div class="form-group">
		<?php 
		$data = array(
				'name'		=> 'filter_clear',
				'id'		=> 'filter_clear',
				'content'	=> $this->lang->line('CLEAR'),
				'class'		=> 'btn btn-blue',
		);
		echo form_button($data) ?>

		</div>
	<?php 
	echo form_close();
	$template = array(
			'table_open'            => '<table id="customersList" class="table table-striped">',
	
			'heading_cell_start'    => '<th class="table-title">',

	);
	
	$this->table->set_template($template);
	
	$this->table->set_heading(
			array(
					$this->lang->line('SR_NO'),
					$this->lang->line('CUSTOMERS_NAME_HEADING'),
					$this->lang->line('CUSTOMERS_PHONE_HEADING'),
					$this->lang->line('CUSTOMERS_ADDRESS_HEADING'),
					$this->lang->line('CUSTOMERS_ZIP_HEADING'),
					array('data' => $this->lang->line('CUSTOMERS_ACTIONS_HEADING'), 'class' => 'table-title text-center')
			)
	);
	
	if(count($customers) > 0)
	{
		$counter = 0;
		foreach($customers as $customer)
		{
			$counter ++;
			
			$actions = '<a href="' . base_url() .'customers/edit_customer/' . $customer->id . '"><span class="fa fa-edit"></span></a>';
			$actions .= '<a href="javascript:void(0);" data-id="' . $customer->id . '" class="delete_customer"><span class="fa fa-trash"></span></a>';
				
			$row = array();	
			
			$row[] = array('data' => $offset + $counter, 'class' => 'text-center');
			$row[] = array('data' => $customer->name, 'class' => ' ');
			$row[] = array('data' => $customer->phone, 'class' => '');
			$row[] = array('data' => $customer->address, 'class' => '');
			$row[] = array('data' => $customer->zip, 'class' => '');
			$row[] = array('data' => $actions, 'class' => 'actions text-center ');
				
			$this->table->add_row($row);
	
		}
	}
	else
	{
		$this->table->add_row(array('data' => $this->lang->line('CUSTOMERS_CUSTOMER_NOT_FOUND'), 'colspan' => '6'));
	}
	?>
	<div class="table-responsive">
		<?php echo $this->table->generate(); ?>
	</div>
	<?php echo form_close(); ?>
	<div class="col-md-12 text-center">
		<?php echo $this->pagination->create_links(); ?>
	</div>
</div>