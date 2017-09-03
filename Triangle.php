<?php
/**
* @author Saed Yousef
* Class DrawTriangle to handle the methodglogy of drawing the triangle
*/
class Triangle{

	/**
	* @author Saed Yousef
	* @param $rows
	* @param $repeat
	* @return triangle of stars
	*/
	public function draw($rows, $repeat)
	{	
		// Check the number of rows and repetition
		if($rows <= 0 || $repeat <= 0)
		{
			echo "The number of rows and reaption must be more than 0";
			die;
		}

		for($size = 1; $size <= $rows; $size++)
		{
			for($counter = $rows *  $repeat - ($repeat - 1); $counter >= $size; $counter--)
			{
				echo '  ';

			}

			for($counter = 1; $counter <= $size * $repeat - ($repeat - 1) ; $counter++)
			{
				echo "*";
			}

			echo "\n";
		}
	}
}
