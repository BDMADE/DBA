<?php

class UserController extends BaseController{


public function home(){

    return View::make('home');
}

public function create(){

return View::make('signup');
}


public function handleCreate(){
//Here is the input which are posted from registration form
    $data = Input::all();
    $rules = array(
        'username' => 'required|alpha_num|Unique:users',
        'email'=>'required|Unique:users'
    );

    // Build the custom messages array.
    $messages = array(
        'min' => 'You have to enter minimum 3 letters.',

    );

    // Create a new validator instance.
    $validator = Validator::make($data, $rules,$messages);

    if ($validator->passes()) {
// Record data in the database
        $user = new User;
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->email = Input::get('email');
        
        $user->save();

        return Redirect::to('/')->with('flash_rgstr_sccss', 'Thank You for registering');

    }

    else{


        return Redirect::back()
		->withInput()
		->withErrors($validator);
    }





}


public function  login(){

return View::make('login');



    }


public function handleLogin(){

    $credentials = Input::only('username', 'password');
    $remember = Input::has('remember');
    if (Auth::attempt($credentials, $remember)) {
        
        if(AppHelper::getAdminRole()=="Administrator"){
        return Redirect::intended('/admin')->with('flash_notice', 'Wow!You are successfully logged in.');
        }
        
        elseif (AppHelper::getAdminRole()=="Accountant") {
        return Redirect::intended('/ac')->with('flash_notice', 'Wow!You are successfully logged in.');
    }
    
    elseif (AppHelper::getAdminRole()=="Librarian") {
        return Redirect::intended('/library')->with('flash_notice', 'Wow!You are successfully logged in.');
    }
    
    }
    return Redirect::to('login')
        ->with('flash_error', 'Your username/password combination was incorrect.Please Try again')
        ->withInput();



}

public function logout(){

 Auth::logout();

    return Redirect::action('UserController@login')->with('flash_logout','Bye!Bye! See Again....');



}


 

}