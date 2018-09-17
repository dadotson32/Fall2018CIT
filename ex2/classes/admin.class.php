<?php
// class subclass admin with magic methods and construct
class admin extends users
{
	
	
	public function __construct($user_level, $user_id)
		{
			parent::__construct($user_id);
			$this->user_level = "Administrator";
			$this->user_id = "bbdotson";
		}
	public function __set($name, $value)
		{
			 $this->$name = $value;
		}

	public function __get($name)
		{
			 return $this->$name;
		}

	public function __destruct()
		{
	 
		}
			
	
	
	
}
	
?>