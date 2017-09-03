
<?php 

include "Triangle.php";
	
	/**
	* @author Saed Yousef
	*/
	class StarsTriangle{

		/**
		* @author Saed Yousef
		* @param $rows_count
		* @param $repeat_count
		* @return A triangle of stars depends upon the given numbers
		*/
		public function __construct($rows_count, $repeat_count)
		{
			$Triangle = new Triangle();
			$triangle = $Triangle->draw($rows_count, $repeat_count);
		}
	}

	if(empty($argv[1]) || empty($argv[2]))
	{
		echo "Please specify the number of rows and repeation\n";
		die();
	}

	elseif(!is_numeric($argv[1]) || !is_numeric($argv[2])){
		echo "Please enter integer number \n";
		die();
	}
	$rows_count = round($argv[1]);
	$repeat_count = round($argv[2]);

	$PrintTriangle = new StarsTriangle($rows_count, $repeat_count);
