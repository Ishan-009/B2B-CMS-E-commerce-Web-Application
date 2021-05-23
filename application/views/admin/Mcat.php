<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card" >
              <div class="card-body text-center" style="height:fit-content">

              <h3 style="padding-top: 10px;">Welcome To Manage Main-Category Section </h5>
				   <!-- Main content -->
				   <div class="container">
	
	<a style= "float:right" name="Add" id="button001" class="btn btn-primary" href="<?php echo base_url();?>admin/category/addcategory" role="button" ><i class="fa fa-plus-square" aria-hidden="true">Add Category</i></a>
<br>
<br>
	<table class="table table-striped table-hover" border="4" >
		<thead class="thead-dark">
			<tr>
			<th style="text-align: center">
					Category Id
				</th>
				<th style="text-align: center">
					Category Name
				</th>
				<th style="text-align: center" >
					Category Image
				</th>
				
				<th colspan="2" style="text-align: center">
				Actions
				</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach($Mcat as $cat):?>
 		<tr>
			<td>
			<?php echo $cat['id'];?>		
		</td>
		<td>
		<?php echo $cat['name'];?>			
		</td>
		<td>
		<img src="<?php echo base_url().'uploads/images/'.$cat['image'];?>" width="60px" height="30px">			
		</td>
			

	<td class="action" >
	<a name="edit" id="edit01" class="btn btn-success" href="<?php echo base_url().'admin/category/EditCategory/'.$cat['id'];?>" role="button"><i class="fas fa-edit ">Edit</i></a>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
		<a name="delete" id="delete01" class="btn btn-danger" href="<?php echo base_url().'admin/category/DelMCat/'.$cat['id'];?>" role="button">&nbsp;<i class="fas fa-trash ">  Delete</i></a>
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
<?php if($this->session->flashdata('DelCat')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('DelCat');?>
</div>
<?php endif;?>

<?php if($this->session->flashdata('DelCats')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('DelCats');?>
</div>
<?php endif;?>

   
    </div>
   
  </div>
		  </div>
		</div>
	  </div>
</div>
