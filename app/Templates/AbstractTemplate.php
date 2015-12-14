<?php 

namespace App\Templates;

use Illuminate\View\View;

abstract class AbstractTemplate {

	protected $view;

	abstract public function prepare(View $view, $parametes);

	public function getView()
	{
		$this->view;
	}

}