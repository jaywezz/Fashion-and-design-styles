 <script>
     function scrollWin() {
       window.scrollTo(3000, 0);
     }
    scrollTo();
</script>
<header>
	
	<link rel="stylesheet" type="text/css" href="comment.css">
</header>
<body>
	<?php 
      include 'header2.php';
      include 'friend_conn.php';  
	 ?>
 <!-- Trigger/Open The Modal -->

<!-- The Modal -->

  <!-- Modal content -->
    <h2>Leave a comment here</h2>
  	<form class="form" method="POST" action="comment.php">
  	
       <input type="text" name="comments" place-value="Add a comment" maxlength="1000"><br><br>
       <input class="button_c" type="submit" name="submit" value="Comment">

  	</form>
  
<fieldset style=" width: 700px; border:none; padding-left: 30px;">
   
      <?php  
      $name=$_SESSION['user'];
      if (isset($_POST['comments'])&&!empty($_POST['comments'])) {
            $comments=$_POST['comments'];
            //echo "<br>$comments<br>";
         $query="INSERT INTO comments VALUES('','$name','$comments')";   
          if($query_run=mysql_query($query)){
           // echo "Query was a success";
          }else{echo "Query is not a success";}
       }
       else{echo "There was a problem processing your request";}
      //echo "$name<br>";  
      $query5="SELECT name FROM comments WHERE comment=''";
      if($query_run5=mysql_query($query5)){
       //echo"Qs";
       $query="SELECT * FROM comments ORDER BY id desc";
          $user_comment=$query_row['name'];
        
      if($query_run=mysql_query($query)){
       //echo "Qs";
      }else{echo "qn";}
      //$comments=mysql_fetch_assoc($query_run);
      //$result=mysql_result($query_run, 'name');
      while($query_row=mysql_fetch_assoc($query_run)){
        $comments=$query_row['comment'];
         $query5="SELECT name FROM comments WHERE comment='$comments'";
             if ($query5_run=mysql_query($query5)) {
                 //echo "We have the name";
                   
              $query5_row=mysql_fetch_assoc($query5_run);
              $user_comment=$query5_row['name'];

                       $query_photo="SELECT image_path FROM profile_pics WHERE username='jaymo";
             
                 if($query_photo_run=mysql_query($query_photo)){
                echo "DONE";
                $photo_row=mysql_fetch_assoc($query_photo_run);
                  $commenter_photo=$photo_row['image_path'];
              }else{echo "not done";}
             }else{echo "Not succesful";
           }
           

                  echo "$pic";
             echo "<br>$user_comment:Posted this <br><br>$comments<br><hr>"; 
   
     //echo "$comments";
     

      }
      
      }else{echo "qn";}
    ?>
    
   <br><br><br><br><br><br>   <br><br><br><br><br><br>  
</fieldset>
  
   

</body>
<?php
include 'footer.php'; 
 ?>