<?php 
	include_once('connection.php'); 


	$npm = $_POST['npm'];

	$getdata = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa WHERE npm ='$npm'");
	$rows = mysqli_num_rows($getdata);

	$delete = "DELETE FROM data_mahasiswa WHERE npm ='$npm'";
	$exedelete = mysqli_query($koneksi,$delete);

	$respose = array();

	if($rows > 0)
	{
		if($exedelete)
		{
			$respose['code'] =1;
			$respose['message']= "Berhasil Hapus";
		}
		else
		{
		$respose['code'] =0;
		$respose['message'] = "Gagal Hapus";
		}
	}
	else
	{
		$respose['code'] =0;
		$respose['message'] = "Gagal Hapus, Data Tidak Ditemukan";


	echo json_encode($respose);

?>