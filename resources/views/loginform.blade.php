<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body text="brown" style="opacity: 0.9">
<center>
<br>
<form action="login" method="post">
@csrf
<a href="/"><button>Close</button></a>
	<fieldset style="width: 30%; height: 200px; background-color: gray;">

		<legend align="center"><b><h2>LoginForm</h2></b></legend>
		<input type="text" name="username" placeholder="Enter User_Name" required style="width: 75%; text-align: center;height: 20%;">
	<br><br>

	<input type="text" name="password" placeholder="Enter PassWord" required style="width: 75%; text-align: center;height: 20%;">
	<br><br>

		<button type="submit" style="width: 25%; height: 20%;">SignIn</button>&nbsp;&nbsp;
		<button type="reset" style="width: 25%;" style="background-color: red;">
		Reset</button>

	</fieldset>
	

	</fieldset>
</form>
</center>
</form>
</body>
</html>