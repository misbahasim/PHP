<?php

class salary{
	public $hra; /* House Rent Allowance */
	public $ta;  /* travelling allowance */
	public $tax;
	
	public function calculate_hra($basic)
	{
		$hra = $basic * 0.25;
 		return $hra;
	}
	public function calculate_ta($basic)
	{
		$ta = $basic * 0.08;
 		return $ta;
	}
	public function calculate_tax($basic)
	{
		$tax = $basic * 0.05;
 		return $tax;
	}
}

class netSalary{
	function net($basic)
	 {
		 $hra = $this->calculate_hra($basic);
		 $ta = $this->calculate_ta($basic);
		 $tax = $this->calculate_tax($basic);

		 return $basic + ($hra + $ta)-$tax;
	 }
}

echo "The Salary details of the employee: <BR><BR>";
$sal = new netSalary();

?>