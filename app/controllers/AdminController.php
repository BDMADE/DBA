<?php

class AdminController extends BaseController{
public function home(){

        if(Auth::check()){

        return View::make('Admin/main')->with('flash_admin_login','You are not logged,Please log in at first');
        }

        elseif(Auth::guest()) {

                return Redirect::to('login')->with('flash_admin_login','You are not logged,Please log in at first');

            }
            else{return Redirect::to('login')->with('flash_admin_login','You are not logged,Please log in at first');}

    }
}