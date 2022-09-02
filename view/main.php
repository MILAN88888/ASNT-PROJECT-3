<div id="page-container">
 <?php 
 if	(isset($_GET['msg']) && $_GET['msg'] == 'fail')
	{
		echo '<div id="msge"><span>Invalid credentials !!</span><button id="btn">x</button></div>';
    } 
if	(isset($_GET['msgs']) && $_GET['msgs'] == 'fail')
	{	
		echo '<div id="msge"><span>Failed to Register. Try again !!</span><button id="btn">x</button></div>';
    } 
if	(isset($_GET['msgs']) && $_GET['msgs'] == 'success')
{	
	echo '<div id="msge"><span>Successfully Registered. procced login!!</span><button id="btn">x</button></div>';
} 
?>

</div>