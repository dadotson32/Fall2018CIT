<?php
// class subclass register with magic methods and construct
class register  extends users
{
	
	
	public function __construct($user_level, $user_id)
		{
			parent::__construct($user_id);
			$this->user_level = "Regular User";
			$this->user_id = "ddotson";
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

