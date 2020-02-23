<div class="row">
    <div class="col-lg-4 pull-left">
        <h4>Data Semua Siswa</h4>
    </div>
    <div class="col-lg-8 pull-right" style="text-align:right">
    	<h4>
             <a href="<?php echo base_url('index.php/siswa/tambah'); ?>"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah Data</button></a>
        </h4>
    </div>
</div>
<div class="panel panel-default">
<div class="panel-body">
<table class='table table-striped table-hover display' id='table_id'>
	<thead>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Alamat</th>
		<th>Tempat, Tgl Lahir</th>
		<th>JK</th>
		<th>Kelas</th>
		<th>Tahun Masuk</th>
		<th>Tahun Lulus</th>
		<th>Status</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		foreach($semuaSiswa as $x) {
		?>
		<tr>
			<td><?php echo $x->nis; ?></td>
			<td><?php echo $x->nm_siswa; ?></td>
			<td><?php echo $x->alamat; ?></td>
			<td><?php echo $x->tempat_lahir.", ".$x->tanggal_lahir; ?></td>
			<td><?php echo $x->jenis_kelamin; ?></td>
			<td><?php echo $x->kelas; ?></td>
			<td><?php echo $x->tahun_masuk; ?></td>
			<td><?php echo $x->tahun_lulus; ?></td>
			<td><label class="label label-success"><?php echo $x->status; ?></label></td>
			<td>
			<button class="btn btn-warning" onclick="edit_siswa(<?php echo $x->nis; ?>)"><i class="glyphicon glyphicon-pencil"></i></button>
				<button class="btn btn-danger" onclick="hapus_siswa(<?php echo $x->nis; ?>)"><i class="glyphicon glyphicon-remove"></i></button>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
</div>
</div>

<script type="text/javascript">
	function hapus_siswa(id){
		if(confirm("Yakin data akan dihapus ?")){
			$.ajax({
				url : "<?php echo base_url('index.php/siswa/hapus/') ?>"+id,
				type: "POST",
				dataType: "JSON",
				success: function(data){
					location.reload();
				},
				error: function(jqXHR, textStatus, errorThrown){
					alert("something wrong.......");
				}
			});
		}
	}

	function edit_siswa(id){

		//ajax load data
		$.ajax({
			url : "<?php echo base_url('index.php/siswa/ajax_edit/'); ?>/" +id,
			type: "GET",
	        dataType: "JSON",
	        success: function(data){
	        	$('[name="nis"]').val(data.nis);
				$('[name="nm_siswa"]').val(data.nm_siswa);
				$('[name="alamat"]').val(data.alamat);
				$('[name="tempat_lhr"]').val(data.tempat_lahir);
				$('[name="tanggal_lhr"]').val(data.tanggal_lahir);
				$('[name="jk"]').val(data.jenis_kelamin);
				$('[name="kelas"]').val(data.kelas);
				$('[name="status"]').val(data.status);
				$('[name="masuk"]').val(data.tahun_masuk);
				$('[name="lulus"]').val(data.tahun_lulus);

				$('#modalSiswa').modal('show');
				$('.modal-header').text('Modal Edit');
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('something wrong.......');
			}
		});
	}

	function save(){
		//script ajax save
		$.ajax({
			url : "<?php echo base_url('index.php/siswa/simpanEdit'); ?>",
			type: "POST",
			data: $('#form').serialize(),
			dataType: "JSON",
			success: function(data){
				//jika sukses close modal and reload
				$('#modalGuru').modal('hide');
				location.reload();
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('maaf terjadi kesalahan mohon cek kembali');
			}
		});
	}

</script>

<!--MODAL-->
<div class="modal fade" id="modalSiswa" role="dialog"  style="z-index:9999">
	<div class="modal-dialog modal-xs"  style="z-index:9999">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
				Tambah Guru Sekolah
			</div>
			<div class="modal-body">
				<form  action="#" id="form" class="form-horizontal">
				 	NIS : <input type="text" name="nis" placeholder="NIP Guru" class="form-control input-sm">
					Nama Siswa : <input type="text" name="nm_siswa" placeholder="Nama Guru" class="form-control input-sm">
					Alamat : <input type="text" name="alamat" placeholder="Alamat Guru" class="form-control input-sm">
					Tempat Lahir : <input type="text" name="tempat_lhr" placeholder="Jenis Kelamin" class="form-control input-sm">
					Tanggal Lahir : <input type="text" name="tanggal_lhr" placeholder="Jenis Kelamin" class="form-control input-sm">
					Jenis Kelamin : <input type="text" name="jk" placeholder="Id Mapel" class="form-control input-sm">
					Kelas : <input type="text" name="kelas" placeholder="Wali Kelas" class="form-control input-sm">
					Status : <input type="text" name="status" placeholder="Password" class="form-control input-sm">
					Tahun Masuk : <input type="text" name="masuk" placeholder="Wali Kelas" class="form-control input-sm">
					Tahun Lulus : <input type="text" name="lulus" placeholder="Password" class="form-control input-sm">
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				</form>
			</div>
		</div>
	</div>
</div>