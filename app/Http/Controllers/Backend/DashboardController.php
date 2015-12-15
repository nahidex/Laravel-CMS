<?php 
namespace App\Http\Controllers\Backend;

use App\Post;
class DashboardController extends Controller 
{


	public function index(Post $posts)
	{
		$posts = $posts->orderBy('updated_at', 'desc')->take(5)->get();

		return view('backend.dashboard',compact('posts'));
	}

}