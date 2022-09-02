<div id="container">
	<button id='close' > x</button>
	<div>
		<h1>Login Form</h1>
		<br>
		<form action="controller/user.php?type=login" id='logform' autocomplete="off" method="POST">
			<lable>Email</lablel>
			<br>
			<input type="email" class="error" id='email' name='email' aria-invalid="true" >
			<label id="email-error" class="error" for="email"></label>
			<br>
			<br>
			<label>Password</label>
			<br>
			<input type="password" class="error" id="pass" name='pass' >
			<label id="pass-error" class="error" for="pass"></label>
			<br>
			<br>
			<br>
			<button  id="submit" type="submit" name='submit'>Log in</button>
			<br>
			<p id='error'></p>
		</form>
	</div>
</div>
