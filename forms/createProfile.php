<?php

header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

if (session_status() !== PHP_SESSION_ACTIVE) @session_start();

require_once "../includes/classes/Database.php";
require_once "../includes/classes/User.php";

$dbInstance = new Database();
$db = $dbInstance->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$apelido = $_POST['apelido'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$_SESSION['email'] = $email;

	$userObj = new User($db);
	$userObj->createProfile($email, $name, $apelido, $password);

	header('Location: ../pages/profilePicture.php');
}
