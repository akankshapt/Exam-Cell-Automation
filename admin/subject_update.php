<?php
include "config.php";
if (isset($_POST['update'])) 
    {
        
        extract($_POST);

        $subject1=$_POST['subject'];
        $subject=ucwords(strtolower($subject1));
        $coulmn=array();
        $query1=mysqli_query($connect,"select * from tbl_subject where fld_subject_name='".$subject."' and fld_standard_id='".$_POST['standard']."' and fld_subject_id!='".$_GET['fld_subject_id']."' ");
       
        if (mysqli_num_rows($query1)==1) 
        {
          echo '<script type="text/javascript">'; 
          echo 'alert("Subject Is Already Exist");';
          echo "window.location.href = 'subject_view.php';";
          echo '</script>'; 

        }    
        else
        {

            $query="Update tbl_subject set fld_subject_name='".$subject."', fld_standard_id='".$_POST['standard']."' where fld_subject_id='".$_GET['fld_subject_id']."' ";
            //echo $query."<br>";
            $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
            if ($row) 
            {
              echo '<script type="text/javascript">';
              echo "alert('Subject Updated');";
              echo 'window.location.href = "subject_view.php";';
              echo "</script>";

            }
           else
            {
              echo '<script type="text/javascript">';
              echo "alert('Error in Updating Subject');";
              echo 'window.location.href = "subject_view.php";';
              echo "</script>";
               
            }
        }    
    }      

?>
