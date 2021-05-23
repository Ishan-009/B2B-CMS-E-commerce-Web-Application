<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body text-center" style="height: max-content;">

              <h3 style="padding-top: 10px;">Welcome To The User Quotation Data Section</h5>
				   <!-- Main content -->
					 <?php if($this->session->flashdata('delUI')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('delUI');?>
</div>
<?php endif;?>
<br>
				   <section class="content">
				   <?php echo form_error('category');?>
      <div class="container-fluid">
	  <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Inquiry Data</h3>

                <div class="card-tools">
               
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" >
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>UserName</th>
                      <th>Email</th>
                      <th>mobile</th>
					  <th>message</th>
					  <th>User cart Data</th>
						<th colspan="1">Action</th>
                    </tr>
                  </thead>
                  <tbody>
		<?php foreach($Inquiry as $udata):?>
                    <tr>
                      <td> <?php echo $udata['id'];?>    </td>
                      <td> <?php echo $udata['username'];?>       </td>
                      <td>   <?php echo $udata['email'];?>      </td>
                      <td>   <?php echo $udata['mobile'];?>        </td>
					  <td> <?php echo $udata['message'];?>           </td>
					  <td>    <?php echo $udata['userdata'];?>          </td>
						<td>  <a name="delete" id="delete01" class="btn btn-danger" href="<?php echo base_url().'admin/inquiry/delUinquiry/'.$udata['id'];?>" role="button">&nbsp;<i class="fas fa-trash "> Delete</i></a>  </td>
                    </tr>
                 <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
	  



            </div>
					
            
          </div>
          <!-- /.col-md-6 -->
        
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	  </div>
  </div>
