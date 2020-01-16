<?php
ini_set("display_errors","on");
ini_set("error_reporting",E_ALL & ~E_NOTICE);
require_once("dbclass.php");
$sql=new MySQL_Class();
$sql->Create("admin_training");
$id=$_REQUEST['id'];
?>

<?php
if((isset($_POST['save'])) && ($_POST['save'] == "Update"))
{	

		$query="update tbl_register set reg_firstname='".$_POST["fname"]."', reg_lastname='".$_POST["lname"]."',reg_age=".$_POST["age"].",reg_username='".$_POST["username"]."',reg_password='".$_POST["password"]."' where reg_id='".$id."'";
		$result = $sql->Update($query);
		header("Location:registerlist.php");
}
if((isset($_POST['save'])) && ($_POST['save']=="Save"))
{
		$query="insert into tbl_register set reg_firstname='".$_POST["fname"]."', reg_lastname='".$_POST["lname"]."',reg_age=".$_POST["age"].",reg_username='".$_POST["username"]."',reg_password='".$_POST["password"]."'";
		$result = $sql->Insert($query);
		header("Location:registerlist.php");
}
$qry="select * from tbl_register where reg_id='".$id."'";
$sql->QueryItem($qry);
$row = $sql->data;
?>

<html>
<head>
	<script>
		function validateForm() 
		{
			if(document.getElementById("fname").value=="")
			{
				alert("First name must be filled out");
				return false;
			}
			if(document.getElementById("lname").value=="")
			{
				alert("Last name must be filled out");
				return false;
			}
			if(document.getElementById("age").value=="")
			{
				alert("age must be filled out");
				return false;
			}
			if(document.getElementById("username").value=="")
			{
				alert("Username must be filled out");
				return false;
			}
			if(document.getElementById("password").value=="")
			{
				alert("Password must be filled out");
				return false;
			}
		}
</script>
</head>
<body>
<form name="frm" action="" method="post" onsubmit="return validateForm()">
 <table>
	<tr><td>First name</td><td><input type="text" id="fname" name="fname" value="<?php echo $row['reg_firstname'];?>"></td></tr>
	<tr><td>Last name</td><td><input type="text" id="lname" name="lname" value="<?php echo $row['reg_lastname'];?>"></td></tr>
	<tr><td>Age</td><td><input type="text" id="age" name="age" value="<?php echo $row['reg_age'];?>"></td></tr>
	<tr><td>Username</td><td><input type="text" id="username" name="username" value="<?php echo $row['reg_username'];?>"></td></tr>
	<tr><td>Password</td><td><input type="text" id="password" name="password" value="<?php echo $row['reg_password'];?>"></td></tr>
	
	
	<input type="hidden" name="id" id="id" value="<?php echo $row['reg_id'];?>"/>
	<?php
	if((isset($id)) && ($id!=""))
	{
?>
		<tr><td></td><td><input type="submit" id="submit" name="save" value="Update"></td></tr>
		<?php
	}
	else
	{
		?>
		<tr><td></td><td><input type="submit" name="save" value="Save"></td></tr>
		<?php
	}
		?>
	
	
 </table>
</form>
</body>
</html>

