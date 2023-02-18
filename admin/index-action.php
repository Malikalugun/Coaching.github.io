<?php session_start();
 
require "./conn.php";
if($_POST['username'] && $_POST['password'])
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
//Sql Query for Sign In...
$sql="select * from tbl_admin where username='$username'";

$smt= mysqli_query($conn,$sql);

	if($rs=mysqli_fetch_assoc($smt))
	{
		if(md5($password)==$rs['password'])
		{
			//Creating Session...
			$_SESSION['user_id'] = $rs['id'];
			$_SESSION['username'] = $rs['username'];
         
			$_SESSION['password']=$rs['password'];
			$_SESSION['role']=$rs['role'];
			session_write_close();
			echo "Login Success";
			}
			else
			{
				echo'<div class="alert alert-danger">
				<strong>Required !</strong> Invalid password.
			  </div>'.mysqli_error($conn);
			}
	}

	else
	{
		echo'<div class="alert alert-danger">
		<strong>Required !</strong> Invalid username.
	  </div>'.mysqli_error($conn);
	}
}
else
{
	echo'<div class="alert alert-danger">
    <strong>Required !</strong> Please enter a valid username and password.
  </div>';
}
