
<div class="row">
    <div class="col-lg-4 pull-left">
        <h4>Data Semua Siswa</h4>
    </div>
    <div class="col-lg-8 pull-right" style="text-align:right">
    	<h4>
             <a href="<?php echo base_url('index.php/wali_kelas/view_nilaiALL'); ?>"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> View All</button></a>
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
		<th>Nilai UTS</th>
		<th>Nilai UAS</th>
		<th>Nilai Raport</th>
	</thead>
	<tbody>
		<?php
		foreach($dataSiswaKelas as $x) {
		?>
		<tr>
			<td><?php echo $x->nis; ?></td>
			<td><?php echo $x->nm_siswa; ?></td>
			<td><?php echo $x->alamat; ?></td>
			<td><?php echo $x->tempat_lahir.", ".$x->tanggal_lahir; ?></td>
			<td><?php echo $x->jenis_kelamin; ?></td>
			<td><?php echo $x->kelas; ?></td>
			<td><?php if($x->status_uts==0){echo '<label class="label label-danger">Belum</label>';}else{echo '<label class="label label-success">Sudah</label>';} ?></td>
			<td><?php if($x->status_uas==0){echo '<label class="label label-danger">Belum</label>';}else{echo '<label class="label label-success">Sudah</label>';} ?></td>
			<td>
				<a href="<?php echo base_url('index.php/wali_kelas/view_nilai/'.$x->nis.''); ?>"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> View</button></a>
				<a href="<?php echo base_url('index.php/wali_kelas/input_nilai/'.$x->nis.''); ?>"><button class="btn btn-success" <?php if($x->status_uts==1){echo "disabled";} ?>>Input</button></a>
				<a href="<?php echo base_url('index.php/wali_kelas/edit_nilai/'.$x->nis.''); ?>"><button class="btn btn-warning" <?php if($x->status_uts==0){echo "disabled";} ?>><i class="glyphicon glyphicon-pencil"></i> Edit</button></a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
</div>
</div>
