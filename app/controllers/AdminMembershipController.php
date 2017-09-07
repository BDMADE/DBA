<?php

class AdminMembershipController extends BaseController{
    
    public function index(){
        
        $member=Member::all();
        return View::make('Admin/pages/membership/allMember',compact('member'));
        
        
    }
    
  public function create(){
      
      return View::make('Admin/pages/membership/addMember');
  }
    
  public function handleCreate(){
   
      
    $member=new Member;
     //add personal information
    $member->membership_id=Input::get('membership_id');
    $member->name=Input::get('name');
    $member->father=Input::get('father');
    $member->husband=Input::get('husband');
    $member->birthday=Input::get('birthday');
    $member->phone=Input::get('phone');
    $member->date_of_enrollment=Input::get('date_of_enrollment');
    $member->roll=Input::get('roll');
    $member->acknowledgement_name=Input::get('acknowledgement_name');
    $member->acknowledgement_relationship=Input::get('acknowledgement_relationship');
    //add address of applicant
    $member->village=Input::get('village');
    $member->postOffice=Input::get('postOffice');
    $member->thana=Input::get('thana');
    $member->district=Input::get('district');
    $member->present_address=Input::get('present_address');
   //add old membership info 
    $member->date_of_past_enrollment=Input::get('date_of_past_enrollment');
    $member->date_of_cancel=Input::get('date_of_cancel');
    $member->cancel_roll=Input::get('cancel_roll');
    
    //create and update
    
    $member->date_of_membership=date('d M Y');
    $member->created_by_id=Auth::id();
    $member->updated_by_id=Auth::id();
    
    $member->save();
    
    //add member's education 
    
    $education=new Education;
    $education->membership_id=Input::get('membership_id');
    $education->SSC=Input::get('ssc');
    $education->HSC=Input::get('hsc');
    $education->Hons=Input::get('hons');
    $education->Masters=Input::get('masters');
    $education->BarAtLaw=Input::get('barAtLaw');
    //create and update
    $education->created_by_id=Auth::id();
    $education->updated_by_id=Auth::id();
    
    $education->save();
    
    
    
    
    //add members SSC
    
    $ssc=new Ssc;
    $ssc->membership_id=Input::get('membership_id');
    $ssc->result=Input::get('ssc_class');
    $ssc->year=Input::get('ssc_year');
    $ssc->board=Input::get('ssc_board');
    //create and update
    $ssc->created_by_id=Auth::id();
    $ssc->updated_by_id=Auth::id();
    
    $ssc->save();
    
    
    //add members HSC
    
    $hsc=new Hsc;
    $hsc->membership_id=Input::get('membership_id');
    $hsc->result=Input::get('hsc_class');
    $hsc->year=Input::get('hsc_year');
    $hsc->board=Input::get('hsc_board');
    //create and update
    $hsc->created_by_id=Auth::id();
    $hsc->updated_by_id=Auth::id();
    
    $hsc->save();
    
    
    //add members Hons
    
    $hons=new Hon;
    $hons->membership_id=Input::get('membership_id');
    $hons->result=Input::get('hons_class');
    $hons->year=Input::get('hons_year');
    $hons->univarsity=Input::get('hons_varsity');
    //create and update
    $hons->created_by_id=Auth::id();
    $hons->updated_by_id=Auth::id();
    
    $hons->save();
    
    //add members Masters
    
    $masters=new Master;
    $masters->membership_id=Input::get('membership_id');
    $masters->result=Input::get('masters_class');
    $masters->year=Input::get('masters_year');
    $masters->university=Input::get('masters_varsity');
    //create and update
    $masters->created_by_id=Auth::id();
    $masters->updated_by_id=Auth::id();
    
    $masters->save();
    
    
    //add members Masters
    
    $blaws=new Baratlaw;
    $blaws->membership_id=Input::get('membership_id');
    $blaws->result=Input::get('bl_class');
    $blaws->year=Input::get('bl_year');
    $blaws->univarsity=Input::get('bl_varsity');
    //create and update
    $blaws->created_by_id=Auth::id();
    $blaws->updated_by_id=Auth::id();
    
    $blaws->save();
    
    
    
    //add valid members
    
    $valid_member=new Valid;
    $valid_member->membership_id=Input::get('membership_id');
    $valid_member->created_by_id=Auth::id();
    $valid_member->updated_by_id=Auth::id();
    $valid_member->save();
    
    
     
    return Redirect::action('AdminMembershipController@index')->with('flash_edit_success','Hurray!You have added a new member');
      
  }
  public function formCancel(){
      
     return Redirect::action('AdminMembershipController@index')->with('flash_dlt_success','OH!Sorry! I can not make a Page in this time');
  }
 
  
  public function edit(Member $member){
      
     
     return View::make('Admin/pages/membership/editMember',compact('member')); 
    #return View::make('Admin/pages/membership/editMember');
      
      
  }
  
  public function handleEdit(){
      
    //echo  AppHelper::getMemberId();
    
      $member=Member::findOrFail(Input::get('member'));
      
    $member->name=Input::get('name');
    $member->father=Input::get('father');
    $member->husband=Input::get('husband');
    $member->birthday=Input::get('birthday');
    $member->phone=Input::get('phone');
    $member->date_of_enrollment=Input::get('date_of_enrollment');
    $member->roll=Input::get('roll');
    $member->acknowledgement_name=Input::get('acknowledgement_name');
    $member->acknowledgement_relationship=Input::get('acknowledgement_relationship');
    //add address of applicant
    $member->village=Input::get('village');
    $member->postOffice=Input::get('postOffice');
    $member->thana=Input::get('thana');
    $member->district=Input::get('district');
    $member->present_address=Input::get('present_address');
   //add old membership info 
    $member->date_of_past_enrollment=Input::get('date_of_past_enrollment');
    $member->date_of_cancel=Input::get('date_of_cancel');
    $member->cancel_roll=Input::get('cancel_roll');
    
    //create and update
    
    $member->created_by_id=Auth::id();
    $member->updated_by_id=Auth::id();
    
    $member->update();
    return Redirect::action('AdminMembershipController@index')->with('flash_edit_success','Your Information are updated successfully.');
      
      
  }
  
  
  
}