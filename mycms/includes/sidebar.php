 <div class="side_bar">
   <div id="stitle">Subscribe Via Email </div>
   <div>
<form style="padding:3px;text-align:center;"action="http://feedburner.google.com/fb/a/mailverify"method="post" target="popupwindow"onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=onlineComputerTeacherDhaka','popupwindow','scrollbars=yes,width=550,height=520');return true"><p>Enter your email address:</p><p> <input type="text" style="width:140px;" name="emai" /></p><input type="hidden" value="onlineComputerTeacherDhaka" name="uri"/><input type="hidden"name="loc" value="en-US" />
<input type="submit"  value="subscribe"/></p>
</form>
</div>
   <div id="stitle">Follow Us! </div>
     <div id="social">
	  <img src="images/fb.png" width="50" height="50"  />
	  <img src="images/twitter1.png" width="50" height="50"  />
	  <img src="images/plus.png" width="50" height="50"  />
	  <img src="images/pin.jpg" width="50" height="50" />


	 
	 </div>


  <div id="stitle">Recent Stories </div>

        <?php
          $get_posts="select * from posts order by 1 DESC LIMIT 0,5";
	      $run_posts=mysql_query($get_posts);
         while($row_posts=mysql_fetch_array($run_posts)){
	   
				  $post_id=$row_posts['post_id'];
				  $post_title=$row_posts['post_title'];
                  $post_image=$row_posts['post_image'];
				  $post_content=substr($row_posts['post_content'],0,260);

        echo "
		        <div class='recent_post'>

				 <h2> <a  href='details.php?post=$post_id'>$post_title</a></h2>
				 <img src='admin/news_images/$post_image' width='100' height='100'/>
				 </div>
	
		";


	   
	   }
   
    
     ?>

 
 

 
 
 </div>
