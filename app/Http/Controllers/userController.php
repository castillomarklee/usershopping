<?php 

	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;

	/**
	* 
	*/
	class userController extends Controller
	{
		
		public function show() {
			return "sample";
		}

		public function showView() {
			return view('new');
		}
	}

 ?>