<?php /* Smarty version 2.6.30, created on 2017-06-20 11:56:39
         compiled from header.tpl */ ?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="/EMS/views/design.css">

<title>EMS</title>
<h1>Welcome To Employee Management System</h1>

<script>
<?php echo '
function validateForm() 
{
        var x = document.getElementById("name").value;
	var y = document.getElementById("department").value;	
	var z = document.getElementById("password").value;
	var a = document.getElementById("password2").value;
	var m = document.getElementById("email").value;
	var n = document.getElementById("contact").value;	
	
    if (x == "")
    {alert("Name field cannot be empty");
     return false;}
    if (y == "")
    {alert("Department Field Cannot be empty");
     return false;}
    if (z == "")
    {alert("Password Required");
     return false;}
    if (m == "")
    {alert("Email Required");
     return false;}
    if (n == "")
    {alert("Contact Number Required");
	return false;}
   
    if (isNaN(n))
        {alert("Contact Number shold be Numbers");
	return false;}
   var phoneno = /^\\d{10}$/;  
  if(!n.match(phoneno))  
     {  
        alert("Phone number should be 10 digits long");
	return false;  
      }  
	if(z!=a){  
	alert("Password must be same!"); 
	return false;
	}  

	var atposition=m.indexOf("@");  
	var dotposition=m.lastIndexOf(".");  
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=m.length){  
  		alert("Please enter a valid e-mail address \\n atpostion:"+atposition+"\\n dotposition:"+dotposition); 
		return false; }


}

</script>
'; ?>

</head>




