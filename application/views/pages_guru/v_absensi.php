
<div class="row timbul">
	<div class="col-lg-12 hilang">
    <div class="col-lg-4 pull-left">
        <h4>Data Siswa Kelas</h4>
    </div>
    <div class="col-lg-8 pull-right" style="text-align:right">
    	<h4>
             <a href="#"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Cetak Absensi Kelas</button></a>
             <a href="#"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Cetak Laporan Nilai</button></a>
             <a href="#"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah Data</button></a>
        </h4>
    </div>
</div>

<div class="panel panel-default">
<div class="panel-body">
<table class='table table-striped table-hover display' id='table_id'>
	<thead>
		<th class="text-center">NIS</th>
		<th class="text-center">Nama Siswa</th>
		<th class="text-center">Bolos</th>
		<th class="text-center">Izin</th>
		<th class="text-center">Sakit</th>
		<th class="text-center">Aksi</th>
	</thead>
	<tbody>
		<?php
		foreach($dataSiswa as $x) {
		?>
		<input type="hidden"  id="editriger" value="edit"/>
		<tr>
			<td class="text-center"><?php echo $x->nis; ?></td>
			<td><?php echo $x->nm_siswa; ?></td>
			<td class="text-center"><label class="label label-danger">
				<span id="editalfa<?php echo $x->nis; ?>" class="textnya"><?php echo $x->absen_alfa; ?></span>
                <input type="number" name="absen_alfa" value="<?php echo $x->absen_alfa; ?>" class="form-control formnya" id="boxalfa<?php echo $x->nis; ?>" style="display:none;"/>
			</label></td>
			<td class="text-center"><label class="label label-warning">
				<span id="editijin<?php echo $x->nis; ?>" class="textnya"><?php echo $x->absen_ijin; ?></span>
                <input type="number" name="absen_ijin" value="<?php echo $x->absen_ijin; ?>" class="form-control formnya" id="boxijin<?php echo $x->nis; ?>" style="display:none;"/>
			</label></td>
			<td class="text-center"><label class="label label-success">
				<span id="editsakit<?php echo $x->nis; ?>" class="textnya"><?php echo $x->absen_sakit; ?></span>
                <input type="number" name="absen_sakit" value="<?php echo $x->absen_sakit; ?>" class="form-control formnya" id="boxsakit<?php echo $x->nis; ?>" style="display:none;"/>
			</label></td>
			<td class="text-center">
				<a id="<?php echo $x->nis; ?>" class="btn btn-success editrow erow<?php echo $x->nis; ?>">Edit</a>
				<a id="<?php echo $x->nis; ?>" class="btn btn-success updaterow urow<?php echo $x->nis; ?>" style="display:none;">Update</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
</div>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".editrow").click(function(){
			var id = $(this).attr("id"); //var id 
			$(".erow"+id).hide('slow');
			$(".urow"+id).show('slow');
			$("#editalfa"+id).hide('slow');
			$("#editijin"+id).hide('slow');
			$("#editsakit"+id).hide('slow');
			$("#boxalfa"+id).show('slow');
			$("#boxijin"+id).show('slow');
			$("#boxsakit"+id).show('slow');
		});
		$(".updaterow").click(function(){
			var id 			= $(this).attr("id");
			var alfa		= $("input#boxalfa"+id).val();
			var ijin		= $("input#boxijin"+id).val();
			var sakit		= $("input#boxsakit"+id).val();
			var triger		= "edit";
			if(id == ""){
				alert("something wrong.......");
			}else{
				$.ajax({
					type  : "POST",
					url   : "<?php echo base_url('index.php/absensi/simpanEdit'); ?>",
					dataType : "json",
					data : 'id='+id+'&absen_alfa='+alfa+'&absen_ijin='+ijin+'&absen_sakit='+sakit,
					success: function(html){
						$('.hilang').hide('slow');
						location.reload();
					},
					error: function(){
						alert("something wrong.......");
					}
				});
			}
		});
		$(".formnya").mouseup(function(){
			return false;
		});
	});
</script>

