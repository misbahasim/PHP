<?php

class empdetail{
	var $empId;
	var $empName;
	var $empCity;
	var $empDept;
	var $empDesig;

	//Using functions
	function enteremp($id,$name,$city)
	{
		$this->empId=$id;
		$this->empName=$name;
		$this->empCity=$city;
	}
	function enterdept($dept,$desig)
	{
		$this->empDept=$dept;
		$this->empDesig=$desig;
	}

	//using Constructor
	 // function empdetail($id, $name, $city, $dept)  //or  function __construct
	 //  {       
	 //   $this->empId=$id;        
	 //   $this->empName=$name;        
	 //   $this->empCity=$city;        
	 //   $this->empDept=$dept;
	 //   } 
}

?>


