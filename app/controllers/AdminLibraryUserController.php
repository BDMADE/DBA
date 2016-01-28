<?php

class AdminLibraryUserController extends BaseController{
    
public function index(){
    
    $borrow=Borrow::all();
        return View::make('Admin/pages/library_user/allBorrowBook',compact('borrow'));
    
    
}

public function create(){
    
   return View::make('Admin/pages/library_user/addBorrowBook');
    
}


public function handleCreate(){
    //get file path
    
    $book=new Borrow;
    $book->membership_id=Input::get('membership_id');
    $book->book_name=Input::get('book_name');
    $book->borrow_date=Input::get('from');
    $book->return_date=Input::get('to');
    $book->book_copy=Input::get('copy');
   
    
    $book->created_by_id=Auth::id();
    $book->updated_by_id=Auth::id();
    
    $book->save();
    return Redirect::action('AdminLibraryUserController@index')->with('flash_edit_success','Hurray!You have added a new Book User');
    
}



public function edit(Borrow $borrow){
    
   return View::make('Admin/pages/library_user/editBorrowBook',compact('borrow')); 
}


public function handleEdit(){
    
    $book=Borrow::findOrFail(Input::get('borrow'));
    
    $book->membership_id=Input::get('membership_id');
    $book->book_name=Input::get('book_name');
    $book->borrow_date=Input::get('from');
    $book->return_date=Input::get('to');
    $book->book_copy=Input::get('copy');
    
    $book->updated_by_id=Auth::id();
    
    $book->update();
    return Redirect::action('AdminLibraryUserController@index')->with('flash_edit_success','Hurray!You have updated a new Book');
}

public function formCancel(){
    
   
    return Redirect::action('AdminLibraryUserController@index')->with('flash_dlt_success','OH!Sorry! I can not entry Book in this time');
    
}



}