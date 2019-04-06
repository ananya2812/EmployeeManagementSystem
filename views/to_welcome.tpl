{include file='header.tpl'}
<body style="background-color:white">
<a href="./logout.php" >Logout</a>
<div>
<h3>VIEW ALL EMPLOYEE RECORD</h3>




<table cellpadding="2" cellspacing="0"  >


<tr>
<th>ID</th>
<th>NAME</th>
<th>DEPARTMENT</th>
<th>EMAIL</th>
<th>CONTACT</th>
</tr>


{foreach from=$data item=r}
<form name action="./change.php" method="post">
<tr>
<td>{$r.id}</td>
<td>{$r.name}</td>
<td>{$r.department}</td>
<td>{$r.email}</td>
<td>{$r.contact}</td>
<input type="hidden" value="{$r.id}" name="eid">
<td><button class="button button3" type="submit" name="update">UPDATE</button></td>
<td><button class="button button4" type="submit" name="delete">DELETE</button></td>
</tr>
</form>
{/foreach}
</table> 


</body>
</html>


</div>
</body>
{include file='footer.tpl'}
