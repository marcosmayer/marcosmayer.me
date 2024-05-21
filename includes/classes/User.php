<?php

class User
{
	private $conn;

	public $email;
	public $password;

	public function __construct($db)
	{
		$this->conn = $db;
	}

	public function login($email, $password)
	{
		// doc Seleciona o usuário na tabela `users` com base no e-mail fornecido 
		$query = "SELECT * FROM users WHERE email = :email LIMIT 1";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(":email", $email);
		$stmt->execute();
		// doc Se encontrarmos um usuário com o e-mail fornecido, buscamos todas suas informações 
		if ($stmt->rowCount() > 0) {
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			// doc Se a senha fornecida corresponder à senha armazenada no banco de dados, configuramos a sessão do usuário e o cookie de autenticação 
			if (password_verify($password, $row['password'])) {
				session_set_cookie_params([
					'lifetime' => 0,
					'path' => '/',
					'domain' => 'ondemand.mastersofbusiness.com.br',
					'secure' => true,
					'httponly' => true
				]);
				// doc Se não houver uma sessão ativa, iniciamos uma
				if (session_status() !== PHP_SESSION_ACTIVE) {
					@session_start();
				}
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['apelido'] = $row['apelido'];
				$_SESSION['role'] = $row['role'];
				return true;
			}
		}

		return false;
	}

	public function getUserByEmail($email)
	{
		$query = "SELECT * FROM users WHERE email = :email LIMIT 1";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(":email", $email);
		$stmt->execute();

		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		return $user !== false ? $user : null;
	}

	public function createProfile($email, $name, $apelido, $password)
	{
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$query = "UPDATE users SET name = :name, apelido = :apelido, password = :password, first_access = 0 WHERE email = :email";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':apelido', $apelido);
		$stmt->bindParam(':password', $hashedPassword);
		$stmt->bindParam(':email', $email);

		return $stmt->execute();
	}

	public function updateProfilePicture($user_id, $pictureUri)
	{
		$query = "UPDATE users SET picture_uri = :pictureUri WHERE id = :userId";

		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':pictureUri', $pictureUri);
		$stmt->bindParam(':userId', $user_id);

		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
