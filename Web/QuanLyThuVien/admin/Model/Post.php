<?php 
	include_once('Model/Model.php');

	class Post extends Model{
		public $table = "BaiDang";
		public $primaryKey = "maBaiDang";

		public function __construct(){
			parent::__construct();
		}
	}
?>