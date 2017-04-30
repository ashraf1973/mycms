<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>A News Platfrom</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>

<body>
<div class="container">

 <div class="head">
 <a href="index.php"> <img id="logo" src="images/news1.gif" /></a>
  <img id="banner" src="images/banner2.gif"/>
 </div>
     <?php include ("includes/navbar.php");?>

        <div class="post_area">
			 <?php
			 
			    if(isset($_GET['post'])){
				 $post_id=$_GET['post'];
			   $get_posts="select * from posts where post_id='$post_id'";
			   $run_posts=mysql_query($get_posts);
			   while($row_posts=mysql_fetch_array($run_posts)){
			   
				  $post_title=$row_posts['post_title'];
				  $post_date=$row_posts['post_date'];
				  $post_author=$row_posts['post_author'];
				  $post_image=$row_posts['post_image'];
				  $post_content=$row_posts['post_content'];
		
				echo "
				
				 <h2>$post_title</h2>
				 <span><i>Posted by </i> <b>$post_author </b> &nbsp; On <b>$post_date </b></span><span style='color:brown;'></span>
				 <img src='admin/news_images/$post_image' width='300' height='300'/>
				 <div>$post_content</div>
			
				";
		
		
			   
			   }
		   
			}
			include("includes/comment_form.php");
			 ?>
       </div>
	   
      <?php include ("includes/sidebar.php");?>

 
 <div class="footer">
    <h1 style="padding:20px; text-align:center;"> &copy; All Rights Reserved 2016 -Onlinebd.com </h1>
 </div>
</div>
</body>
</html>
