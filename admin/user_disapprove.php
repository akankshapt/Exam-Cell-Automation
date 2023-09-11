<?php
include "config.php";


$delete1 = mysqli_query($connect, "update tbl_user set fld_user_status='Disapproved' where fld_user_id='".$_GET['fld_user_id']."'")or die(mysqli_error($connect));

$back1="user_disapprove_view.php";
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
            echo "alert('User Disapproved');";
            echo 'window.location.href = "'.$back1.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Error in disapproving User');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>