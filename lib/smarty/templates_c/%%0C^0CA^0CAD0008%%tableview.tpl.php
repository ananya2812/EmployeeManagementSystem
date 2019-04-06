<?php /* Smarty version 2.6.30, created on 2017-06-15 11:24:46
         compiled from tableview.tpl */ ?>
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
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
<tr>
<td><?php echo $this->_tpl_vars['r']['id']; ?>
</td>
<td><?php echo $this->_tpl_vars['r']['name']; ?>
</td>
<td><?php echo $this->_tpl_vars['r']['department']; ?>
</td>
<tr>
<?php endforeach; endif; unset($_from); ?>
</table> 

</body>
</html>