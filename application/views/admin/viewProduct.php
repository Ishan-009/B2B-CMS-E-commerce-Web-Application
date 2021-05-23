<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card" >
              <div class="card-body text-center" style="">

              <h3 style="padding-top: 10px;">Welcome To Manage Product Section 	</h5>
				   <!-- Main content -->
				   <?php if($this->session->flashdata('deletes')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('deletes');?>
</div>
<?php endif;?>
<br>
<br>
				   <div class="container">
	
	<a style= "float:right" name="Add" id="button001" class="btn btn-primary" href="<?php echo base_url();?>admin/product/addProduct" role="button" ><i class="fa fa-plus-square" aria-hidden="true">Add Product</i></a>
<br>
<br>
	<table class="table table-striped table-hover" border="2" style="width: fit-content;">
		<thead class="thead-dark blue">
			<tr>
			<th style="text-align: center">
					Product Id
				</th>
				<th style="text-align: center">
					Product Name
				</th>
				<th style="text-align: center" >
					Product Image
				</th>
				<th style="text-align: center" >
					Product Category
					
				</th>
				<th style="text-align: center" colspan="1">
					Product Sub-Category
				</th>
				<th style="text-align: center" >
					Status
					
				</th>
				
				<th colspan="4" style="text-align: center">
				Actions
				</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach($prod as $product):?>
 		<tr>
			<td>
			<?php echo $product['id'];?>		
		</td>
		<td>
		<?php echo $product['name'];?>			
		</td>
		<td>
		<img src="<?php echo base_url().'uploads/images/'.$product['image'];?>" width="60px" height="30px">			
		</td>
		<td>
		<?php echo $product['category'];?>			
		</td>
		<td>
		<?php echo $product['subcategory'];?>		
		</td>
		<td>
		<?php if($product['status']==0){echo "<p style='color:red'>Out of Stock</p>";} else { echo "<p style='color:green'> In Stock</p>";}?>
		</td>
	<td class="action" >
	<a name="edit" id="edit01" class="btn btn-success" href="<?php echo base_url().'admin/product/editProd/'.$product['id'];?>" role="button"><i class="fas fa-edit ">Edit</i></a>

		<a name="delete" id="delete01" class="btn btn-danger" href="<?php echo base_url().'admin/product/delete/'.$product['id'];?>" role="button">&nbsp;<i class="fas fa-trash ">  Delete</i></a>
	</td>
</tr>


 



 

		</tbody>

		<?php endforeach;?>
	</table>
</div>
             
            
							<?php if($this->session->flashdata('Subcat')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('Subcat');?>
</div>
<?php endif;?>


<?php if($this->session->flashdata('delete')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('delete');?>
</div>
<?php endif;?>

   
    </div>
   
  </div>
		  </div>
		</div>
	  </div>
</div>
