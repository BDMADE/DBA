<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/


//Route::get('/test',function(){return View::make('hello');});


/*Model*/
Route::model('user','User');
Route::model('member','Member');
Route::model('education','Education');
Route::model('ssc','Ssc');
Route::model('hsc','Hsc');
Route::model('hon','Hon');
Route::model('baratlaw','Baratlaw');
Route::model('account','Account');
Route::model('library','Library');
Route::model('valid','Valid');
Route::model('borrow','Borrow');


Route::get('/test',function(){
        return View::make('test');});
        
//front router
    Route::get('/front','FrontController@index');    
        
        
//default router
Route::get('/home','UserController@home');        
Route::get('/','UserController@login');
Route::get('/admin','AdminMembershipController@index')->before('auth');

//login and logout system
Route::get('/user','UserController@create');
Route::post('/user','UserController@handleCreate');

Route::get('/login','UserController@login');
Route::post('/login','UserController@handleLogin');


Route::get('/logout','UserController@logout');

//login and logout system



//user information for admin panel
Route::get('/admin2/user','AdminUserController@index');

//add user in admin panel
Route::get('/admin2/user/add','AdminUserController@create');
Route::post('/admin2/user/add','AdminUserController@handleCreate');

//user information for admin panel
Route::get('/admin/user','AdminUserController@index')->before('auth');

//add user in admin panel
Route::get('/admin/user/add','AdminUserController@create')->before('auth');
Route::post('/admin/user/add','AdminUserController@handleCreate')->before('auth');


//edit user in admin panel

Route::get('/admin/user/edit/{user}','AdminUserController@edit')->before('auth');

Route::post('/admin/user/edit','AdminUserController@handleEdit')->before('auth');

//delete user in admin panel

Route::get('/admin/user/delete/{user}','AdminUserController@delete')->before('auth');

Route::post('/admin/user/delete','AdminUserController@handleDelete')->before('auth');



/*member system*/

//return member page
Route::get('/member','AdminMembershipController@index')->before('auth');

//add new member 

Route::get('/member/add','AdminMembershipController@create')->before('auth');


Route::post('/member/add','AdminMembershipController@handleCreate')->before('auth');


Route::get('/member/update/{member}','AdminMembershipController@edit')->before('auth');


Route::post('/member/update/','AdminMembershipController@handleEdit')->before('auth');


Route::get('/member/cancel','AdminMembershipController@formCancel')->before('auth');

// accounts base page
Route::get('/ac','AdminAccountController@index')->before('auth');
//add an account
Route::get('/ac/add','AdminAccountController@create')->before('auth');
Route::post('/ac/add','AdminAccountController@handleCreate')->before('auth');

//edit individual accounts
Route::get('/ac/edit/{account}','AdminAccountController@edit')->before('auth');
Route::post('/ac/edit','AdminAccountController@handleEdit')->before('auth');

//add bank statement

Route::get('/ac/bank/{account}','AdminAccountController@bankStatement')->before('auth');
Route::post('/ac/bank','AdminAccountController@handleBankStatement')->before('auth');


//redirect to ac page
Route::get('/ac/cancel','AdminAccountController@formCancel')->before('auth');


// library  base page
Route::get('/library','AdminLibraryController@index')->before('auth');

//add book

Route::get('/library/add','AdminLibraryController@create')->before('auth');
Route::post('/library/add','AdminLibraryController@handleCreate')->before('auth');


//edit individual book name and copy number
Route::get('/library/edit/{library}','AdminLibraryController@edit')->before('auth');
Route::post('/library/edit','AdminLibraryController@handleEdit')->before('auth');



//redirect to ac page
Route::get('/library/cancel','AdminLibraryController@formCancel')->before('auth');


//add library user
//index page
Route::get('/library/user','AdminLibraryUserController@index')->before('auth');

Route::get('/library/user/add','AdminLibraryUserController@create')->before('auth');
Route::post('/library/user/add','AdminLibraryUserController@handleCreate')->before('auth');


//edit individual  library user name and copy number
Route::get('/library/user/edit/{borrow}','AdminLibraryUserController@edit')->before('auth');
Route::post('/library/user/edit','AdminLibraryUserController@handleEdit')->before('auth');

//redirect to ac page
Route::get('/library/user/cancel','AdminLibraryUserController@formCancel')->before('auth');


//show the voter list

Route::get('/voter/all','AdminVoterController@index')->before('auth');

//Route::get('/voter/list','AdminVoterController@search')->before('auth');

//Route::post('/voter/list','AdminVoterController@handleSearch')->before('auth');

/*file upload*/

/*
Route::get('form', function(){
 return View::make('form');
});

Route::any('form-submit', function(){
 var_dump(Input::file('file'));
});

Route::any('form-submit', function(){
 return Input::file('file')->getFilename();
});

Route::any('form-submit', function(){
 return Input::file('file')->getClientOriginalName();
});

Route::any('form-submit', function(){
 return Input::file('file')->getClientSize();
});

Route::any('form-submit', function(){
 return Input::file('file')->getClientMimeType();
});

Route::any('form-submit', function(){
 return Input::file('file')->getRealPath();
});

Route::any('form-submit', function(){
  Input::file('file')->move(public_path().'/img/',Input::file('file')->getClientOriginalName());
  return "File Upload Succesfully";
  
});

Route::any('form-submit', function(){
 return Input::file('file')->getRealPath();
});

Route::any('form-submit', function(){
 return Input::file('file')->getClientOriginalName();
});

Route::any('form-submit', function(){
 return Input::file('file')->getFilename();
});

Route::any('form-submit', function(){
 return Input::file('file')->getErrorMessage();
});

Route::any('form-submit', function(){
 return Input::file('file')->getMaxFilesize();
});
 * 
 * 
 */


