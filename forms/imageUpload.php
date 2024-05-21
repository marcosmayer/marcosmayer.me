<?php

if (session_status() !== PHP_SESSION_ACTIVE) @session_start();

require_once '../includes/classes/Database.php';
require_once '../includes/classes/User.php';

$dbInstance = new Database();
$db = $dbInstance->getConnection();

$user = new User($db);
$email = $_SESSION['email'];
$registeredUser = $user->getUserByEmail($email);
$user_id = $registeredUser['id'];
$_SESSION['user_id'] = $user_id;

$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/assets/images/profile/";

function cleanFileName($filename)
{
	$filename = strtolower($filename);
	$filename = str_replace(' ', '-', $filename);
	$filename = preg_replace("/[^a-z0-9-]/", "", $filename);
	return $filename;
}

$cleanedFileName = cleanFileName($user_id);
$target_file_temp = $target_dir . $cleanedFileName;
$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
$cleanedFileName .= "." . $imageFileType;
$target_file = $target_dir . $cleanedFileName;

// Check if image file is an actual image or fake image
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
	// File is an image
} else {
	echo "O arquivo não é uma imagem.";
}

$userObj = new User($db);
$result = $userObj->updateProfilePicture($user_id, $cleanedFileName);

if ($result) {
	echo "Nome da imagem atualizado com sucesso!";
} else {
	echo "Erro ao atualizar o nome da imagem.";
}

// TODO: You can also add checks for file size, file type etc.

// Finally, move the uploaded file to your desired location
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	echo "A imagem " . basename($_FILES["fileToUpload"]["name"]) . " foi carregada.";
	header("Location: ../pages/login.php");
} else {
	echo "Desculpe, houve um erro ao enviar sua imagem.";
}
