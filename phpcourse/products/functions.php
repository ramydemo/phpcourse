<?php

	function clean_input($connection, $input)
	{
		$cleaned = trim($input);
		$cleaned = htmlspecialchars($cleaned);
		$cleaned = mysqli_real_escape_string($connection, $cleaned);

		return $cleaned;		
	}