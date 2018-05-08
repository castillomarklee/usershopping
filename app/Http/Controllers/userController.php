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
			$request->session()->put('name', $request->input('user'));
			return view('formsubmissiontoken.formsubmissiontokenviewresult', ['name' => $request->session()->get('name')]);
		}

		public function formvalidationsubmitcontroller(Request $request) {

			$request->validate([
				'username' => 'required | max: 10',
				'userpassword' => 'required | max: 10',
			]);

			return view('formvalidation.formvalidationresult', ['name' => $request->input('username'), 'userpassword' => $request->input('userpassword')]);

		}

	}

 ?>