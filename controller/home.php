<?php
class HomeController
{
	public function home()
	{
		
		if(!isset($_SESSION['user_id']))
		{	
			include ('view/header.php');
			include ('view/main.php');
			include ('view/signin.php');
			include ('view/signup.php');
			include ('view/footer.php');
		}
		
	}		
}
?>