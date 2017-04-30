<?php
 session_start();
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
</head>

<body bgcolor="#999999">
  <form method="post" action="login.php">
  
       <table width="400" border="10" align="center" bgcolor="#FF99CC">
	       <tr>
		     <td bgcolor="#FFFF00" colspan="4" align="center"><h1>Admin Login form</h1></td>
		   </tr>
		   <tr>
		      <td align="right">User Name:</td>
		      <td> <input type="text" name="user_name" /></td>
		   </tr>
	   
	   		  <tr>
		      <td align="right">User Password:</td>
		      <td> <input type="password" name="user_pass" /></td>
		   </tr>
		   <tr>
		     <td align="center" colspan="4"><input type="submit" name="login" value="login" /></td>
		   </tr>

	   
	   
	   </table>
  
  
  
  </form>


</body>
</html>
<?php 
  include("includes/database.php");
   if(isset($_POST['login'])){
     $user_name=mysql_real_escape_string ($_POST['user_name']);
	 $user_pass=mysql_real_escape_string ($_POST['user_pass']);
	 $encrypt=md5($user_pass);

    $admin_query="select * from admin_login where user_name='$user_name' AND user_pass='$user_pass'";
	$run=mysql_query($admin_query);
	
	if(mysql_num_rows($run)>0){
	 $_SESSION['user_name']=$user_name;
	  echo "<script>window.open('index.php','_self')</script>";
	
	}
	else{
	  echo "<script>alert('username or  password is  incorrect')</script>";
	}
	
   }



?>
