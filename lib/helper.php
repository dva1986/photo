<?php 

class HelperRouter extends Helper {
	
	$action = null;
	
	public function __construct(){
		parent::__construct;
		
		// some action
		
		
		$this->action = 'some action';
	}
	
	public function getAction(){
		
		return $this->action;
	}
}