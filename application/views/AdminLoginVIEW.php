<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<br><a href='http://localhost/TubesTekWeb/index.php/User/'> HOME </a></br>
	<br><a href='http://localhost/TubesTekWeb/index.php/User/jacketVIEW'> LIST JACKET </a></br>
	<br><a href='http://localhost/TubesTekWeb/index.php/User/aboutVIEW'> ABOUT </a></br>
	<br><a href='http://localhost/TubesTekWeb/index.php/User/loginForm'> LOGIN </a></br>
	
	Login Admin
		<form action="http://localhost/TubesTekWeb/index.php/Admin" method="post">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
</body>
</html>