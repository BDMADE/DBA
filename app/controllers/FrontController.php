<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class FrontController extends BaseController{
    
    public function index(){
        
        return View::make('front/main'); 
        
    }
    
    
}
