<?phpheaders

if ($_SERVER['REQUEST_METHOD'] =='POST') 
{
	$folder = "images";
	$randomNumber = rand(15,35);
	$filepath = $folder.'/'.$randomNumber.$_FILES['upload_file']['name'];
	$imageFileType = strtolower(pathinfo($filepath,PATHINFO_EXTENSION)); 

	if (empty($_FILES['upload_file']['name'])) {
		echo "File is required"; 
	}
	elseif (file_exists($filepath))	{
		echo "File already exists";
	}
	elseif ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") { 
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}
	else { 
		if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $filepath)) { 
			echo "The file ". htmlspecialchars( basename( $_FILES["upload_file"]["name"])). " has been uploaded.";
	} 
	    else {
	    	echo "Sorry, there was an error uploading your file."; 
	    }
	}
}

/*function file_newname($path,  $filename)
{
if ($post = strrpos($filename, '.')) {
	$name = substr ($filename, 0, $pos);
	$ext = substr($filename, $pos)
}
else {
	$name = $filename;
}

$newpath = $path.'/'.$filename;
$newname = $filename;
$counter = 0;
while (file_exists($newpath)) {
	$newname = $name .'_'. $counter . $ext;
	$newpath = $path.'/'.$newname;
	$counter++;
}
return $newname;
}*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
		form.form {
		margin: auto !important;
		display: table !important;
		text-align: center;
		}
		form.form input[type="text"], form.form input[type="email"], form.form input[type="number"],  form.form select, form.form textarea, form.form  input[type="pasword"] {
		margin-bottom: 5% !important;
		}
		form.form input[type="text"], form.form input[type="email"], form.form input[type="number"], form.form select, form.form textarea, form.form  input[type="pasword"] {
		border: 2px solid #000;
		padding: 10px 5px;
		}
		</style>
	</head>
	<body>
		<form method="post" name="upload_file" class="form" enctype="multipart/form-data">
			<input type="file" name="upload_file"></br>
			<input name="Submit_btn" type="submit" value="Login">
			
			<p>
				<?php
				echo $msg;
				?>
			</p>
		</form>
	</body>
</html>