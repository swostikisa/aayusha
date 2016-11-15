<?php
if(isset($_FILES["image"])){
	$errors=array();
	$file_name = $_FILES['image']['name'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type =$_FILES['image']['type'];
	 $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
print_r($_FILES);
if(empty($errors)==true){
         move_uploaded_file($file_tmp,"image/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
  }
      ?>

<html>
<body>
<form method="POST" action="" enctype="multipart/form-data">
select image to upload:
<input type="file" name="test">
<input type="submit" value="Upload">
</form>
</body>
</html>