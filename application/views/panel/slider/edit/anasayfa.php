<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Forms</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view("panel/includes/style"); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view("panel/includes/header"); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view("panel/includes/sidebar"); ?>

  <!-- Content Wrapper. Contains page content -->
<?php $this->load->view("panel/slider/edit/main_content"); ?>
  <!-- /.content-wrapper -->


<?php $this->load->view("panel/includes/footer"); ?>
</div>
<!-- ./wrapper -->

<?php $this->load->view("panel/includes/script"); ?>
</body>
</html>

