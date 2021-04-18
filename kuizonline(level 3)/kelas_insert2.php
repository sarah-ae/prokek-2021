<?php  
include 'keselamatan.php';
?>

<link rel="stylesheet" type="text/css" href="borang.css">
<link rel="stylesheet" type="text/css" href="button.css">

<div class="all">

	<!-- SIMPAN SINI -->
	<?php include 'header.php'; ?>
	<?php include 'menu_guru.php'; ?>

	<div class="kandungan">
		<h3 class="panjang">TAMBAH KELAS</h3>
		<form class="panjang" action="kelas_insert.php" method="post">
			<table>
				<tr>
					<td>ID Kelas</td>
					<td><input type="text" name="idkelas" placeholder="K01" required></td>
				</tr>
				<tr>
					<td>Nama Kelas</td>
					<td><input type="text" name="namakelas"></td>
				</tr>
			</table>
			<button class="tambah" type="submit">Tambah</button>
		</form>
	</div>

</div>