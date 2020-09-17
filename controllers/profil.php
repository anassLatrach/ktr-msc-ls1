<?php
class Profil extends Controller{
	protected function Index(){
		$viewmodel = new ProfilModel();
		$this->returnView($viewmodel->Index(), true);
	}
}