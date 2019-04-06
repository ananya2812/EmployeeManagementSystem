{include file='header.tpl'}

<body style="background-color:white">

<div>

<h3>UPDATE RECORD</h3>

<form name="update" action="./change.php" method="post" onsubmit="return validateForm()">

<label>NAME</label>
<input type="text" name="name" id="name" placeholder="Enter your name here"/>
<br />

<label>DEPARTMENT</label>
<input type="text" name="department" id="department" placeholder="Enter your department here" />
<br />

<label>EMAIL</label>
<input type="email" name="email" id=email" placeholder="Enter your Email" />
<br />

<label>PASSWORD</label>
<input type="password" name="password" id="password" placeholder="Enter password" />
<br />

<label>RETYPE PASSWORD</label>
<input type="password" name="password2" id="password2" placeholder="Re enter the password" />
<br />

<label>CONTACT NO.</label>
<input type="text" name="contact" id="contact" placeholder="Enter 10 digit mobile number" />
<br />
<input type="hidden" value="{$eid}" name="eid">

<button class="button" type="submit" value="submit" name="ananya">UPDATE</button>

</form>
</div>
</body>

{include file='footer.tpl'}
