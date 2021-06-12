<?php

if(isset($_POST["submit"])) {
    if(!empty($_FILES["fileToUpload"]["name"])) {
	$target_dir = "../4235290dc72241ca4ffc4ccf9c4fee98/";
        $file_name = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_FILENAME);
        $file_extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
        $target_name = md5($file_name) . '.' . $file_extension;	
	$target_file = $target_dir . $target_name;	

        preg_match("/\b(\.php|\.php2|\.php3|\.php4|\.php5|\.php6|\.phps|\.pht|\.phtm|\.pgif)\b/", strtolower($_FILES["fileToUpload"]["name"]), $output_array);

        if(!empty($output_array)) {
            header("location: ../upload.php?msg=Error - No php file!");
            die();
        }

	if(file_exists($target_file)) {
	    header("location: ../upload.php?msg=Error - Filename already exists!");
	    die();
	}
        
        if(!move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            header("location: ../upload.php?msg=Error - Error During Uploading!");
            die();
        }else {
	    header("location: ../upload.php?msg=Success - Success Upload!");
	}

    }else {
        header("location: ../upload.php");
    }
}

?>
