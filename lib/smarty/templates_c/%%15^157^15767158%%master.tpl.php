<?php /* Smarty version 2.6.30, created on 2017-06-15 11:20:58
         compiled from master.tpl */ ?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="/EMS/views/style.css">
<title>EMS</title>

</head>
<body style="background-color:white">

<h1>Welcome To Employee Management System</h1>
<p>Choose your Options</p>
</hr>


<div class="btn-group">

<form action="./show.php" method="post" id="form1">
<button class="button" type="submit" form="form1" value="Submit">VIEW</button>
</form>
<hr>

<form action="./insert.php" method="post" id="form2">
<button class="button" type="submit" type="submit" form="form2" value="Submit">INSERT</button>
<label>NAME</label>
<input type="text" name="name" />
<br />
<label>DEPARTMENT</label>
<input type="text" name="department" />
<br />

</form>
<hr>

<form action="./delete.php" method="post" id="form3">
<button class="button" type="submit" type="submit" form="form3" value="Submit">DELETE</button>
<label>ID of employee to be deleted</label>
<input type="text" name="id" />
<br />
</form>

</div>



</body>
</html> 