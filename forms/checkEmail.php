<?php

if (session_status() !== PHP_SESSION_ACTIVE) @session_start();

require_once '../includes/classes/User.php';
require_once '../includes/classes/Database.php';

$dbInstance = new Database();
$db = $dbInstance->getConnection();

if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$_SESSION['email'] = $email;

	$userObj = new User($db);
	$user = $userObj->getUserByEmail($email);

	if ($user) {
		if ($user['first_access'] == 1) {
			echo json_encode(['exists' => true, 'firstAccess' => true]);
		} else {
			echo json_encode(['exists' => true, 'firstAccess' => false]);
		}
	} else {
		echo json_encode(['exists' => false, 'firstAccess' => false]);
	}
} else {
	echo json_encode(['error' => 'E-mail não enviado']);
}
