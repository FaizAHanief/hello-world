<html>
<head>
	<title>Latihan 1 - Data Pelanggan</title>
</head>
<body>
	<?php
		$arrNoPel=array("P001","P002","P003","P004","P005","P006","P007","P008","P009","P010");
		$arrNama=array("Dono","Kasino","Indro","OmaeWa","MoShindeiru","Nani","Cheeki","Breeki","Darth","Raven");
		$arrAlamat=array("Jl.Warkop","Jl.Warkop","Jl.Warkop","Jl.Shinu","Jl.Shinde","Jl.Nanda","Jl.Westen","Jl.Spai","Jl.Sito","Jl.Lodo");
		$arrKota=array("Jakarta","Jakarta","Jakarta","Tangerang","Bekasi","Bogor","Bandung","Surabaya","Semarang","Aceh");
		$arrLahirKota=array("Jakarta","Jakarta","Jakarta","Tokyo","Tokyo","Tokyo","Kiev","Kiev","Hoth","Tirith");
		$arrLahirTanggal=array("24-Juli-1975","24-Agustus-1975","24-September-1975","09-Oktober-1942","13-Januari-1940","26-Maret-1941","10-September-1980","11-September-1980","07-Februari-1970","06-April-1968");
		$arrJenKel=array("Laki-Laki","Laki-Laki","Laki-Laki","Laki-Laki","Laki-Laki","Perempuan","Laki-Laki","Laki-Laki","Laki-Laki","Perempuan");
		function tmpttgllahir($str1,$str2)
			{
				$str3=$str1.", ".$str2;
				return $str3;
			}
		echo "<table border=1 color=black cellpadding=7 cellspacing=0>";
		echo "	<tr>
					<td colspan=6 align=center>
						<font size=5><b>DATA PELANGGAN</b></font><br>
						Per Tanggal ".date("d-m-Y")."
					</td>
				</tr>";
		echo "	<tr>
					<td>No PLG</td>
					<td>Nama</td>
					<td>Alamat</td>
					<td>Kota</td>
					<td>Tempat, Tanggal Lahir</td>
					<td>Jenis Kelamin</td>
				</tr>";
		for($i=0;$i<10;$i++)
			{
				echo "	<tr>
							<td>$arrNoPel[$i]</td>
							<td>$arrNama[$i]</td>
							<td>$arrAlamat[$i]</td>
							<td>$arrKota[$i]</td>
							<td>".tmpttgllahir($arrLahirKota[$i],$arrLahirTanggal[$i])."</td>
							<td>$arrJenKel[$i]</td>
						</tr>";
			}
		echo "</table>";
		reset($arrNoPel);
		reset($arrNama);
		reset($arrAlamat);
		reset($arrKota);
		reset($arrLahirKota);
		reset($arrLahirTanggal);
		reset($arrJenKel);
	?>
</body>
</html>