<?php
  if ($_POST) 
	{
		$ipk = $_POST['ipk'];
		if ($ipk<2.75) 
		{
		 	$keterangan ="<font color='red'>mahasiswa DO</font>";
		}
		else 
		{
			$keterangan ="mahasiswa tidak DO";
		} 

		echo "<br>";
		echo "Status DO Mahasiswa <br>";
		echo "IPK Mahasiswa : " . $ipk;
		echo "<br>";
		echo "Status : " . $keterangan;

	}
?>
//TODO 5: Tentukan status mahasiswa berdasarkan input yang diberikan


//TODO 6: Tampilkan pesan status DO mahasiswa. Jika hasilnya DO, 
//        tampilkan dengan kalimat dengan latar belakang merah.
