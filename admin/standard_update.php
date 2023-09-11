<?php
include "config.php";
if (isset($_POST['update'])) 
    {
        
        extract($_POST);

        $standard=$_POST['standard'];
        $query1=mysqli_query($connect,"select * from tbl_standard where fld_standard_name='".$standard."' and  fld_standard_id!='".$_GET['fld_standard_id']."' ");
       
        if (mysqli_num_rows($query1)==1) 
        {
          echo '<script type="text/javascript">'; 
          echo 'alert("Standard Is Already Exist");';
          echo "window.location.href = 'standard_view.php';";
          echo '</script>'; 

        }    
        else
        {

            $query="Update tbl_standard set fld_standard_name='".$standard."' where fld_standard_id='".$_GET['fld_standard_id']."' ";
            //echo $query."<br>";
            $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
            if ($row) 
            {
              echo '<script type="text/javascript">';
              echo "alert('Standard Updated');";
              echo 'window.location.href = "standard_view.php";';
              echo "</script>";

            }
           else
            {
              echo '<script type="text/javascript">';
              echo "alert('Error in Updating Standard');";
              echo 'window.location.href = "standard_view.php";';
              echo "</script>";
               
            }
        }    
    }      

?>
