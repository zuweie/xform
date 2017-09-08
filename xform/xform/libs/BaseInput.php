<?php
namespace Xform\libs;

abstract  class BaseInput {
	
	public abstract function doAssign($renderAdapter);
	
 	public  function doRendering ($renderAdapter){
 		
 		$this->doAssign($renderAdapter);
 		return $renderAdapter->fetch($this->tpl);
 	}
 	
 	protected $tpl;
}