<!DOCTYPE html>
<html>
<body>
<form method="post" name="nform" id="nform" action="" >
<table>
<tr>
<td> first name</td>
<td><input type="text" name="fname" id="fname" required></td>
</tr>
<tr>
<td> last name</td>
<td><input type="text" name="lname" id="lname" ></td>
</tr>
<tr>
<td> email</td>
<td><input type="text" name="email" id="email" ></td>
</tr>
<tr>
<td> password</td>
<td><input type="text" name="password" id="password" ></td>
</tr>
<tr>
<td> mobile</td>
<td><input type="text" name="mobile" id="mobile" ></td>
</tr>
<tr>
<td>address</td>
<td><input type="text" name="address" id="address" >
<input type="hidden" name="id" id="id">
</td>
</tr>
 <tr>
<td>Select your Country</td>
<td>
<select name="country" id="country">
<option value="" selected="selected" disabled="disabled">Select your country</option>
<option value="1">India</option>
<option value="2">Pakistan</option>
</select>
</td>
</tr> 
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" id="submit" value="Register"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript" src="jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="jquery.validate.1.11.1.js" ></script>
<script type="text/javascript" src="register.js" ></script>
</body>
</html>
