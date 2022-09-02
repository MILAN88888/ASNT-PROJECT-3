<div id="udiv">
<table id="tbl">
<tr><th>Id</th><th>Name</th><th>Email</th><th>Company</th><th>Phone no.</th><th>Edit</th><th>Delete</th></tr>
<?php 
	foreach ( $resu as $value)
	{
		echo '<tr id=delete'.$value["user_id"].' ><th>'.$value['user_id'].'</th><th id=name'.$value["user_id"].' >'.$value['user_name'].'</th><th id=email'.$value["user_id"].' >'.$value['user_email'].'</th><th id=company'.$value["user_id"].' >'.$value['user_company'].'</th><th id=phone'.$value["user_id"].' >'.$value['user_phone_no'].'</th><th><button class="btn2" id="edit'.$value["user_id"].'" onclick=myedit("'.$value["user_id"].'")>edit</button></th><th><button class="btn2" onclick=mydelete("'.$value["user_id"].'")>Delete</button></th></tr>';
	}
?>
</table>
<?php for($i=1;$i<=$pagi;$i++){?>
<a href="?start=<?php echo $i; ?>"><button class="btn2"><?php echo $i; ?></button></a>
<?php } ?>
</div>
