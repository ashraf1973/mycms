
  <?php 
     include("includes/database.php"); 
  
		 if(isset($_GET['post'])){
		 $post_id=$_GET['post'];
		 $get_posts="select * from posts where post_id='$post_id'";
		 $run_posts=mysql_query($get_posts);

         $row=mysql_fetch_array($run_posts);
         $post_new_id=$row['post_id'];

    }
	?>
	
			   <h2>
		Comments so  far
		<?php
		
		   $get_comments="select * from  comments where post_id='$post_new_id' AND status='approve'";
		  $run_comments=mysql_query($get_comments);
		  $count=mysql_num_rows($run_comments);
		
		  echo "(".$count.")";
	
	 
	
	?> 
   
   
   
   
   
   
   
    </h2>

	<?php
	
	

	
	  $get_comments="select * from  comments where post_id='$post_new_id' AND status='approve'";
	  $run_comments=mysql_query($get_comments);
	  while($row_comments=mysql_fetch_array($run_comments)){
	    $comment_name=$row_comments['comment_name'];
	    $comment_text=$row_comments['comment_text'];
		
		echo "<h3 style='background:black;padding-left:10px;color:white;' >  $comment_name <i>says</i></h3>
		   <p style='background:#FF9900;padding-left:5px;'>$comment_text</p>
		
		
		";

	  }
	
	?>



        <form method="post" action="details.php?post=<?php echo $post_new_id ;?>">
		  <table width="820" align="center" bgcolor="#99FFCC">
		     <tr>
			   <td align="right"><strong>Your Name:</strong></td>
			   <td><input type="text" name="comment_name" size="40" /></td>
			 </tr>
		     <tr>
			   <td align="right"><strong>Your Email:</strong></td>
			   <td><input type="text" name="comment_email" size="40" /></td>
			 </tr>
			 <tr>
			   <td align="right"><strong>Your Comment:</strong></td>
			   <td><textarea name="comment" cols="31" rows="16"></textarea></td>
			 </tr>
		     <tr>
			   <td colspan="4" align="center"><input type="submit" name="submit" value="Post Comment" /></td>
			 </tr>


		  
		  </table>
		
		
		</form>
	   <?php
	      if(isset($_POST['submit'])){
		    $post_com_id=$post_new_id;
		    $comment_name=$_POST['comment_name'];
			$comment_email=$_POST['comment_email'];
			$comment=$_POST['comment'];
			$status="unapprove";
		  
		  if($comment_name=='' OR $comment_email=='' OR $comment==''){
		    
			 echo "<script>alert('Please fill in  all blank')</script>";
			 echo "<script>window.open('details.php?post=$post_id')</script>";
		      exit();
		  
		  }
		  else{
		   $comment_query="insert into comments(post_id,comment_name,comment_email,comment_text,status)values('$post_com_id','$comment_name','$comment_email','$comment','$status')";
		  $run_query=mysql_query($comment_query);
		     echo "<script>alert('your comment will published after approval')</script>";
			 echo "<script>window.open('details.php?post=$post_id')</script>";

		  
		  
		  
		  }
		  
		  }
	     
	   
	   
	   
	   
	   
	   
	   ?>

			 
			 
