<?php
class DashboardController
{	public $baseurl = 'http://localhost/asnt-3/';
	private $obj;
	private $numresu;
	private $numresd;
	public function __construct()
	{
		include ('../model/dashboard.php');
		$this->obj = new DashboardModel();
	}
	public function numseeUserController()
	{
		$res = $this->obj->numseeUserModel();
		return $res;
	}
	
	public function seeUserController($start,$per_page)
	{
		$res = $this->obj->seeUserModel($start,$per_page);
		return $res;
	}
	public function numseeDocumentController()
	{
		$res = $this->obj->numseeDocumentModel();
		return $res;
	}
	public function seeDocumentController($docstart,$docper_page)
	{
		$res = $this->obj->seeDocumentModel($docstart,$docper_page);
		return $res;
	}
	public function dashboard()
	{	
		include ('../view/header.php');
		include ('../view/dashboard.php');
		include ('../view/footer.php');
		
	}
	public function userdashboard()
	{	
		include ('../view/header.php');
		include ('../view/dashboard.php');
		include ('../view/user.php');
		include ('../view/footer.php');
		
	}
	public function documentdashboard()
	{	
		include ('../view/header.php');
		include ('../view/dashboard.php');
		include ('../view/document.php');
		include ('../view/footer.php');
		
	}
	
}
if 
(isset($_GET['type']) && $_GET['type'] != '') 
{	
	$obj1 = new DashboardController();
	$obj1->dashboard();
}
if (
	(isset($_GET['start']) && $_GET['start']  != '') ||
	(isset($_GET['user']) && $_GET['user']  != '') 
	)
	{	
		$obj1 = new DashboardController();
		$obj1->userdashboard();
	}
if (
	(isset($_GET['docstart']) && $_GET['docstart']  != '') ||
	(isset($_GET['document']) && $_GET['document']  != '') 
	)
	{	
		$obj1 = new DashboardController();
		$obj1->documentdashboard();
	}
?>