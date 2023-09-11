<?php
include "config.php";
$delete1 = mysqli_query($connect, "delete from tbl_subject where fld_subject_id='".$_GET['fld_subject_id']."'")or die(mysqli_error($connect));


$back="subject_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Subject Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Error in Deleting Subject');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>