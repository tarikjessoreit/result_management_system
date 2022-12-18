<?php 
	function get_res_letter($m){
		$r="";
		if ($m<33) {
			$r = "F";
		}else if ($m<40) {
			$r = "D";
		}else if ($m<50) {
			$r = "C";
		}else if ($m<60) {
			$r = "B";
		}else if ($m<70) {
			$r = "A-";
		}else if ($m<80) {
			$r = "A";
		}else{
			$r = "A+";
		}

		echo $r;
	}

	function get_res_point($m){
		$r="";
		if ($m<33) {
			$r = "0.00";
		}else if ($m<40) {
			$r = "1.00";
		}else if ($m<50) {
			$r = "2.00";
		}else if ($m<60) {
			$r = "3.00";
		}else if ($m<70) {
			$r = "3.5";
		}else if ($m<80) {
			$r = "4.00";
		}else{
			$r = "5.00";
		}

		echo $r;
	}



 ?>