<?php
include "config.php";

 $new="update tbl_user set fld_user_status='Approved' where fld_user_id='".$_GET['fld_user_id']."'";
$delete1 = mysqli_query($connect, $new) or die(mysqli_error($connect));

$back1="user_approve_view.php";
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
            echo "alert('User Approved');";
            echo 'window.location.href = "'.$back1.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Error in approving User');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>