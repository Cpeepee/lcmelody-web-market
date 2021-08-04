<?php

function upload_file($file_input, $upload_dir = './uploads/')
{
	if (!isset($_FILES[$file_input])) {
		return false;
	}

	// return false if error occurred
	$error = $_FILES[$file_input]['error'];

	if ($error !== UPLOAD_ERR_OK) {
		return false;
	}

	// move the uploaded file to the upload_dir
	$new_file = $upload_dir . $_FILES[$file_input]['name'];

	return move_uploaded_file(
		$_FILES[$file_input]['tmp_name'],
		$new_file
	);
}

$status = upload_file('file');

if ($status) {
	echo 'The file has been uploaded successfully!';
} else {
	echo 'An error occurred during the file upload!';
}
