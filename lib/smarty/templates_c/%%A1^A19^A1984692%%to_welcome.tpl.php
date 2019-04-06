<?php /* Smarty version 2.6.30, created on 2017-06-20 15:59:18
         compiled from to_welcome.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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


<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
<form name action="./change.php" method="post">
<tr>
<td><?php echo $this->_tpl_vars['r']['id']; ?>
</td>
<td><?php echo $this->_tpl_vars['r']['name']; ?>
</td>
<td><?php echo $this->_tpl_vars['r']['department']; ?>
</td>
<td><?php echo $this->_tpl_vars['r']['email']; ?>
</td>
<td><?php echo $this->_tpl_vars['r']['contact']; ?>
</td>
<input type="hidden" value="<?php echo $this->_tpl_vars['r']['id']; ?>
" name="eid">
<td><button class="button button3" type="submit" name="update">UPDATE</button></td>
<td><button class="button button4" type="submit" name="delete">DELETE</button></td>
</tr>
</form>
<?php endforeach; endif; unset($_from); ?>
</table> 


</body>
</html>


</div>
</body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>