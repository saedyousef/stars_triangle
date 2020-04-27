
<?php 

include "Triangle.php";
	
	/**
	* @author Saed Yousef
	*/
	class StarsTriangle
	{
		public function __construct($rows, $repeat)
		{
			$Triangle = new Triangle();
			$triangle = $Triangle->draw($rows, $repeat);
		}
	}

	if(empty($argv[1]) || empty($argv[2]))
	{
		echo "Please specify the number of rows and repeation\n";
		die();
	}

	elseif(!is_numeric($argv[1]) || !is_numeric($argv[2]))
	{
		echo "Please enter a valid integer number \n";
		die();
	}
	$rows 	= round($argv[1]);
	$repeat = round($argv[2]);

	$PrintTriangle = new StarsTriangle($rows, $repeat);
