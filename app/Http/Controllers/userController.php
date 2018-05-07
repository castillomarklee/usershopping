<?php 

	namespace App\Http\Controllers;



	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;

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

		public function formsubmissioncontroller(Request $request) {

			$formsubmission = $request->input('formsubmission');

			return "form submission " . $formsubmission;
		}

	}

 ?>