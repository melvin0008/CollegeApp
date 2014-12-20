<?php

class CollegeappController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	 public function getinfo()
	{

		//return Input::all();
		return View::make('hello');
// 		$mobileno="9049733143";
// 		$item=Attendance::where('mobileno','=',$mobileno)->get();;	 
// 		return $item[0]->attendance;
// // 				$user = new Attendance;

// // $user->mobileno = "9049733143";
// // $user->attendance= "20";
// // $user->save();

	}
}


// 		$user = new Attendance;

// $user->mobileno = 9049733143;
// $user->attendance= 20;
// $user->save();

