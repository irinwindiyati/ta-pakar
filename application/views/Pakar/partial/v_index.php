<html lang="en">
<head>
  <title>Sistem Pakar Diagnosa Penyakit Padi</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="icon" href="<?php echo base_url('assets/admin/img/logo.ico') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/admin/docs/css/main.css')?>">
  <!-- Font-icon css-->
  <link rel="stylesheet" href="<?php echo base_url ('assets/admin/docs/font-awesome/css/all.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/datatables/datatables.min.css')?>">
</head>
<body class="app sidebar-mini rtl">

	<?php $this->load->view('Admin/partial/v_header'); ?>

	<?php $this->load->view('Admin/partial/v_sidebar'); ?>

	<!-- LOAD CONTENT -->
	<?php $this->load->view('Admin/'.$content); ?>

<!-- Essential javascripts for application to work-->
<script src="<?php echo base_url('assets/admin/docs/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/docs/js/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/docs/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/docs/js/main.js')?>"></script>
<script src="<?php echo base_url('assets/admin/datatables/datatables.min.js')?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
</body>
</html>