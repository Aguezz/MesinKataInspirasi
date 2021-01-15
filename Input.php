<?php

require_once __DIR__ . "/Contracts/Input.php";

class Input implements InputImp
{
	public static function readLine()
	{
		return trim(fgets(STDIN));
	}
}
