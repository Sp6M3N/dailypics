<?php 
session_start();
include "../connexion.php";
if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {

if(isset($_POST['ok'])) { 

$folder ="uploads/"; 
$image = $_FILES['image']['name']; 
$path = $folder . $image ; 
$target_file=$folder.basename($_FILES["image"]["name"]);
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
$allowed=array('jpeg','png' ,'jpg'); $filename=$_FILES['image']['name']; 
$ext=pathinfo($filename, PATHINFO_EXTENSION); 

if(!in_array($ext,$allowed) ) {

 echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";

}else{
	
move_uploaded_file( $_FILES['image'] ['tmp_name'], $path); 

	move_uploaded_file( $_FILES['image'] ['tmp_name'], $path); 
	$sth=$db->prepare("INSERT INTO images (image, userId) VALUES (?, ?) "); 
	$sth->execute(array($image,
						$_SESSION['id']));
		} 
	} 
?> 

<form method="POST" enctype="multipart/form-data"> 

<input type="file" name="image" /> 

<input type="submit" name="ok"/> 

</form>

<a href="gallery.php">See Image</a>
<?php
}
?>