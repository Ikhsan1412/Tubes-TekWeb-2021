<!DOCTYPE html>
<html lang="en">
<head>
 <title>Update Jaket</title>
 <style>
 label {
 display: inline-block;
 width: 100px;
 }
 </style>
</head>
<body>
<h1>Update Jaket</h1>
<form action="<?php echo site_url('Admin/prosesUpdate/'.$jaket->id_jaket);?>" method="post">
		<label>merk</label><input type="text" name="merk"><br>
		<label>color</label><input type="text" name="color"><br>
		<label>size</label><input type="text" name="size"><br>
		<label>harga</label><input type="text" name="harga"><br>
		<label>jenis</label><input type="text" name="jenis"><br>
		<input type="submit" value="Update">
</form>
</body>
</html>