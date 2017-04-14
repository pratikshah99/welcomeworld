<?php
	namespace HelloWorld;
	class SayHello
	{
	    public static function world()
	    {
	        return 'Hello World, Composer!';
	    }
	    
	    public static function maximum($a,$b) 
	    {
	    		if($a > $b)
	    		{
					return $a.' is Max';	    		
	    		}
	    		else
	    		{
	    			return $b.' is Max';
	    		}
	    }
	}
	
?>