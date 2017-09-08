<?php 
namespace Xform\impls;
use Xform\libs\BaseInput;

class Textinput extends BaseInput {
	function __construct($tpl, $name, $id, $type="text") {
		$this->name = $name;
		$this->id = $id;
		$this->type = $type;
		$this->tpl=$tpl;
	 }
	
	 function doAssign($renderAdapter) {
		$renderAdapter->assign("name", "hello");
		$renderAdapter->assign("id", "hello");
		$renderAdapter->assign("type", "text");
	 }
	 
 	 protected $tpl;
 	 protected $name;
 	 protected $id;
 	 protected $type="text";
}
