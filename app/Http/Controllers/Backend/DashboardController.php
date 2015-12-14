<?php 
namespace App\Http\Controllers\Backend;

class DashboardController extends Controller 
{

	public function index()
	{
		return view('backend.dashboard');
	}

}