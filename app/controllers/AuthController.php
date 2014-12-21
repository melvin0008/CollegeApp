<?php

class AuthController extends BaseController {

  public function status() {
    return Response::json(MitcoeUser::check());
  }

  public function login()
  {

    if(MitcoeUser::getlogin(array('email' => Input::json('email'), 'password' => Input::json('password'))))
    {
      return Response::json(array('flash'=>'successfully logged in'));
   } else {
      return Response::json(array('flash' => 'Invalid username or password'), 400);
    }
  }

  public function logout()
  {
    MitcoeUser::logout();
    return Response::json(array('flash' => 'Logged Out!'));
  }

}

