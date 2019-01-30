<?php 
   include 'databases.inc.php';
   session_start();
     $name=$_SESSION['user'];
       if (isset($_POST['comments'])&&!empty($_POST['comments'])) {
            $comments=$_POST['comments'];
            echo "<br>$comments<br>";
         $query="INSERT INTO comments VALUES('','$name','$comments')";   
          if($query_run=mysql_query($query)){
          	echo "Query was a success";
          }
          else{echo "Query is not a success";}
       }
       else{echo "There was a problem processing your request";}
     echo "$name";
      $name=$_SESSION['user'];
     //echo "$name<br>";
      $query="SELECT * FROM comments";
      if($query_run=mysql_query($query)){
       echo "Qs";
      }else{echo "qn";}
      //$comments=mysql_fetch_assoc($query_run);
      //$result=mysql_result($query_run, 'name');
      while($query_row=mysql_fetch_assoc($query_run)){
        $comments1=$query_row['comment'];
        echo "<hr><br>$comments1";
      }
      
 ?>
