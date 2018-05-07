<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<body>
<form action="http://localhost/talita-booking/index.php/user/add" method="POST">
<table>
	<tr><td>Username</td><td> : </td><td><input name="username" value=""></td></tr>
	<tr><td>Pass</td><td> : </td><td><input name="password" type="password" value=""></td></tr>
	<tr><td>Fullname</td><td> : </td><td><input name="fullname" value=""></td></tr>
	<tr><td>Level</td><td></td><td><select name ="level">
		<option value="admin">Admin</option>
		<option value="user">User</option></select></td></tr>
	<tr><td><input name="tombol" type="submit" value="simpan"></td></tr>
	</form>
	</table>
</body>
</html>