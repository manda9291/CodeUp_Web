<?php
class Input 
{
	public staic function has($key){
	if (isset($_REQUEST[$key]))
		return true;
		}else{
		return false;
		} 
}

@return 

public static function get($key)
if (isset($_REQUEST[$key])){
	return $_REQUEST[$key];
}else
	return null;
}
}


