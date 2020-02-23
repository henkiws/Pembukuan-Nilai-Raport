<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/AdminLTE/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/AdminLTE/ionicons.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/AdminLTE/dist/css/AdminLTE.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/AdminLTE/plugins/iCheck/flat/blue.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/AdminLTE/plugins/morris/morris.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/AdminLTE/plugins/datepicker/datepicker3.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/AdminLTE/plugins/daterangepicker/daterangepicker.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">

	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/jquery-ui.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/raphael-min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/morris/morris.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/knob/jquery.knob.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/moment.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/plugins/fastclick/fastclick.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/AdminLTE/dist/js/app.min.js'); ?>"></script>
	
	<!-- datatables -->
	<script>
		$(document).ready(function(){
			$('#table_id').DataTable();
		});
	</script>
	<script>
		$(document).ready(function(){
			$('#table_id2').DataTable();
		});
	</script>
	<script>
		$(document).ready(function(){
			$('#table_id3').DataTable();
		});
	</script>

	<!-- datepicker -->
	<script> 
	$(document).ready(function(){
		$('.datepicker2').datepicker({
			format: 'dd-mm-yyyy'
		});
	});
	</script>

	<!-- toggle-menu -->
	<script>
		$(document).ready(function(){
			$("#transaksi").click(function(){
				$("#panel-transaksi").slideToggle("fast");
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("#master").click(function(){
				$("#panel-master").slideToggle("fast");
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("#laporan").click(function(){
				$("#panel-laporan").slideToggle("fast");
			});
		});
	</script>

	<title>dashboard admin</title>
</head>
<body class="hold-transition skin-green sidebar-mini">

<div class="wrapper">
		<?php echo $headernya; ?>
  <div class="content-wrapper">
    <section class="content">
		<?php echo $contentnya; ?>
    </section>
  </div>
  <footer class="main-footer">
		<?php echo $footernya; ?>
  </footer>
</div>


</body>
</html>