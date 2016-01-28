<?php

//use Dummyaccounts;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminAccountController extends BaseController {

    public function index() {

        $account = Account::all();
        return View::make('Admin/pages/account/allAccount', compact('account'));
    }

    public function create() {

        return View::make('Admin/pages/account/addAccount');
    }

    public function handleCreate() {



        /*
          $admission_fee=0;
          $late_fee=0;
          $benevolent_fund=0;
          $monthly_fee=0;
          $benevolent_fund_dues=0;
          $monthly_fee_dues=0;
          $relief_fund=0;
          $medical_fund=0;
          $building_fund=0;
          $library_fund=0;
          $memberlist_fee=0;
          $application_form_fee=0;
          $auditorium_fee=0;
          $drawer_fee=0;

          $membership_certificate_fee=0;
          $blood_test_fee=0;
          $provident_fund=0;
          $family_welfare_fund=0;
          $others=0;
          $total=0; */

        $monthly_fee = Input::get('monthly_fee');
        $benevolent_fund = Input::get('benevolent_fund');
        $building_fund = Input::get('building_fund');
        $relief_fund = Input::get('relief_fund');
        $medical_fund = Input::get('medical_fund');
        $library_fund = Input::get('library_fund');
        $provident_fund = Input::get('provident_fund');

        $late_fee = Input::get('late_fee');
        $benevolent_fund_dues = Input::get('benevolent_fund_dues');
        $monthly_fee_dues = Input::get('monthly_fee_dues');

        $admission_fee = Input::get('admission_fee');
        $memberlist_fee = Input::get('memberlist_fee');

        $application_form_fee = Input::get('application_form_fee');
        $auditorium_fee = Input::get('auditorium_fee');
        $drawer_fee = Input::get('drawer_fee');

        $membership_certificate_fee = Input::get('membership_certificate_fee');
        $blood_test_fee = Input::get('blood_test_fee');

        $family_welfare_fund = Input::get('family_welfare_fund');
        $others = Input::get('others');





        $total = 0;
        $total = $admission_fee + $late_fee + $benevolent_fund + $monthly_fee + $benevolent_fund_dues + $monthly_fee_dues + $relief_fund + $medical_fund + $building_fund + $library_fund + $memberlist_fee + $application_form_fee + $auditorium_fee + $drawer_fee + $membership_certificate_fee + $blood_test_fee + $provident_fund + $family_welfare_fund + $others;

        //return $total;

        $account = new Account;
        $account->membership_id = Input::get('membership_id');
        $account->admission_fee = $admission_fee;
        $account->late_fee = $late_fee;
        $account->benevolent_fund = $benevolent_fund;
        $account->monthly_fee = $monthly_fee;
        $account->benevolent_fund_dues = $benevolent_fund_dues;
        $account->monthly_fee_dues = $monthly_fee_dues;
        $account->relief_fund = $relief_fund;
        $account->medical_fund = $medical_fund;
        $account->building_fund = $building_fund;
        $account->library_fund = $library_fund;
        $account->memberlist_fee = $memberlist_fee;
        $account->application_form_fee = $application_form_fee;
        $account->auditorium_fee = $auditorium_fee;
        $account->drawer_fee = $drawer_fee;
        $account->membership_certificate_fee = $membership_certificate_fee;
        $account->blood_test_fee = $blood_test_fee;
        $account->provident_fund = $provident_fund;
        $account->family_welfare_fund = $family_welfare_fund;
        $account->others = $others;
        $account->totals = $total;

        //insert submission date
        $account->from = Input::get('from');
        $account->to = Input::get('to');

        if (Input::get('save')) {
            $account->save();
            return Redirect::action('AdminAccountController@index')->with('flash_edit_success', 'Hurray!You have created a Page');
        } elseif (Input::get('continue')) {

            $account->save();

            return Redirect::action('AdminAccountController@edit', $account->id);
        } else {
            return Redirect::action('AdminAccountController@index')->with('flash_dlt_success', 'OH!Sorry! I can not make a Page in this time');
        }
    }

    public function formCancel() {

        return Redirect::action('AdminAccountController@index')->with('flash_dlt_success', 'OH!Sorry! I can not make a Page in this time');
    }

    public function edit(Account $account) {

        return View::make('Admin/pages/account/editAccount', compact('account'));
    }

    public function handleEdit() {

        $account = Account::findOrFail(Input::get('account'));
        $monthly_fee = Input::get('monthly_fee');
        $benevolent_fund = Input::get('benevolent_fund');
        $building_fund = Input::get('building_fund');
        $relief_fund = Input::get('relief_fund');
        $medical_fund = Input::get('medical_fund');
        $library_fund = Input::get('library_fund');
        $provident_fund = Input::get('provident_fund');

        $late_fee = Input::get('late_fee');
        $benevolent_fund_dues = Input::get('benevolent_fund_dues');
        $monthly_fee_dues = Input::get('monthly_fee_dues');

        $admission_fee = Input::get('admission_fee');
        $memberlist_fee = Input::get('memberlist_fee');

        $application_form_fee = Input::get('application_form_fee');
        $auditorium_fee = Input::get('auditorium_fee');
        $drawer_fee = Input::get('drawer_fee');

        $membership_certificate_fee = Input::get('membership_certificate_fee');
        $blood_test_fee = Input::get('blood_test_fee');

        $family_welfare_fund = Input::get('family_welfare_fund');
        $others = Input::get('others');





        $total = 0;
        $total = $admission_fee + $late_fee + $benevolent_fund + $monthly_fee + $benevolent_fund_dues + $monthly_fee_dues + $relief_fund + $medical_fund + $building_fund + $library_fund + $memberlist_fee + $application_form_fee + $auditorium_fee + $drawer_fee + $membership_certificate_fee + $blood_test_fee + $provident_fund + $family_welfare_fund + $others;

        //return $total;


        $account->membership_id = Input::get('membership_id');
        $account->admission_fee = $admission_fee;
        $account->late_fee = $late_fee;
        $account->benevolent_fund = $benevolent_fund;
        $account->monthly_fee = $monthly_fee;
        $account->benevolent_fund_dues = $benevolent_fund_dues;
        $account->monthly_fee_dues = $monthly_fee_dues;
        $account->relief_fund = $relief_fund;
        $account->medical_fund = $medical_fund;
        $account->building_fund = $building_fund;
        $account->library_fund = $library_fund;
        $account->memberlist_fee = $memberlist_fee;
        $account->application_form_fee = $application_form_fee;
        $account->auditorium_fee = $auditorium_fee;
        $account->drawer_fee = $drawer_fee;
        $account->membership_certificate_fee = $membership_certificate_fee;
        $account->blood_test_fee = $blood_test_fee;
        $account->provident_fund = $provident_fund;
        $account->family_welfare_fund = $family_welfare_fund;
        $account->others = $others;
        $account->totals = $total;

        //insert submission date
        $account->from = Input::get('from');
        $account->to = Input::get('to');


        if (Input::get('save')) {
            $account->save();
            return Redirect::action('AdminAccountController@index')->with('flash_edit_success', 'Successfully an account has created.');
        } elseif (Input::get('view')) {

            //$page->update();
            $account->update();

            return Redirect::action('AdminAccountController@edit', $account->id);
        } else {
            return Redirect::action('AdminAccountController@index')->with('flash_dlt_success', 'OH!Sorry! I can not make a Page in this time');
        }
    }

    public function bankStatement(Account $account) {

        return View::make('Admin/pages/account/editBankAccount', compact('account'));
    }

    public function handleBankStatement() {
        $account = Account::findOrFail(Input::get('account'));
        
        
        if(Input::get('bank_statement')==1){

        $account->bank_statement=Input::get('bank_statement');

        // store bank statement;

        $account->save();

       //update information to Valid table


$member_id = $account->membership_id;

//submit money to date
$toDate=$account->to;
        
//return $date;

//converting date to srting
$date=AppHelper::dateToString($toDate);

//validateion upto date

$upToDate=AppHelper::addThreeYear($toDate);


//converting date to srting
$upToDate=AppHelper::dateToString($upToDate);


$currentDate=  AppHelper::currentDate();        
        
//update valid database
DB::update('update valids set valid=1,toDate ='.$date.',upToDate='.$upToDate.' where membership_id='.$member_id);

if($currentDate<$upToDate){

DB::update('update members set status=1 where membership_id='.$member_id);
}




 return Redirect::action('AdminAccountController@index')->with('flash_edit_success','Congratulation,You have submitted a bank statement');
    }
    
    else{
        
        return Redirect::action('AdminAccountController@index')->with('flash_dlt_success','Sorry, You do not submitted any bank statement.');
    
    
    }
    
    
    }
    
    
    
}
