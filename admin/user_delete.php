<?php
include "config.php";


$delete1 = mysqli_query($connect, "delete from tbl_user where fld_user_id='".$_GET['fld_user_id']."'")or die(mysqli_error($connect));


if($_GET['page']=='reg')
{
  $back="registered_user_view.php";
}
elseif($_GET['page']=='app')
{
  $back="user_approve_view.php";
}
elseif($_GET['page']=='disapp')
{
  $back="user_disapprove_view.php";
}

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('User Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Error in Deleting User');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>