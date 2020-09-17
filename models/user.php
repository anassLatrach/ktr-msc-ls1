<?php
class UserModel extends Model{
	public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			if($post['nameUser'] == '' || $post['companyUser'] == '' || $post['email'] == '' || $post['tel'] == '' || $post['password'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			// Insert into MySQL
			$this->query('INSERT INTO users (name, email, tel, pwd, company) VALUES(:nameUser, :email, :tel, :password, :companyUser)');
			$this->bind(':nameUser', $post['nameUser']);
			$this->bind(':companyUser', $post['companyUser']);
			$this->bind(':email', $post['email']);
			$this->bind(':tel', $post['tel']);
			$this->bind(':password', $password);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users/login');
			}
		}
		return;
	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users  WHERE email = :email AND pwd = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['nameUser'],
					"email"	=> $row['email'],
					"tel"	=> $row['tel'],
					"companyUser"	=> $row['companyUser'],
				);
				header('Location: '.ROOT_URL.'home');
			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
		}
		return;
	}
}