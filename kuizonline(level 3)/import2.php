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
		<h3 class="panjang">IMPORT DATA</h3>
		<form class="panjang import" action="import.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Jadual</td>
					<td>
						<select name="namatable">
							<option value="pelajar">Pelajar</option>
							<option value="soalan">Soalan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nama fail</td>
					<td><input type="file" name="namafail" accept=".txt"></td>
				</tr>
			</table>
			<button class="import" type="submit">Import</button>
		</form>
	</div>

</div>