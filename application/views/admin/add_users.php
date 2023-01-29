<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Manage Users</title>

<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body id="page-top">
    <?php include APPPATH.'views/admin/includes/header.php';?>

    <div id="wrapper">

        <?php include APPPATH.'views/admin/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('admin/Dashboard'); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Users</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Add Users Details
            </div>
             


            <div class="card-body">
              <div class="table-responsive">
  <!---- Success Message ---->
<?php if ($this->session->flashdata('success')) { ?>
<p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
</div>


<?php } ?>

<!---- Error Message ---->

<?php if ($this->session->flashdata('error')) { ?>
<p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>

<?php } ?>  



   <?php echo form_open('user/signup');?>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'firstname','id'=>'firstname','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('firstname')]);?>
<?php echo form_label('Enter your first name', 'firstname'); ?>
<?php echo form_error('firstname',"<div style='color:red'>","</div>");?>

                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'lastname','id'=>'lastname','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('lastname')]);?>
<?php echo form_label('Enter your  last name', 'lastname'); ?>
<?php echo form_error('lastname',"<div style='color:red'>","</div>");?>

                  </div>
                </div>
              </div>
            </div>
            
            <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
              <div class="form-label-group">

<?php echo form_input(['name'=>'emailid','id'=>'emailid','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('emailid')]);?>
<?php echo form_label('Enter valid email id', 'emailid'); ?>
<?php echo form_error('emailid',"<div style='color:red'>","</div>");?>

              </div>
            </div>

            <div class="col-md-6">
              <div class="form-label-group">

<?php echo form_input(['name'=>'mobilenumber','id'=>'mobilenumber','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('mobilenumber')]);?>
<?php echo form_label('Enter Mobile Number', 'mobilenumber'); ?>
<?php echo form_error('mobilenumber',"<div style='color:red'>","</div>");?>

              </div>
            </div>
             </div>
            </div>

   
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
<?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('password')]);?>
<?php echo form_label('Password', 'password'); ?>
<?php echo form_error('password',"<div style='color:red'>","</div>");?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
<?php echo form_password(['name'=>'confirmpassword','id'=>'confirmpassword','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('confirmpassword')]);?>
<?php echo form_label('Confirm Password', 'confirmpassword'); ?>
<?php echo form_error('confirmpassword',"<div style='color:red'>","</div>");?>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <?php $options = array(
'1' => 'Tele Caller',
'2' => 'Agent',
'3' => 'Field Agent',
); ?>
<?php echo form_dropdown('userRole', $options, 'Tele Caller', 'class="form-control"'); ?>
</div>
</div></div>
 <?php echo form_submit(['name'=>'Register','value'=>'Register','class'=>'btn btn-primary btn-block']); ?>

          </form>
                
                
              </div>
            </div>

          </div>


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
    <?php include APPPATH.'views/admin/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>



  <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

  </body>

</html>
