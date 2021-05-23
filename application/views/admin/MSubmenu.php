<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card" >
              <div class="card-body text-center" style="height:fit-content">

              <h3 style="padding-top: 10px;">Welcome To Manage Sub-menu Section </h5>
				   <!-- Main content -->
				   <div class="container">
	
	<a style= "float:right" name="Add" id="button001" class="btn btn-primary" href="<?php echo base_url();?>admin/UserL/Addsubmenu" role="button" ><i class="fa fa-plus-square" aria-hidden="true">&nbsp; Add Sub-Menu</i></a>
<br>
<br>
	<table class="table table-striped table-hover" border="4" >
		<thead class="thead-dark">
			<tr>
			<th style="text-align: center">
					Sub-Menu Id
				</th>
				<th style="text-align: center">
					Sub-Menu Name
				</th>
			
				
				<th colspan="2" style="text-align: center">
				Actions
				</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach($smenu as $Scat):?>
 		<tr>
			<td>
			<?php echo $Scat['Sid'];?>		
		</td>
		<td>
		<?php echo $Scat['Sname'];?>			
		</td>
		
			

	<td class="action" >
	<a name="edit" id="edit01" class="btn btn-success" href="<?php echo base_url().'admin/UserL/editSmenu/'.$Scat['Sid'];?>" role="button"><i class="fas fa-edit ">Edit</i></a>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
		<a name="delete" id="delete01" class="btn btn-danger" href="<?php echo base_url().'admin/USerL/DSmenu/'.$Scat['Sid'];?>" role="button">&nbsp;<i class="fas fa-trash ">  Delete</i></a>
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
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('DelCat');?>
</div>
<?php endif;?>

<?php if($this->session->flashdata('delS')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('delS');?>
</div>
<?php endif;?>

<?php if($this->session->flashdata('DelSCat')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('DelSCat');?>
</div>
<?php endif;?>

   
    </div>
   
  </div>
		  </div>
		</div>
	  </div>
</div>
