<div class="row">
    <div class="col-lg-4 pull-left">
        <h4>Data Guru Sekolah</h4>
    </div>
    <div class="col-lg-8 pull-right" style="text-align:right">
    	<h4>
             <button class="btn btn-success" onclick="add_guru()"><i class="glyphicon glyphicon-plus"></i> Tambah Data</button>
        </h4>
    </div>
</div>
<div class="panel panel-default">
<div class="panel-body">
<table class='table table-striped table-hover display' id='table_id'>
	<thead>
		<th>NIP</th>
		<th>Nama Guru</th>
		<th>Alamat</th>
		<th>Jk</th>
		<th>Mengajar</th>
		<th>Wali Kelas</th>
		<th>Password</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		foreach($lihatGuru as $x) {
		?>
		<tr>
			<td><?php echo $x->id_guru; ?></td>
			<td><?php echo $x->nm_guru; ?></td>
			<td><?php echo $x->alamat; ?></td>
			<td><?php echo $x->jenis_kelamin; ?></td>
			<td><?php echo $x->id_mapel; ?></td>
			<td><?php echo $x->wali_kelas; ?></td>
			<td>********</td>
			<td>
			<button class="btn btn-warning" onclick="edit_guru(<?php echo $x->id_guru;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
				<button class="btn btn-danger" onclick="hapus_guru(<?php echo $x->id_guru;?>)"><i class="glyphicon glyphicon-remove"></i></button>
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
	var aksi;
	function add_guru(){
		aksi='add';
		$('#form')[0].reset();
		$('#modalGuru').modal('show');
	}

	function edit_guru(id){
		aksi="update";
		$('#form')[0].reset();

		//ajax load data
		$.ajax({
			url : "<?php echo base_url('index.php/guru/ajax_edit/'); ?>/" +id,
			type: "GET",
	        dataType: "JSON",
	        success: function(data){
	        	$('[name="id_guru"]').val(data.id_guru);
				$('[name="nm_guru"]').val(data.nm_guru);
				$('[name="alamat"]').val(data.alamat);
				$('[name="jenis_kelamin"]').val(data.jenis_kelamin);
				$('[name="id_mapel"]').val(data.id_mapel);
				$('[name="wali_kelas"]').val(data.wali_kelas);
				$('[name="password"]').val(data.password);

				$('#modalGuru').modal('show');
				$('.modal-header').text('Modal Edit');
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('something wrong.......');
			}
		});
	}

	function save(){
		var url
		if(aksi=='add'){
			url = '<?php echo site_url('index.php/guru/simpan'); ?>';
		}else{
			url = '<?php echo site_url('index.php/guru/simpanEdit'); ?>';
		}
		//script ajax save
		$.ajax({
			url : url,
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

	function hapus_guru(id){
		if(confirm("Yakin data akan dihapus ?")){
			$.ajax({
				url : "<?php echo base_url('index.php/guru/hapus/') ?>"+id,
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
</script>

<!--MODAL-->
<div class="modal fade" id="modalGuru" role="dialog"  style="z-index:9999">
	<div class="modal-dialog modal-xs"  style="z-index:9999">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
				Tambah Guru Sekolah
			</div>
			<div class="modal-body">
				<form  action="#" id="form" class="form-horizontal">
				 	NIP : <input type="text" name="id_guru" placeholder="NIP Guru" class="form-control input-sm">
					Nama Guru : <input type="text" name="nm_guru" placeholder="Nama Guru" class="form-control input-sm">
					Alamat : <input type="text" name="alamat" placeholder="Alamat Guru" class="form-control input-sm">
					Jenis Kelamin : <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control input-sm">
					Id Mapel : <input type="text" name="id_mapel" placeholder="Id Mapel" class="form-control input-sm">
					Wali Kelas : <input type="text" name="wali_kelas" placeholder="Wali Kelas" class="form-control input-sm">
					Password : <input type="password" name="password" placeholder="Password" class="form-control input-sm">
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				</form>
			</div>
		</div>
	</div>
</div>
