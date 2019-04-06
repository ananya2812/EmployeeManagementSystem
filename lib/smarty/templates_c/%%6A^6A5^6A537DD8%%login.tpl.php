<?php /* Smarty version 2.6.30, created on 2017-06-16 13:12:23
         compiled from login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>