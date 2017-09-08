<?php 
namespace Xform\libs;
interface  RenderAdapter {
	public  function  fetch($tpl);
	public  function assign($tpl_var, $value);
}
?>