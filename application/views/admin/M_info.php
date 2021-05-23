<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card" >
              <div class="card-body text-center" style="height:fit-content">

              <h3 style="padding-top: 10px;">Welcome To Manage Informantion  Section </h5>
				   <!-- Main content -->
				   <div class="container">
	
	<a style= "float:right" name="Add" id="button001" class="btn btn-primary" href="<?php echo base_url();?>admin/UserL/au_info" role="button" ><i class="fa fa-plus-square" aria-hidden="true">Add User Info</i></a>
<br>
<br>
	<table class="table table-striped table-hover" border="4" style="width: fit-content;" >
		<thead class="thead-dark">
			<tr>
			<th style="text-align: center">
					Info Id
				</th>
				<th style="text-align: center">
					About US
				</th>
				<th style="text-align: center">
					Contact Us
				</th>
			
				
				<th colspan="3" style="text-align: center">
				Actions
				</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach($uinfo as $cat):?>
 		<tr>
			<td>
			<?php echo $cat['id'];?>		
		</td>
		<td>
		<?php echo $cat['about'];?>			
		</td>
		<td>
		<?php echo $cat['contact'];?>			
		</td>
	
			

	<td class="action" >
	<a name="edit" id="edit01" class="btn btn-success" href="<?php echo base_url().'admin/UserL/eu_info/'.$cat['id'];?>" role="button"><i class="fas fa-edit ">Edit</i></a> <br> <br>

		<a name="delete" id="delete01" class="btn btn-danger" href="<?php echo base_url().'admin/UserL/delInfo/'.$cat['id'];?>" role="button"><i class="fas fa-trash ">&nbsp;Delete</i></a>
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
<?php if($this->session->flashdata('delI')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('delI');?>
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
