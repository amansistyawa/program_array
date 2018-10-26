<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="#" method="GET">
<table>
<tr>
<td><label> Type text</label></td>
<td>
<Input type="text" name="nama" placeholder="ketikkan NAma" >
</td>
<br>
</tr>
<tr>
<td>
<label> Type password </label><br></td>
<td>
<Input type="password" name="password" placeholder="ketikkan password" >
<br>
</td>
</tr>
<tr>
<td>
<label> Type email</label></td>
<td>
<Input type="email" name="email" placeholder="ketikkan email" >
<br>
</td>
</tr>
<tr>
<td>
<label> Type radio</label></td>
<td>
<Input type="radio" name="gender" value="M" >Male
<Input type="radio" name="gender" value="F" >female
<br>
</td>
</tr>
<tr>
<td>
<label> Type reset</label></td>
<td width="100px">
<Input type="reset" name="reset" value="reset"></td>
<td>
<label> Type buttom</label></td>
<td>
<Input type="button" name="button" value="button" ></td>
<td>
<label> Type submit</label></td>
<td>
<Input type="submit" name="submit" value="Subsmit"  >
</td>
</tr>
</table>
</form>
<?php
      if($_GET){
      	echo "nama :".$_GET['nama']."<br>";
      	echo "password :".$_GET['password']."<br>";
      	echo "email :".$_GET['email']."<br>";
      }

?>
</body>
</html>