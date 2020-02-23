<?php
class Response extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 =>'nis',
		1 =>'nm_siswa', 
		2 => 'alamat',
		3 => 'tanggal_lahir',
		4 => 'jenis_kelamin',
		5 => 'kelas'
	);

	$where = $sqlTot = $sqlRec = "";

	// getting total number records without any search
	$sql = "SELECT nilai.`id_nilai`,siswa.`nis`, siswa.`nm_siswa`,nilai.`id_mapel`,mapel.`nm_mapel`, nilai.`uts`
			FROM siswa 
			INNER JOIN (nilai INNER JOIN mapel ON nilai.`id_mapel`=mapel.`id_mapel`)
			ON siswa.`nis`=nilai.`nis`
			WHERE nilai.`nis`='12001'";
	$sqlTot .= $sql;
	$sqlRec .= $sql;


 	$sqlRec .=  " ORDER BY nis";

	$queryTot = mysqli_query( $sqlTot) or die("database error:". mysqli_error());


	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query( $sqlRec) or die("error to fetch employees data");

	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
			"draw"            => 1,   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);

	echo json_encode($json_data);  // send data as json format
	}
}
?>