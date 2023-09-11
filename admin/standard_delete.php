<?php
include "config.php";
$delete1 = mysqli_query($connect, "delete from tbl_standard where fld_standard_id='".$_GET['fld_standard_id']."'")or die(mysqli_error($connect));

$delete = mysqli_query($connect, "delete from tbl_subject where fld_standard_id='".$_GET['fld_standard_id']."'")or die(mysqli_error($connect));



$back="standard_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Standard Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Error in Deleting Standard');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>