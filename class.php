<?php 
	class Math_formuls 
	{
		public function Count_1($x) 
		{
			if ($x=="") {
				$x=0;
			}

			if ($x<=3) {
				$result = ((pow($x,2)) - (3*$x) + 9);
			}
			else {
				$result = ((pow($x,3))+6);
			}
			echo ("Y = ".$result);
		}

		public function Count_2($a,$b,$c)
		{
			if ($a=="") {
				$a=0;
			}
			if ($b=="") {
				$b=0;
			}
			if ($c=="") {
				$c=0;
			}
			$result = $a*$b+$c;
			echo ("Y = ".$result);
		}
	}

	if (isset($_POST['xButton'])) {
		$x=$_POST['x'];
		$class = new Math_formuls;
		$class->Count_1($x);
	}
	if (isset($_POST['a_b_cButton'])) {
		$a=$_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$class = new Math_formuls;
		$class->Count_2($a,$b,$c);
	}
?>
