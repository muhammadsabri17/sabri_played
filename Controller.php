<?php

class Controller
{

	protected  $db;

	public function dbConnect()
	{



		return new PDO("mysql:host=localhost;dbname=data", "root", "");
	}
}
