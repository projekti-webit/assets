<?php
session_start();
$id = $_SESSION['user_id'];

// Check if image file is a actual image or fake image
/*if(isset($_POST[""])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  /*if(*/
  	//$check !== false) {
   /* echo "Foto - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Skedari nuk eshte nje foto.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Fotoja eshte ruajtur me pare";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "File i zgjedhur eshte shume i madh";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sigurohuni qe fotoja te jete ne formatin JPG, JPEG, PNG ose GIF ";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Fotoja nuk eshte ruajtur";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Fotoja ". basename( $_FILES["fileToUpload"]["name"]). " u ngarkua";
    $image=$_FILES["file"]["name"];
     /* Displaying Image*/
    //  $img="uploads/".$image;
    //echo '<img src= "'.$img.'">';
    //   echo '<img src = "'.$img.'".$file.'.png; 
 // } else {
//   echo "Dicka nuk shkon ne ngarkimin e fotos";
 // }
//}

if(isset($_POST["Posto"])){

	$file = $_FILES['fileToUpload'];
	$filename = $_FILES['fileToUpload']['name'];
	$filetmpname = $_FILES['fileToUpload']['tmp_name'];
	$filesize = $_FILES['fileToUpload']['size'];
	$fileerror = $_FILES['fileToUpload']['error'];
	$filetype = $_FILES['fileToUpload']['type'];
	$fileext = explode('.',$filename);
	$fileactualext = strtolower(end($fileext));

	$allowed = array('png', 'jpeg','pdf','jpg');
	 if(in_array($fileactualext, $allowed)){
	 	if($fileerror==0){
	 		if($filesize< 100000){
	 			$filenamenew = "profile".$id.".".$fileactualext;
                $filedestination = 'uploads/'.$filenamenew;
                move_uploaded_file($filetmpname, $filedestination);
	 		}else {
	 			echo "Fotoja eshte shume e madhe!";
	 		}

	 	}else {
	 		echo "Ka nje problem me ngarkimin e fotos!";

	 	}

	 }else {
	 	echo "fotoja duhet te jete ne format .png/.jpeg/.pdf ose .jpg";
	 }

}


?>