<?php

class AdminLibraryController extends BaseController{
    
public function index(){
    
    $library=Library::all();
        return View::make('Admin/pages/library/allBook',compact('library'));
    
    
}

public function create(){
    
   return View::make('Admin/pages/library/addBook');
    
}


public function handleCreate(){
    //get file path
    Input::file('file_img')->move(public_path().'/img/',Input::file('file_img')->getClientOriginalName());
    
    
    
    $book=new Library;
    $book->book_name=Input::get('book_name');
    $book->book_copy=Input::get('copy');
    $book->book_img_name=Input::file('file_img')->getClientOriginalName();
    
    $book->created_by_id=Auth::id();
    $book->updated_by_id=Auth::id();
    
    $book->save();
    return Redirect::action('AdminLibraryController@index')->with('flash_edit_success','Hurray!You have added a new Book');
    
}



public function edit(Library $library){
    
   return View::make('Admin/pages/library/editBook',compact('library')); 
}


public function handleEdit(){
    
    $book=Library::findOrFail(Input::get('library'));
    
    $book->book_name=Input::get('book_name');
    $book->book_copy=Input::get('copy');
    
    $book->updated_by_id=Auth::id();
    
    $book->update();
    return Redirect::action('AdminLibraryController@index')->with('flash_edit_success','Hurray!You have updated a new Book');
}

public function formCancel(){
    
   
    return Redirect::action('AdminLibraryController@index')->with('flash_dlt_success','OH!Sorry! I can not entry Book in this time');
    
}



}