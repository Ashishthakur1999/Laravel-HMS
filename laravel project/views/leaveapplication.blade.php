<html>
<head>
<title> Hostel Leave Application</title>
<style>
.header{
	margin-top:1px;
	margin-left:0.5px;
	margin-right:0.5px;
	opacity:1;
	background-color:lightblue;
}
.bar{
	margin-top:-60px;
	height:50px;
	width:auto;
	background-color:grey;
	color:white;
	
}
table,th,td{
	border: 1px solid black;
	width:1000px;
	height:100px;
	
}
input[type=button], input[type=submit], input[type=reset] {
  background-color:grey;
  width:100px;
  height:50px;
  border:1px solid blue;
  color: white;
  border-radius: 15px;
  padding: 5px;
}
</style>
</head>
<body>
<div class="header">
<img src="hostel3.png" width="100%" height="40%">
<div style="position: relative; margin-left: 450px; top: -130px; color: white;">
	<h1>
		<strong>Hostel Management System</strong>
	</h1>
</div>
</div>
<div>

<center> <h1>Hostel Leave Application</h1></center>
</div>
<div class="leave">
<center>
<table>
<tr>
<td colspan="2"><center> Select Term <input type="radio" name="term" value="male" checked> Term1
             <input type="radio" name="term" value="Female"> Term2 </center>    </td>
</tr>
<tr>
<td><center> Registration Number<input type="text" placeholder="115266265" disabled>        </center>    </td>
<td><center>  Name <input type="text" placeholder="Ashish Thakur" disabled>     </center>      </td>
</tr>
<tr>
<td> <center>Leave Type<input type="text" placeholder="Rajeev Kumar" disabled>        </center>    </td>
<td> <center> Reason of Leaving<textarea style="width:100px; height:100px;">   </textarea>      </center>     </td>
</tr>
<tr>
<td><center> Mother Name <input type="text" placeholder="Sarita Devi" disabled>      </center>      </td>
<td><center> Phn No.  <input type="text" placeholder="9459875155" disabled>       </center>    </td>
</tr>
<tr>
<td><center>start Date<input type="date"></center></td>
<td><center>End Date<input type="date"></center></td>
</tr>
</table>
</center>
<center> <input type="submit" value="apply" name=""></center>

</div>

</body>
</html>