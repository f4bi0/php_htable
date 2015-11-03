<?php
class HtmlTable{
	
	private $data = array();
	
	function __construct(){
		
	}
	
	function teste(){
	
	}
	
	function data(array $data){
		$this->data = $data;
		return $this;
	}
	
	function render(){
		echo "<table>";
		echo "</table>";
	}
	
	function newMethod(){}
	
}