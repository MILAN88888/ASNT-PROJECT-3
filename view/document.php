
<div id = "ddiv">
	<form action="user.php?type=UploadDocument" id="documentform" method="POST" enctype="multipart/form-data">
	<b><lable>Browser Docuemnt</lable></b><br>
	<input type="file"  name="document" id="documentfile" /><br>
	
	<button type="submit" id="dbtn" name="submit">upload</button>
	</form>
</div>
<div id="viewdiv">
<table id="vtbl">
<tr><th>Name</th><th>View</th></tr>
<?php 
foreach ( $resd as $value)
{
	echo'<tr><th>'.$value["document_name"].'</th><td><a href="../upload/'.$value["document_name"].'">view attachment</a></td></tr>';
}
?>
</table>
<?php for ($i=1;$i<=$docpagi;$i++) { ?>
<a href="?docstart=<?php echo $i; ?>"><button class="btn2"><?php echo $i; ?></button></a>

<?php } ?>

</div>