<?php
// class parent user with magic methods, properties, and construct
class users
{
	protected $user_id;
	protected $user_type;
	protected $first_name;
	protected $last_name;
	protected $email_address;
	protected $user_level;

public function __construct($user_level)
{
	$this->user_level = $user_level;
}

public function __set($user_level, $value)
{
	 $this->$user_level = $value;
	 return;
}

public function __get($user_level)
{
	 return $this->$user_level;
}

public function __destruct()
{
	 
}


}

?>