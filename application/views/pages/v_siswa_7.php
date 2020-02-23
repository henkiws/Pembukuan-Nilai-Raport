<div class="row">
    <div class="col-lg-4 pull-left">
        <h4>Data Siswa Kelas 7</h4>
    </div>
</div>
<div class="panel panel-default">
<div class="panel-body">

<ul class="nav nav-tabs nav-justified">
  <li class="active"><a data-toggle="tab" href="#kelas7a">Kelas 7A</a></li>
  <li><a data-toggle="tab" href="#kelas7b">Kelas 7B</a></li>
  <li><a data-toggle="tab" href="#kelas7c">Kelas 7C</a></li>
</ul><br>

<div class="tab-content">
  <div id="kelas7a" class="tab-pane fade in active">
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
	</thead>
	<tbody>
	<?php
		foreach($kelas7a as $x){
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
		</tr>
	<?php } ?>
	</tbody>
	</table>
  </div>
  <div id="kelas7b" class="tab-pane fade">
       <table class='table table-striped table-hover display' id='table_id2'>
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
	</thead>
	<tbody>
	<?php
		foreach($kelas7b as $x){
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
		</tr>
	<?php } ?>
	</tbody>
	</table>
  </div>
  <div id="kelas7c" class="tab-pane fade">
        <table class='table table-striped table-hover display' id='table_id3'>
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
	</thead>
	<tbody>
	<?php
		foreach($kelas7c as $x){
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
		</tr>
	<?php } ?>
	</tbody>
	</table>
  </div>
</div> 

     
</div>