<?php

class UserIdentity extends CUserIdentity
{
	private $_id;

	public function authenticate()
	{
		
				
		$user=Usuario::model()->find("LOWER(username=?)",array(strtolower($this->username)));
		
		if($user==null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(sha1($this->password)!==$user->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->_id=$user->idusuario;
			//se guarda en la variable
			//de sesion por si se quiere usar
			$this->setState("email",$user->email);
			$this->setState("username",$user->username);
			$this->errorCode=self::ERROR_NONE;
			//asi se puede acceder a la variable se sesion
			//Yii::app()->user-nombre;
			//Yii::app()->user->getState("nombre");
		}
			
		return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}	
}