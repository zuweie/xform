<?php 
namespace Xform\impls;
use Xform\libs\RenderAdapter;
use Smarty;
class SmartyRender implements RenderAdapter {
	
	public function __construct() {
		$this->smarty = new \Smarty();
		$this->smarty->setTemplateDir(__DIR__."/../../smarty_running/template");
		$this->smarty->setCompileDir(__DIR__."/../../smarty_running/compile");
		$this->smarty->setConfigDir(__DIR__."/../../smarty_running/config");
		$this->smarty->setCacheDir(__DIR__."/../../smarty_running/cache");
		
	}
	
	public function fetch($tpl) {
		return $this->smarty->fetch($tpl);
	}
	
	public function assign($tpl_var, $value){
		return $this->smarty->assign($tpl_var, $value);
	}
	
	protected $smarty;
	protected $input;
	
}
?>