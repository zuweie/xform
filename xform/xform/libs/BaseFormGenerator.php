<?php 
namespace Xform\libs;
abstract  class BaseFormGenerator {
	
	function __construct ($renderAdapter) {
		$this->renderAdapter = $renderAdapter;
	} 
	
	public function genForm() {
		$html = $this->getFormhead();
		foreach ($this->inputElements as $input) {
			$html = $html.$input->doRendering($this->renderAdapter);
		}
		$html .= $this->getFormfoot();
		return $html;
	}
	
	public abstract  function getFormhead () ;
	
	public abstract  function getFormfoot ();
	
	public function addInputElement ($elem) {
		array_push($this->inputElements, $elem);
	}
	
	protected $inputElements = array();
	protected $renderAdapter;
	
}