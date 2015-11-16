<?php defined('BASEPATH') or die('Restricted access');?>
<h1>Ads</h1>
<div>
	<h2>YOU HAVE:</h2>
	
	<ol>
	<li>
    	<label>Category selected: </label><?php echo $have->category_name;?>
    </li>
   <li>
    	<label>Company selected: </label><?php echo $have->company_name;?>
    </li>
    <li>
    	<label>Mobile model selected: </label><?php echo $have->model;?>
    </li>
    <li>
    <label>item value: </label><?php echo $have->value;?>
    </li>
     <li>
    <label>condition: </label><?php echo $have->condition;?>
    </li>
    <li>
 <label>description: </label><?php echo $have->description;?> 
    </li>
   </ol>
   
   <?php foreach ($wants as $want) {?>
   
   
   <h2>YOU WANT:</h2>
	
	
	
	<ol>
	<li>
    	<label>Category selected: </label><?php  echo $want->category_name?>
    </li>
   <li>
    	<label>Company selected: </label><?php  echo $want->company_name?>
    </li>
    <li>
    	<label>Mobile model selected: </label><?php  echo $want->want_model?>
    </li>
    <li>
    <label>condition: </label><?php  echo $want->want_condition?>
    </li>
    <li>
 <label>compensae price: </label><?php  echo $want->want_compensate_value?>
    </li>
   </ol>
   
   <?php }?>
	
</div>
<div>
<table class="table table-bordered">
	<tbody>
		<tr>
			
			<?php foreach ($wants as $want) {?>
			<td>
			<label>My want category id = <?php echo $want->category_id?></label> <br>
						<label style="color:blue" >My want category name = <?php  echo $want->category_name?></label>
			</td>
			<?php }?>
			
		</tr>
		
		<tr>
			<?php foreach ($wants as $key=>$want) {?>
			<td>
				<?php foreach ($recommendations[$key] as $recommendation) {?>
				<div>
			<label>Category id of those who have similar item to exchange = <?php echo $recommendation->category_id?> </label>
					 <br>
					 <!-- category name of user who is recemmended to original user !! -->
					 <label>username =<?php echo $recommendation->user_name?></label><br>
					<label> have id of those who are recommended for exchange<?php echo $recommendation->have_id?></label>
				</div>
				<?php }?>
			</td>
			<?php }?>
		</tr>
	</tbody>
</table>

</div>