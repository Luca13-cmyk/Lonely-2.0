<?php

use \Hcode\Model\User;
// use \Hcode\Model\Cart;

	function formatPrice($vlprice)
	{
		if (!$vlprice > 0) $vlprice = 0;
		return number_format( $vlprice, 2, ",", ".");
	}

	function checkLogin($inadmin = true)
	{
	
		return User::checkLogin($inadmin);
	
	}
	function getCurrentHost($hostpar)
	{
		$host = $_SERVER["REQUEST_URI"];
		if ($host === $hostpar)
		{
			return "active";
		}
		
	}
	
	function getUserName()
	{
	
		$user = User::getFromSession();
	
		return $user->getdesperson();
	
	}
	function dateRegister()
	{

		$user = User::getFromSession();
	
		return $user->getdtregister();
	
	}

?>