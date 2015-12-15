<?php

namespace App\Http\Controllers;

use App\Page;


class PageController extends Controller {

	public function show(Page $page, array $parameters)
	{
		return view('page', compact('page'));
	}
}