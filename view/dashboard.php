<?php 
if (!isset($_SESSION['user_id']))
{
	header('localtion:../view/index.php');
}
else
{
	$per_page = 5;
	$start = 0;
	$docper_page = 5;
	$docstart = 0;
	if (isset($_GET['start']))
	{
		$start = $_GET['start'];
		$current_page = $start;
		$start--;
		$start = $start * $per_page;
	}
	if (isset($_GET['docstart']))
	{
		$docstart = $_GET['docstart'];
		$doccurrent_page = $docstart;
		$docstart--;
		$docstart = $docstart * $docper_page;
	}
	$record = $this->numseeUserController();
	$pagi = ceil($record/$per_page);

	$docrecord = $this->numseeDocumentController();
	$docpagi = ceil($docrecord/$docper_page);

	$resu = $this->seeUserController($start,$per_page);
	$resd = $this->seeDocumentController($docstart,$docper_page);


	if	(isset($_GET['type']) && $_GET['type'] == 'dashboard')
		{
			echo '<div id="msge"><span>Welcome '.$_SESSION['user_name'].'</span><button id="btn">x</button></div>';
		} 
	if	(isset($_GET['document']) && $_GET['document'] == 'success')
		{
			echo '<div id="msge"><span>Successfully added</span><button id="btn">x</button></div>';
		}
		echo "<br>";
	if (isset($_SESSION['user_email']) && $_SESSION['user_email'] == 'admin@gmail.com')
	{
?>
<h4>User Management</h4>
<a href="dashboard.php?user=user" ><button id="user">User List</button></a>
<br>
<?php } ?>
<br>
<h4>Document Management</h4>
<a href="dashboard.php?document=document"><button id="document" >Add/View</button></a><br><br>
<div id="editdiv">
	<h4>Edit Details</h4>
	Name<br><input type="text" id="editname" required /><br>
	Email<br><input type="text" id="editemail" required /><br>
	Company<br><input type="text" id="editcompany" required /><br>
	Phone no.<br><input type="text" id="editphone" required /><br>
	<br>
	<button  class ="btn2" id="editbtn">submit</button>
	<button  class ="btn2" id="editclosebtn">close</button>
</div>
<?php } ?>