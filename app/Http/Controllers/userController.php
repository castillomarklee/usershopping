<?php 

	namespace App\Http\Controllers;



	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;

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

		public function formsubmissiontoken(Request $request, Response $response) {

			return print_r(response(array($request->json()->all())->header('Content-Type', 'text/plain'));
		}

	}

 ?>