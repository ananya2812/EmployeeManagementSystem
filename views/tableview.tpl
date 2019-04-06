<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="/EMS/views/style.css">
<title>View</title>
</head>
<body style="background-color:white">

<h1>VIEW ALL EMPLOYEE RECORDS</h1>
</hr>


<table cellpadding="2" cellspacing="0">
<tr>
<td>ID</td>
<td>NAME</td>
<td>DEPARTMENT</td>
</tr>
{foreach from=$data item=r}
<tr>
<td>{$r.id}</td>
<td>{$r.name}</td>
<td>{$r.department}</td>
<tr>
{/foreach}
</table> 

</body>
</html>
