<?php

require_once 'Log.php';
require_once 'Input.php';

class Auth
{
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';


	public static function attempt($username, $password)
	{
		password_verify($password,'$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm' );

		if(self::$username === 'guest' && password_verify() === true) {
			Input::has($key);
			Log::logMessage('User' . $username . 'logged in.');
		} else {
			Log::logMessage('User' . $username . 'failed to log in!'); 
		}
	}

	public static function check()
	{
		return isset($_SESSION['logged_in_user']);
	}

	public static function user()
	{
		return ['username' => $_SESSION['logged_in_user']];
	}

	public static function logout()
	{
    session_unset();

    session_destroy();

    session_regenerate_id();

    session_start();
	}

}


?>