<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * @file
 * Wrapper for Smarty Template Engine
 */
 
require_once('/home/ananya/Documents/codes/EMS/lib/smarty/Smarty.class.php');
require_once('/home/ananya/Documents/codes/EMS/lib/smtemplate_config.php');
 
class SMTemplate
{
     
    private $_smarty;
     
    	function __construct()
	{
       	 $this->_smarty = new Smarty();
         
       	 global $smtemplate_config;
         $this->_smarty->template_dir = $smtemplate_config['template_dir'];
         $this->_smarty->compile_dir = $smtemplate_config['compile_dir'];
         $this->_smarty->cache_dir = $smtemplate_config['cache_dir'];
         $this->_smarty->configs_dir = $smtemplate_config['configs_dir'];
	}

	function render($template, $data)
	{

		foreach($data as $key => $value)
		{
        	$this->_smarty->assign($key, $value);
		}
    		$this->_smarty->display($template . '.tpl');
	}
		
	
}


?>
