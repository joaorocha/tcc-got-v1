<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

	public function getId()
	{
	    return $this->_id;
	    // gets id by calling Yii::app()->user->id
	}

	private $_id;

	public function authenticate()
	{
		$user = Usuario::model()->findByAttributes(array('login_usuario'=>$this->username, 'passwd_usuario'=>$this->password));
		if ($user===null) { // No user found!
    		$this->errorCode=self::ERROR_USERNAME_INVALID;
		} else if ($user->passwd_usuario !== $this->password ) { // Invalid password!
    		$this->errorCode=self::ERROR_PASSWORD_INVALID;
		} else { // Okay!
   			 $this->errorCode=self::ERROR_NONE;
   			 $this->_id = $user->id_usuario;
   			 $this->setState('id_personagem', $user->id_personagem);
   			 // gets login by calling Yii::app()->user->id_personagem
		}
		return !$this->errorCode;
	}
}