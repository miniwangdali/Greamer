<?php
/**
 * 前端首页
 */

class IndexAction extends Action {

	public function Index () {

		$this -> display ('Index') ; 

	}
	
	public function ShowWhatIsGreamer(){
		$this->display('WhatIsGreamer') ; 
	}

	public function ShowSearchProject(){
		$this->display('SearchProject') ; 
	}
	
}


?>