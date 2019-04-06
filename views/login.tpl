{include file='header.tpl'}
<body style="background-color:white">


<div>
<h3>LOGIN</h3>

<form name="register" action="./login.php" method="post" onsubmit="return validateForm()">

<label>NAME</label>
<input type="text" name="name" id="name" placeholder="Enter your name here"/>
<br />

<label>PASSWORD</label>
<input type="password" name="password" id="password" placeholder="Enter password"/>
<br />

<button class="button" type="submit" value="Submit">LOGIN</button>

</form>
</div>
</body>
{include file='footer.tpl'}
