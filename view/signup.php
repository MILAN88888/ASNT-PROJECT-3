  
<div id="containers">
	<button id='closes' > x</button>
	<div>
		<h1>Registration Form</h1>
		<br>
		<form action="controller/user.php?type=signup" id='logforms' autocomplete="off" method="POST">
			<table>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" class="error" id='names'name='name' />
					<label id="names-error" class="error" for="names"></label>
					<span id="nameerrors" ><br></span>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" class="error" id='emails'name='email' /><br>
					<label id="emails-error" class="error" for="emails"></label>
					<span id="emailerrors" ></span>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" class="error" id="passs" name='pass'  /><br>
					<label id="passs-error" class="error" for="passs"></label>
					<span id="passerrors"></span>
				</td>
			</tr>
			<tr>
				<td>Phone no.</td>
				<td> <input type="text" class="error" id="phone_nos" name="phone_no"/> <br>
					<label id="phone_nos-error" class="error" for="phone_nos"></label>
					<span id="phoneerrors"></span>
				</td>
			</tr>
			<tr>
				<td>Company</td>
				<td><input type="text"class="error" id="companys" name="company" /> <br>
					<label id="companys-error" class="error" for="companys"></label>
					<span id="companyerrors"></span>
				</td>
			</tr>
			</table>
			<button type="submit" id="submit" name='submit'>Register</button>
			<p id='errors'></p>
		</form>
	</div>
</div>




