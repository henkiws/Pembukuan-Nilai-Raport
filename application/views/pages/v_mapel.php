<div class="row">
    <div class="col-lg-4 pull-left">
        <h4>Mata Pelajaran Sekolah</h4>
    </div>
    <div class="col-lg-8 pull-right" style="text-align:right">
    	<h4>
             <button class="btn btn-success" onclick="add_mapel()"><i class="glyphicon glyphicon-plus"></i> Tambah Data</button>
        </h4>
    </div>
</div>
<div class="panel panel-default">
<div class="panel-body">
<table class='table table-striped table-hover display' id='table_id'>
	<thead>
		<th>Id MaPel</th>
		<th>Nama Mata Pelajaran</th>
		<th>KKM Nilai</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		foreach($lihatMapel as $x) {
		?>
		<tr>
			<td><?php echo $x->id_mapel; ?></td>
			<td><?php echo $x->nm_mapel; ?></td>
			<td><?php echo $x->kkm; ?></td>
			<td>
			<button class="btn btn-warning" onclick="edit_mapel(<?php echo $x->id_mapel;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
				<button class="btn btn-danger" onclick="hapus_mapel(<?php echo $x->id_mapel;?>)"><i class="glyphicon glyphicon-remove"></i></button>
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
	function add_mapel(){
		aksi='add';
		$('#form')[0].reset();
		$('#modalMapel').modal('show');
	}

	function edit_mapel(id){
		aksi='update';
		$('#form')[0].reset();
		$.ajax({
			url		: "<?php echo base_url('index.php/mapel/ajax_edit/'); ?>"+id,
			type	: "GET",
			dataType: "JSON",
			succes: function(data){
				$('[name="id_mapel"]').val(data.id_mapel);
				$('[name="nm_mapel"]').val(data.nm_mapel);
				$('[name="kkm"]').val(data.kkm);

				$('#modalMapel').modal('show');
				$('#modal-header').text('Edit Mata Pelajaran');
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('something wrong.........');
			}
		});
	}

	function save(){
		var url;
		if (aksi=='add'){
			url="<?php echo base_url('index.php/mapel/simpan'); ?>";
		}else{
			url="<?php echo base_url('index.php/mapel/simpanEdit'); ?>";
		}
		$.ajax({
			url : url,
			type: "POST",
			data: $('#form').serialize(),
			dataType: "JSON",
			success: function(data){
				$('#modalMapel').modal('hide');
				location.reload();
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('something wrong........');
			}
		});
	}

	function hapus_mapel(id){
		if(confirm("Yakin data akan dihapus ?")){
			$.ajax({
				url : "<?php echo base_url('index.php/mapel/hapus/') ?>"+id,
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
<div class="modal fade" id="modalMapel" role="dialog"  style="z-index:9999">
	<div class="modal-dialog modal-xs"  style="z-index:9999">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
				Tambah Mata Pelajaran Baru
			</div>
			<div class="modal-body">
				<form  action="#" id="form" class="form-horizontal">
				 	Id Mata Pelajaran : <input type="text" name="id_mapel" placeholder="Id Mata Pelajaran" class="form-control input-sm">
					Nama Mata Pelajaran : <input type="text" name="nm_mapel" placeholder="Nama Mata Pelajaran" class="form-control input-sm">
					Nama Mata Pelajaran : <input type="text" name="kkm" placeholder="KKM Nilai Mata Pelajaran" class="form-control input-sm">
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				</form>
			</div>
		</div>
	</div>
</div>
