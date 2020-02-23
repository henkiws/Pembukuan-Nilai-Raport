<?php
//buat date
    $array_hari = array(1=>'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
    $array_bulan = array(1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    $hari = $array_hari[date('N')];
    $bulan = $array_bulan[date('n')];
    $tanggal = date('j');
    $tahun = date('Y');

//buat terbilang angka
    					function terbilang($x){
						$x=abs($x);
						$angka=array("","satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","sepuluh","sebelas");
						$temp="";
						if($x<12){
							$temp=" ".$angka[$x];
						}elseif($x<20){
							$temp=terbilang($x-10)." belas";
						}elseif($x<100){
							$temp=terbilang($x/10)." puluh".terbilang($x%10);
						}elseif($x==100){
							$temp="seratus";
						}
						return ucwords($temp);
					}//end of function terbilang
?>


<div class="row">
    <div class="col-lg-4 pull-left">
        <h4>Daftar Nilai Raport Siswa</h4>
    </div>
    <div class="col-lg-8 pull-right" style="text-align:right">
    	<h4>
             <button id="cmd" class="btn btn-success">Save PDF</button>
             <a href="<?php echo base_url('index.php/wali_kelas'); ?>"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Kembali</button></a>
        </h4>
    </div>
</div>

<div class="panel panel-default">
<div class="panel-body">
	<div id="ini">
		<div>
		<div class="row">
			<div class="col-lg-12">
				<img src="<?php echo base_url('assets/logo_header.png'); ?>" class="img-rounded" width="100%" height="100%">
			</div>
		</div>
	<hr>
	<?php
		foreach($dataSiswa as $x){ ?>
		<div class="row">
			<div class="col-lg-6">
				<div class="col-lg-4">
					NIS
				</div>
				<div class="col-lg-1">
					:
				</div>
				<div class="col-lg-7">
					<?php echo $x->nis; ?>
				</div>
				<div class="col-lg-4">
					Nama Siswa
				</div>
				<div class="col-lg-1">
					:
				</div>
				<div class="col-lg-7">
					<?php echo $x->nm_siswa; ?>
				</div>
				<div class="col-lg-4">
					Nama Sekolah
				</div>
				<div class="col-lg-1">
					:
				</div>
				<div class="col-lg-7">
					SMP Negeri x Surakarta
				</div>
	
			</div>
			<div class="col-lg-6">
				<div class="col-lg-4">
					Kelas
				</div>
				<div class="col-lg-1">
					:
				</div>
				<div class="col-lg-7">
					<?php echo $x->kelas; ?>
				</div>
				<div class="col-lg-4">
					Semester
				</div>
				<div class="col-lg-1">
					:
				</div>
				<div class="col-lg-7">
					I (satu)
				</div>
				<div class="col-lg-4">
					Tahun Ajaran
				</div>
				<div class="col-lg-1">
					:
				</div>
				<div class="col-lg-7">
					<?php foreach ($joinNilai as $a){} echo $a->tahun_ajaran; ?>
				</div>
			</div>
		</div><br>
	<?php		
		}
	?>
	<label>A. Nilai Pengetahuan</label>
<table border="1" id="ss" width="100%">
	<thead>
		<tr>
			<th rowspan="2"><center>No</th>
			<th rowspan="2"><center>Mata Pelajaran</th>
			<th rowspan="2"><center>KKM</th>
			<th colspan="2"><center>Nilai UTS</th>
			<th rowspan="2"><center>Keterangan</th>
		</tr>
		<tr>
			<th><center>Angka</th>
			<th><center>Huruf</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		$jmlUTS=0;
		foreach($joinNilai as $x) {
		?>
		<tr>
			<td><?php echo "<center>".$no++; ?></td>
			<td><?php echo $x->nm_mapel; ?></td>
			<td><?php echo "<center>".$x->kkm; ?></td>
			<td><?php echo "<center>".$x->uts ?></td>
			<td>
				<?php
					//panggil fungsi terbilang
					echo terbilang(ucfirst($x->uts));
				?>
			</td>
			<td><?php if($x->uts>=$x->kkm){echo "<center>TUNTAS";}else{echo "<center>BELUM TUNTAS";} ?></td>
		</tr>
		<?php
		$jmlUTS=$jmlUTS+$x->uts;
			}
		?>
	</tbody>
	<tfooter>
		<tr>
			<th colspan="3"><center>Jumlah Nilai</th>
			<th><?php echo "<center>".$jmlUTS; ?></th>
		</tr>
		<tr>
			<th colspan="3"><center>Rata-Rata Nilai</th>
			<th><?php $rata=$jmlUTS/($no-1); echo "<center>".number_format($rata,2); ?></th>
		</tr>
	</tfooter>
</table>
<div class="row">
	<div class="col-lg-4">
		<label>B. Absensi Kelas</label>
		<table border="1"  width="100%">
			<?php
				foreach($dataSiswa as $x){ ?>
			<tr>
				<td>Tanpa Keterangan</td>
				<td><?php echo "<center>".$x->absen_alfa; ?> hari</td>
			</tr>
			<tr>
				<td>Izin</td>
				<td><?php echo "<center>".$x->absen_ijin; ?> hari</td>
			</tr>
			<tr>
				<td>Sakit</td>
				<td><?php echo "<center>".$x->absen_sakit; ?> hari</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="col-lg-4">
		
	</div>
	<div class="col-lg-4">
		<label>C. Lain - Lain</label>
		<table border="1" width="100%" >
			<tr>
				<td>Budi Pekerti</td>
				<td>A (Baik Sekali)</td>
			</tr>
			<tr>
				<td>Pramuka</td>
				<td>B (Baik)</td>
			</tr>
			<tr>
				<td>Ekstrakulikuler</td>
				<td>B (Baik)</td>
			</tr>
		</table>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="row">
	<div class="col-lg-6" align="center">
		<br>
		Orang Tua Siswa
		<br><br><br><br>
		<?php
		foreach($dataSiswa as $x){ 
			echo $x->nm_ortu;
		}
		?>
	</div>
	<div class="col-lg-6" align="center">
		<?php echo $hari.', '.$tanggal.' '.$bulan.' '.$tahun ;?>
		<?php foreach($dataGuru as $x) { 
		echo "<br>"."Guru Wali Kelas ";
		echo "<br><br><br><br>";
		echo $x->nm_guru;
		 } 
		?>
	</div>
</div>

</div>

</div>
</div>
</div>

       <script type="text/javascript">
       var doc = new jsPDF();


       $('#cmd').click(function () {
            var element = document.getElementById('ini');
			html2pdf(element, {
			  margin:       0.2,
			  filename:     'Raport-<?php echo $hari.'.pdf'; ?>',
			  image:        { type: 'jpeg', quality: 0.98 },
			  html2canvas:  { dpi: 192, letterRendering: true, height: null, width: null },
			  jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
			});
	    });

     </script>