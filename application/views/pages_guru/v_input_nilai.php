<div class="row">
    <div class="col-lg-4 pull-left">
        <h4>Input Nilai Siswa</h4>
    </div>
     <div class="col-lg-8 pull-right" style="text-align:right">
    	<h4>
             <a href="#"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Kembali</button></a>
        </h4>
    </div>
</div>

<div class="panel panel-default">
<div class="panel-body">
	<div class="col-lg-7">
		<table class="table table-striped table-hover display">
				<tr><th><center>Mata Pelajaran</center></th>
				<th><center>Input Nilai UTS</center></th>
			<form id="form" method="post" action="<?php echo base_url('index.php/wali_kelas/simpan_nilaiUTS'); ?>">
				<?php
					foreach($inputNilaiSiswa as $b){
				?>
					<input type="hidden" name="nis" value="<?php echo $b->nis; ?>">
					<input type="hidden" name="status_uts" value="1">
				<?php
					}
				?>
		<?php
			foreach($mapelnya as $x){ 
		?>
				<tr>
					<td><?php echo $x->nm_mapel; ?></td>
					<td> 
						<input type="hidden" name="id_mapel[]" value="<?php echo $x->id_mapel; ?>">
						<input type="number" class="form-control" name="nilai_uts[]" placeholder="Enter Nilai UTS">
					</td>
				</tr>
			
		<?php
			}
		?>	
			<tr>
				<td>Tahun Ajaran</td>
				<td><input type="text" class="form-control" name="tahun_ajaran" placeholder="Tahun Ajaran"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
			</form>
		</table>
	</div>
	<div class="col-lg-5">
		<?php
			foreach($inputNilaiSiswa as $x){
		?>
		<div class="form-group">
		    <label class="control-label col-sm-4">NIS</label>
		    <label class="control-label col-sm-1">:</label>
		    <label class="control-label col-sm-6"><?php echo $x->nis; ?></label>
		</div>
		<div class="form-group">
		    <label class="control-label col-sm-4">Nama Siswa</label>
		    <label class="control-label col-sm-1">:</label>
		    <label class="control-label col-sm-6"><?php echo $x->nm_siswa; ?></label>
		</div>
		<div class="form-group">
		    <label class="control-label col-sm-4">Jenis Kelamin</label>
		    <label class="control-label col-sm-1">:</label>
		    <label class="control-label col-sm-6"><?php if($x->jenis_kelamin=="L"){echo "Laki - laki";}else{echo "Perempuan";} ?></label>
		</div>
		<div class="form-group">
		    <label class="control-label col-sm-4">Alamat</label>
		    <label class="control-label col-sm-1">:</label>
		    <label class="control-label col-sm-6"><?php echo $x->alamat; ?></label>
		</div>
		<div class="form-group">
		    <label class="control-label col-sm-4">Kelas</label>
		    <label class="control-label col-sm-1">:</label>
		    <label class="control-label col-sm-6"><?php echo $x->kelas; ?></label>
		</div>
		<?php
			}
		?>
	</div>

</div>
</div>