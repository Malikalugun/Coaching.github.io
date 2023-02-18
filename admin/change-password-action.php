<?php
session_start();
require "conn.php";
//Stert Actions...

if($_POST['oldPass'] && $_POST['newpass'] && $_POST['repass'])
{
			$oldPass=$_POST['oldPass'];
			$newpass=$_POST['newpass'];
			$repass=$_POST['repass'];
			$sessionpass=$_SESSION['password'];
			$sessionusername=$_SESSION['username'];
			
		 if(md5($oldPass)!=$sessionpass){
			echo'Error ! Old Password does not Match'; 
				}
				else if($newpass!=$repass){
					echo'Error! Confirm Password not Match'; 
					
					}
					   else{
						
						     $sql="UPDATE `tbl_admin` SET `password`=md5($newpass) where `username`='$sessionusername'";
			
			               $res=mysqli_query($conn,$sql);
			              if($res)
			                    {	
				          echo'Password Changed! Successfully.'; 
			                      }
			                    else
			                     {
			echo'Wrong! thing went wrong'.mysqli_error($conn); 
			                 }
						
						}
			
			
}
else
{
echo'Uncomplete Form! Please Complate the Form'; 
}
		
	
	


?>