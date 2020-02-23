<div class="row">
    <div class="col-lg-4 pull-left">
        <h4>Tambah Data Siswa</h4>
    </div>

</div>
<div class="panel panel-default">
<div class="panel-body">

<label class="label label-primary">Data Siswa 1</label><br>
<br>
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php/siswa/simpan'); ?>">
<div class="pull-right" style="text-align:right">
    <button type="button" class="btn-warning" id="btn-tambah-form">Tambah Data Form</button>
	<button type="button" class="btn-danger" id="btn-reset-form">Reset Form</button>
 </div>
	<br><br>
  <div class="form-group">
    <label class="control-label col-sm-2">NIS</label>
    <div class="col-sm-8">
      <input type="text" name="nis[]" class="form-control" placeholder="Enter NIS" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Nama Siswa</label>
    <div class="col-sm-8">
      <input type="text" name="nm_siswa[]" class="form-control" placeholder="Enter Nama Siswa" >
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Alamat</label>
    <div class="col-sm-8">
      <input type="text" name="alamat[]" class="form-control" placeholder="Enter Alamat" >
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Tempat Lahir</label>
    <div class="col-sm-8">
      <input type="text" name="tempat_lhr[]" class="form-control" placeholder="Enter Tempat Lahir" >
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Tanggal Lahir</label>
    <div class="col-sm-8">
     <input type="text" name="tanggal_lhr[]" class="form-control input-sm datepicker2" placeholder="Tanggal Lahir" >
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Jenis Kelamin</label>
    <div class="col-sm-8">
      <input type="text" name="jk[]" class="form-control" placeholder="Enter Jenis Kelamin" >
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Kelas</label>
    <div class="col-sm-8">
      <input type="text" name="kelas[]" class="form-control" placeholder="Enter Kelas" >
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Status</label>
    <div class="col-sm-8">
      <input type="text" name="status[]" class="form-control" placeholder="Enter Status">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Tahun Masuk</label>
    <div class="col-sm-8">
      <input type="text" name="masuk[]" class="form-control" placeholder="Enter Tahun Masuk" >
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Tahun Lulus</label>
    <div class="col-sm-8">
      <input type="text" name="lulus[]" class="form-control" placeholder="Enter Tahun Lulus">
    </div>
  </div>

  <div id="insert-form"></div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

		<input type="hidden" id="jumlah-form" value="1">

</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data
		var jumlah = parseInt($("#jumlah-form").val()); //ambil jml data form
		var nextform = jumlah + 1; //tambah 1 tiap klik

		$("#insert-form").append("<label class='label label-primary'> Data Siswa "+ nextform +" </label>" +
			"<div class='form-group'>" +
			"<label class='control-label col-sm-2'>NIS</label>" +
		    "<div class='col-sm-8'>" +
		      "<input type='text' name='nis[]' class='form-control' placeholder='Enter NIS'>" +
		    "</div>" +
		  	"</div>" +
		  	"<div class='form-group'>" +
			"<label class='control-label col-sm-2'>Nama Siswa</label>" +
		    "<div class='col-sm-8'>" +
		      "<input type='text' name='nm_siswa[]' class='form-control' placeholder='Enter Nama Siswa'>" +
		    "</div>" +
		  	"</div>" +
		  	"<div class='form-group'>" +
			"<label class='control-label col-sm-2'>Alamat</label>" +
		    "<div class='col-sm-8'>" +
		      "<input type='text' name='alamat[]' class='form-control' placeholder='Enter Alamat'>" +
		    "</div>" +
		  	"</div>" +
		  	"<div class='form-group'>" +
			"<label class='control-label col-sm-2'>Tempat Lahir</label>" +
		    "<div class='col-sm-8'>" +
		      "<input type='text' name='tempat_lhr[]' class='form-control' placeholder='Enter Tempat Lahir'>" +
		    "</div>" +
		  	"</div>" +
		  	"<div class='form-group'>" +
			"<label class='control-label col-sm-2'>Tanggal Lahir</label>" +
		    "<div class='col-sm-8'>" +
		      "<input type='text' name='tanggal_lhr[]' class='form-control' placeholder='Enter Tanggal Lahir'>" +
		    "</div>" +
		  	"</div>" +
		  	"<div class='form-group'>" +
			"<label class='control-label col-sm-2'>Jenis Kelamin</label>" +
		    "<div class='col-sm-8'>" +
		      "<input type='text' name='jk[]' class='form-control' placeholder='Enter Jenis Kelamin'>" +
		    "</div>" +
		  	"</div>" +
		  	"<div class='form-group'>" +
			"<label class='control-label col-sm-2'>Kelas</label>" +
		    "<div class='col-sm-8'>" +
		      "<input type='text' name='kelas[]' class='form-control' placeholder='Enter Kelas'>" +
		    "</div>" +
		  	"</div>" +
		  	"<div class='form-group'>" +
			"<label class='control-label col-sm-2'>Status</label>" +
		    "<div class='col-sm-8'>" +
		      "<input type='text' name='status[]' class='form-control' placeholder='Enter Status'>" +
		    "</div>" +
		  	"</div>" +
		  	"<div class='form-group'>" +
			"<label class='control-label col-sm-2'>Tahun Masuk</label>" +
		    "<div class='col-sm-8'>" +
		      "<input type='text' name='masuk[]' class='form-control' placeholder='Enter Tahun Masuk'>" +
		    "</div>" +
		  	"</div>" +
		  	"<div class='form-group'>" +
			"<label class='control-label col-sm-2'>Tahun Lulus</label>" +
		    "<div class='col-sm-8'>" +
		      "<input type='text' name='lulus[]' class='form-control' placeholder='Enter Tahun Lulus'>" +
		    "</div>" +
		  	"</div>" 
			);
		$("#jumlah-form").val(nextform);//ubah value textbox
	});

		// Buat fungsi untuk mereset form ke semula
		$("#btn-reset-form").click(function(){
			$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
			$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
		});
	});

</script>