<?php
class Controller {
	public $model;
	public $view;
	public bool $authorised = false;
	
	function __construct()
	{
		$this->model = new Model();
		$this->authorised = $this->checkAuth();
		$this->view = new View();
	}

	function checkAuth()
	{
		$result = $this->model->checkUser();
		if(is_null($result))
		{
			//print "<b>Куки пока что нет</b><br>";
			return false;
		}
		else {
			//print "<b>Кука есть</b><br>";
			return true;
		}
	}
}

