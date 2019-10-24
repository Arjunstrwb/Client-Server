<?php 
	include_once('connection.php'); 


	$nama =$_POST['nama'];
	$npm=$_POST['npm'];
	$jurusan=$_POST['jurusan'];
	$prog_studi=$_POST['prog_studi'];
	$dosen_pa=$_POST['dosen_pa'];
	$semester=$_POST['semester'];
	$tahun_ajaran=$_POST['tahun_ajaran'];
	$ip_smt_lalu=$_POST['ip_smt_lalu'];
	$jumlah_sks=$_POST['jumlah_sks'];


	$insert = "INSERT INTO data_mahasiswa(nama,npm,jurusan,prog_studi,dosen_pa,semester,tahun_ajaran,ip_smt_lalu,jumlah_sks) VALUES ('$nama','$npm','$jurusan','$prog_studi','$dosen_pa','$semester','$tahun_ajaran','$ip_smt_lalu','$jumlah_sks')";

	$exeinsert = mysqli_query($koneksi,$insert);

	$response = array();

	if($exeinsert)
	{
		$response['code'] =1;
		$response['message'] = "Success ! Data di tambahkan";
	}
	else
	{
		$response['code'] =0;
		$response['message'] = "Failed ! Data Gagal di tambahkan";
	}

		echo json_encode($response);

 ?>