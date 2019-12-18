<?php

include 'dbconfig.php';

$statusMsg = '';

// File upload path
$targetDir = "uploadedNotes/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

    $allowTypes = array('jpg','png','jpeg','gif','pdf','zip','ppt','rar','doc','docx','txt');

    if(in_array($fileType, $allowTypes)){

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            $insert = $db->query("INSERT into tbl_note (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

echo $statusMsg;
?>