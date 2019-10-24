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


	$getdata = mysqli_query($koneksi,"SELECT * FROM data_mahasiswa WHERE npm ='$npm'"); 
	$rows = mysqli_num_rows($getdata);

	$respose = array();

	if($rows > 0 )
	{
		$query = "UPDATE data_mahasiswa SET npm='$npm',jurusan='$jurusan',prog_studi='$prog_studi',dosen_pa='$dosen_pa',semester='$semester',tahun_ajaran='$tahun_ajaran',ip_smt_lalu='$ip_smt_lalu',jumlah_sks='$jumlah_sks' WHERE npm='$npm'";
		$exequery = mysqli_query($koneksi,$query);
		if($exequery)
		{
				$respose['code'] =1;
				$respose['message'] = "Update Berhasil";
		}
		else
		{
				$respose['code'] =0;
				$respose['message'] = "Gagal Update";
		}
	}
	else
	{
				$respose['code'] =0;
				$respose['message'] = "Gagal Update : data tidak ditemukan";
	}
	

	echo json_encode($respose);
?>