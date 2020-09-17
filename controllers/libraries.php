<?php
class Libraries extends Controller{
	protected function Index(){
		$viewmodel = new LibraryModel();
		$this->returnView($viewmodel->Index(), true);
	}
}