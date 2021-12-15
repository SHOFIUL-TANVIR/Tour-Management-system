<!DOCTYPE html>
<html>
<body>

<h1>Welcome to Travel Agency Website</h1>
<form action="second.php" method="post">
<table>
<tr>
<td>User Name</td>
<td>:</td>
<td><input type="text" id="uname" name="uname"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" id="password" name="password"></td>
</tr>
<tr>
<td>Phone Number</td>
<td>:</td>
<td><input type="phone number" id="phone number" name="phone number"></td>
</tr>

<tr>
<td>Gender</td>
<td>:</td>
<td>
<input type="radio" name="gender" value="Male"> &nbsp; Male
<input type="radio" name="gender" value="Female"> &nbsp; Female
<input type="radio" name="gender" value="Others"> &nbsp; Others
</td>
</tr>
<tr>
<td>Booking</td>
<td>:</td>
<td>
<input type="checkbox" name="Books" value="Car"> &nbsp;Bus
<input type="checkbox" name="Books" value="Car"> &nbsp;Train
<input type="checkbox" name="Books" value="Car"> &nbsp; Plane
<input type="checkbox" name="Books" value="Car"> &nbsp; Launch
</td>
</tr>
<tr>
<td>Visit</td>
<td>:</td>
<td>
<select name="Visit">
<option value="1">Cox's Bazar</option>
<option value="2">Sajek</option>
<option value="3">Sundorban</option>
</select>
</td>
</tr>
<tr>
<td>Address</td>
<td>:</td>
<td>
<textarea rows="2" cols="2" name="address"></textarea>
</td>
</tr>
<tr>
<td>Area</td>
<td>:</td>
<td>
<textarea rows="2" cols="2" name="a"></textarea>
</td>
</tr>
<tr>
<td><input type="sign up" value="Sign up" name="btnSign up"></td>
</tr>
</table>
</form>

<?php
?>
</body>
</html>
