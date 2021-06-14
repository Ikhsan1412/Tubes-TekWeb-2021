<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Jaket</title>
	<style>
		label {
			display: inline-block;
			width: 100px;
		}
	</style>
</head>
<body>
	<h1>Tambah Jaket</h1>
	<?php echo site_url(); ?>
	<form action="<?php echo site_url('Admin/Prosestambah'); ?>" method="post">
		<label>merk</label><input type="text" name="merk"><br>
		<label>color</label><input type="text" name="color"><br>
		<label>size</label><input type="text" name="size"><br>
		<label>harga</label><input type="text" name="harga"><br>
		<label>jenis</label><input type="text" name="jenis"><br>
		<input type="submit" value="Tambah">
	</form>
</body>
</html>