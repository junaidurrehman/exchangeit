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
				<div class="well">
					<h1 class="test-center text-danger">Want of other client</h1>
					<div>$want_id : <?php echo $recommendation->want_id?></div>
					<div>$have_id : <?php echo $recommendation->have_id?></div>
					<div>$want_category_id : <?php echo $recommendation->want_category_id?></div>
					<div>$want_company_id : <?php echo $recommendation->want_company_id?></div>
					<div>$want_model : <?php echo $recommendation->want_model?></div>
					<div>$want_condition : <?php echo $recommendation->want_condition?></div>
					<div>$want_compensate_value : <?php echo $recommendation->want_compensate_value?></div>
					<div>$want_will_give : <?php echo $recommendation->want_will_give?></div>
					<div>$user_id : <?php echo $recommendation->user_id?></div>
					
					<div>$want_category_id : <?php echo $recommendation->want_category_id?></div>
					<div>$want_company_id : <?php echo $recommendation->want_company_id?></div>
					<div>$want_category_name : <?php echo $recommendation->want_category_name?></div>
					<div>$want_company_name : <?php echo $recommendation->want_company_name?></div>
					
					
					<h1 class="test-center text-danger">Have of other client</h1>
					<div>$category_id : <?php echo $recommendation->category_id?></div>
					<div>$company_id : <?php echo $recommendation->company_id?></div>
					<div>$model : <?php echo $recommendation->model?></div>
					<div>$condition : <?php echo $recommendation->condition?></div>
					<div>$description : <?php echo $recommendation->description?></div>
					<div>$value : <?php echo $recommendation->value?></div>
					<div>$have_company_id : <?php echo $recommendation->have_company_id?></div>
					<div>$have_company_name : <?php echo $recommendation->have_company_name?></div>
					<div>$have_category_id : <?php echo $recommendation->have_category_id?></div>
					<div>$have_category_name : <?php echo $recommendation->have_category_name?></div>
				</div>
				<?php }?>
			</td>
			<?php }?>
		</tr>
	</tbody>
</table>

</div>