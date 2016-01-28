<?php

class AdminVoterController extends BaseController{
    
    
    public function index(){
        $member=Member::whereStatus(1)->get();
        return View::make('Admin/pages/voterList/allVoter',compact('member'));
        
    }

    





    public function search(){
        
        return View::make('Admin/pages/voterList/searchVoter');
        
    }
    
    public function handleSearch(){
        
        $getDate=Input::get('searchVoter');
        
     //echo $getDate;
        
        $getDate=AppHelper::dateToString($getDate);
        
       
        $results = DB::select('select membership_id FROM "valids" WHERE "valid"=1 and "upToDate" between 0  and '.$getDate);
       
        return $results;
        
        
    }
}