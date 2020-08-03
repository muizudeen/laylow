<?php 

	function msg() {
		if (isset($_SESSION["msg"])) {
			$output = $_SESSION["msg"];
			$_SESSION["msg"] = null;
			return $output;
		
		}
		}

		function mss() {
		if (isset($_SESSION["mss"])) {
			$output = $_SESSION["mss"];
			$_SESSION["mss"] = null;
			return $output;
		
		}
		}

		
 ?>