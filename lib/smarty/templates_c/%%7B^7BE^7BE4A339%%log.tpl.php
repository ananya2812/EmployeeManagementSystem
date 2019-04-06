<?php /* Smarty version 2.6.30, created on 2017-06-16 12:58:08
         compiled from log.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body style="background-color:white">


<div>
<h1>LOGIN</h1>
<form action="./login.php" method="post" onsubmit="return validateForm()>
<label>NAME</label>
<input type="text" name="name" />
<br />
<label>PASSWORD</label>
<input type="password" name="password" />
<br />
<button class="button" type="submit" value="Submit">LOGIN</button>
</form>
</div>

</body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>