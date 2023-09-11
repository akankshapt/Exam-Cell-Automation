<?php
include "config.php";
$delete1 = mysqli_query($connect, "delete from tbl_question where fld_question_id='".$_GET['fld_question_id']."'")or die(mysqli_error($connect));


$back="question_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Question Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Error in Deleting Question');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>