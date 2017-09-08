<?php 
namespace Xform\impls;

use Xform\libs\BaseFormGenerator;

class FormGen extends BaseFormGenerator {
	
	public function __construct($renderAdapter){
		parent::__construct($renderAdapter);
	}
	
	public function getFormhead() {
		return "<form>";
	}
	
	public function getFormfoot() {
		return "</form>";
	}
}