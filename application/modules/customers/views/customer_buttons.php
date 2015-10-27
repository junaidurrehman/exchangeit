<div class="customer_buttons">
	<a class="btn btn-red <?php echo ($this->router->method=='index')?'btn-active':'' ?>" href="<?php echo base_url()?>customers">
		<?php echo $this->lang->line('CUSTOMERS_CUSTOMERS_BTN_TEXT'); ?>
	</a>
  	<a class="btn btn-red <?php echo ($this->router->method=='add_customer')?'btn-active':'' ?>" href="<?php echo base_url()?>customers/add_customer">
  		<?php echo $this->lang->line('CUSTOMERS_ADD_CUSTOMER_BTN_TEXT'); ?>
  	</a>
</div>