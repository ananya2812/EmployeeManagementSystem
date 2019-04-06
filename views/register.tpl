
{include file='header.tpl'}

<body style="background-color:white">

<div>

<h3>REGISTER HERE</h3>

<form name="register" action="./register.php" method="post" onsubmit="return validateForm()">

<label>NAME</label>
<input type="text" name="name" id="name" placeholder="Enter your name here"/>
<br />

<label>DEPARTMENT</label>
<input type="text" name="department" id="department" placeholder="Enter your department here" />
<br />

<label>PASSWORD</label>
<input type="password" name="password" id="password" placeholder="Enter password" />
<br />

<label>RETYPE PASSWORD</label>
<input type="password" name="password2" id="password2" placeholder="Re enter the password" />
<br />

<label>EMAIL</label>
<input type="email" name="email" id="email" placeholder="Enter email id in format @mail.com" />
<br />

<label>CONTACT NO.</label>
<input type="text" name="contact" id="contact" placeholder="Enter 10 digit mobile number" />
<br />

<button class="button" type="submit" value="submit">REGISTER</button>

</form>
<p>Existing User, Click Here --> <a href="./to_login.php">LOGIN</a></p>
</div>
</body>

{include file='footer.tpl'}

