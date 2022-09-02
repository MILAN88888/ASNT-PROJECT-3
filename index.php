<?php
if	(!isset($_SESSION['user_id']))
{
	$controller = 'home';
	$function = 'home';
	include ('controller/'.$controller.'.php');
	$class = 'HomeController';
	$obj = new $class();
	$obj->$function();
}
if (isset($_SESSION['user_id']))
{
	if (isset($_GET['type']) && $_GET['type'] == 'dashboard')
	{
		include ('controller/dashboard.php');
		$class = 'DashboardController';
		$obj1 = new $class();
		$obj1->dashboard();
	}
}

?>