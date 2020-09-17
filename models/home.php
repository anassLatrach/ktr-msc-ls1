<?php
class HomeModel extends Model{
	public function Index(){
		$this->query("select * from users");
		 $rows = $this->resultSet();
		return $rows;
	}
}