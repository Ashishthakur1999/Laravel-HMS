<html>
<head>
	<style>
.form{
	background-color:lightblue;
	margin-left:1px;
	margin-right:1px;
	margin-top:5px;
	padding:10px;
	height:100px;
	border:1px solid black;
	border-radius: 20px;
	opacity: 1.0;
}
input[type=text],input[type=password] {
  width:20%;
  border:5px;
  height:40px;
  border:1px solid black;
  border-radius: 12px;
  padding: 10px;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color:lightgreen;
  width:150px;
  height:50px;
  border:1px solid blue;
  color: white;
  border-radius: 15px;
  padding: 5px;
}
input[type=submit]:hover {
	background-color: blue;
	color: pink;
	}
.img1 {
	height: 400px;
	width: 99%;
	border-radius: 15px;
	border:1px solid black;
	padding: 5px;

}
.text{
margin-top: 20px;

}
</style>
<title> HMS form page</title>
</head>
<body>
<div class="head">
<img src="img2.jpg" class="img1">
<div style="position: relative; margin-left: 480px; top: -250px; color: white;">
	<h1>
		<strong>Hostel Management System</strong>
	</h1>
</div>
</div>
<div  class="form">
<center>
<form action="" method="post" >
<input type="text" class="text"name="id" placeholder="USER ID">
<input type="password" name="pass" placeholder="PASSWORD"><br><br>
<input type="submit" name="submit" value="LOG IN">
</form>
</center>
</div>
</body>