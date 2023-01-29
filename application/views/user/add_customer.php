<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Customer</title>

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

 <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
 <?php include APPPATH.'views/user/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
            </li>
            <li class="breadcrumb-item active">Add Customers</li>
          </ol>

          <!-- Icon Cards-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Add Customer Details
            </div>
             


            <div class="card-body">
            <?php echo form_open('user/customer/addCustomerDetails');?>
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

   
            
</div></div>
 <?php echo form_submit(['name'=>'Register','value'=>'Register','class'=>'btn btn-primary btn-block']); ?>

          </form>
               
              </div>
            </div>

          </div>


        </div>        



        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
   <?php include APPPATH.'views/user/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
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
