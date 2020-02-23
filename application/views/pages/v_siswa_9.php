<div class="row">
    <div class="col-lg-4 pull-left">
        <h4>Data Siswa Kelas 9</h4>
    </div>

</div>
<div class="panel panel-default">
<div class="panel-body">
<table class='table table-striped table-hover display' id='table_id'>
	<thead>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Alamat</th>
		<th>JK</th>
		<th>Kelas</th>
		<th>Status</th>
		<th>Tahun Masuk</th>
		<th>Tahun Lulus</th>
		<th>Aksi</th>
	</thead>
	<tbody>

		<tr>
			<td><?php //echo $x->id_guru; ?></td>
			<td><?php //echo $x->nm_guru; ?></td>
			<td><?php //echo $x->alamat; ?></td>
			<td><?php //echo $x->jenis_kelamin; ?></td>
			<td><?php //echo $x->id_mapel; ?></td>
			<td><?php //echo $x->id_mapel; ?></td>
			<td><?php //echo $x->wali_kelas; ?></td>
			<td>********</td>
			<td>
			<button class="btn btn-warning" onclick="edit_guru()"><i class="glyphicon glyphicon-pencil"></i></button>
				<button class="btn btn-danger" onclick="hapus_guru()"><i class="glyphicon glyphicon-remove"></i></button>
			</td>
		</tr>

	</tbody>
</table>
</div>
</div>