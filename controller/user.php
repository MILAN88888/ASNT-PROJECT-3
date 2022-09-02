<?php
class UserController
{
	private $obj;
	public function __construct()
	{
			include ('../model/user.php');
			$this->obj = new UserModel();		
	}
	public function loginController()
	{
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if (isset($_POST))
				{
					$userEmail = $_POST['email'];
					$userPass = $_POST['pass'];
					$this->result = $this->obj->loginModel($userEmail,$userPass);
				if ($this->result!=false)
				{  
					session_start();
					$arr=$this->result;
					$_SESSION['user_email'] = $arr[0]['user_email'];
					$_SESSION['user_id'] =  $arr[0]['user_id'];
					$_SESSION['user_name'] = $arr[0]['user_name'];
					$_SESSION['user_email'] = $arr[0]['user_email'];
					header('location:dashboard.php?type=dashboard');
				}
				else
				{	
					header('location:../index.php?msg=fail');
				}	
				}
			}
				
	}
	public function signupController()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if (isset($_POST))
			{	
				$userName = $_POST['name'];
				$userEmail = $_POST['email'];
				$userPass = $_POST['pass'];
				$userPhoneNo = $_POST['phone_no'];
				$userCompany = $_POST['company'];
				$res = $this->obj->signupModel($userName,$userEmail,$userPass,$userPhoneNo,$userCompany);
				if( $res == true)
				{   
					header('location:../index.php?msgs=success');
				}
				else
				{
					header('location:../index.php?msgs=fail');
				}
			}
			
		}
	}
	public function LoginValidController()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if (isset($_POST))
			{	
				$userEmail = $_POST['email'];
				$result = $this->obj->LoginValidModel($userEmail);
				echo $result;
			}
			
		}
	}
	public function DeleteController()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if (isset($_POST))
			{	
				$userId = $_POST['id'];
				$result = $this->obj->DeleteModel($userId);
				echo $result;
			}
			
		}
	}
	public function UpdateController()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if (isset($_POST))
			{	
				$userId = $_POST['id'];
				$userName = $_POST['name'];
				$userEmail = $_POST['email'];
				$userCompany = $_POST['company'];
				$userPhone = $_POST['phone'];
				$result = $this->obj->UpdateModel($userId,$userName,$userEmail,$userCompany,$userPhone);
				echo $result;
			}
			
		}
	}
	public function UploadDocumentController()
	{
		
		if (isset($_POST))
		{	
			$filename = isset($_FILES['document']['name']) ? $_FILES['document']['name']:null;
            $filetmp =isset($_FILES['document']['tmp_name']) ? $_FILES['document']['tmp_name']:null;
            $destination='../upload/'.$filename;
            move_uploaded_file($filetmp, $destination);
			$result = $this->obj->UploadDocumentModel($filename);
			if ($result == true)
			{	
				header('location:dashboard.php?document=success');
			}
		}
	}
}
if (isset($_GET['type']) && $_GET['type'] != '')
{	$obj1 = new UserController();
	$val = $_GET['type'];
	$method= $val.'Controller';
	$obj1->$method();
}
?>