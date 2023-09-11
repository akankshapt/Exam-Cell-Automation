<?php

if(isset($_POST["standard"])){

	 $str1 = $_POST['standard'];
				
     include "config.php"; 

	
?>
		<option value="">Select Subject</option>
<?php	
 $gdf="select * from tbl_subject where fld_standard_id='".$str1."' order by fld_subject_name asc";
	   $select=mysqli_query($connect,$gdf) or die(mysqli_error($connect));
	 while($sele=mysqli_fetch_array($select))
	{
		
			echo "<option value=\"{$sele['fld_subject_id']}\">{$sele['fld_subject_name']}</option>";
		

	}	 
		
}

?>