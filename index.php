<?php
ini_set("display_errors", "1");
include_once "dropbox.php";

$accessToken = ""; # Paste Access Token Here

$dropbox = new Dropbox($accessToken);

$folderName = "Project1";
$fileName = "energy.docx";

# Download
// file_put_contents("$folderName.zip", $dropbox->downloadZip($folderName));

# List Folder
var_dump($dropbox->listFolder($folderName));

# Thumbnail
// $thumbnail = $dropbox->getThumbnail($fileName);
// echo file_put_contents("$fileName.jpg", $thumbnail);