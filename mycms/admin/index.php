<?php
 session_start();
 if(!isset($_SESSION['user_name'])){
   header("location:login.php");
 
 }
 else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="wrapper">
   <a href="index.php" > <div class="header"></div></a>
	<div class="left">
	   <h3 style="padding:5px;">Manage Content</h3>
	  <a href="index.php?insert_post">Insert New Post</a>
	  <a href="index.php?view_posts">View all Posts</a>
   	  <a href="index.php?insert_cat">Insert New Category</a>
  	  <a href="index.php?view_cats">View all Categories</a>
 	  <a href="index.php?view_comments">View all Comments</a>
	  <a href="logout.php">Admin Logout</a>

	
	</div>
	<div class="right">
	 <span style="padding:5px; margin:5px;" ><strong>To do Tasks:</strong><span style="color:red; padding:5px; margin:5px;"><a href="index.php?view_comments">Pending Comments(0)</a></span></span>
	
			<?php
		  if(isset($_GET['insert_post'])){
		   include("includes/insert_post.php");
		  }
		   if(isset($_GET['view_posts'])){
		   include("includes/view_posts.php");
		  }
		  if(isset($_GET['edit_post'])){
		  include("includes/edit_post.php");

		  }


		
		?>

	
	</div>
  
  
  
  </div>
</body>
</html>
<?php }?>