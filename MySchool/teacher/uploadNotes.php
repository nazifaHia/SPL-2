<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>


<div class="main">
<h1 style="text-align: center">Share Your Notes</h1>
    <div class="adminpanel" style="background-color:  #003300">
         <form action="upload.php" method="post" enctype="multipart/form-data">
		    <h3>Select File to Upload:</h3><br><br>
		    <input type="file" name="file">
		    <input type="submit" name="submit" value="Upload">
		</form>

    </div>


	
</div>
<?php include 'inc/footer.php'; ?>