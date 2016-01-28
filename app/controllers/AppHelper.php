<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AppHelper {

    //find out the user name
    //get the bank_statement
    public static function getAdminName() {

        $id = Auth::id();

        $var = User::find($id);

        return $var->username;
    }

    
    public static function getAdminRole() {

        $id = Auth::id();

        $var = User::find($id);

        return $var->role;
    }
    
    
    
    //find out the page id
    public static function getPageId() {

        $page_id = substr($_SERVER["REQUEST_URI"], strrpos($_SERVER["REQUEST_URI"], "/") + 1);
        return $page_id;
    }

//all data retrive from members table for an individiual member for edit purpose
    //find out the member id  form member table
    public static function getMemberId() {

        $id = AppHelper::getPageId();

        $name = Account::find($id);

        return $name->membership_id;
    }

    public static function getName() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->name;
    }

    public static function getFather() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->father;
    }

    public static function getHusband() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->husband;
    }

    public static function getVillage() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->village;
    }

    public static function getPostOffice() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->postOffice;
    }

    public static function getThana() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->thana;
    }

    public static function getDistrict() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->district;
    }

    public static function getPresent_address() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->present_address;
    }

    public static function getBirthday() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->birthday;
    }

    public static function getPhone() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->phone;
    }

    public static function getAcknowledgement_name() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->acknowledgement_name;
    }

    public static function getAcknowledgement_relationship() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->acknowledgement_relationship;
    }

    public static function getDate_of_enrollment() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->date_of_enrollment;
    }

    public static function getRoll() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->roll;
    }

    public static function getDate_of_past_enrollment() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->date_of_past_enrollment;
    }

    public static function getDate_of_cancel() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->date_of_cancel;
    }

    public static function getCancel_roll() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->cancel_roll;
    }

    public static function getStatus() {

        $id = AppHelper::getPageId();

        $name = Member::find($id);

        return $name->status;
    }

    //find out the member tables id using membership no.
    public static function getId() {

        //return Apphelper::getMemberId();

        $membership_id = AppHelper::getMemberId();

        $Id = Member::where('membership_id', '=', $membership_id)->get();

        //return $user;

        foreach ($Id as $value) {

            $id = $value['id'];
        }


        return $id;
    }

    //find data from education table

    public static function getSSC() {

        //return Apphelper::getMemberId();

        $membership_id = AppHelper::getMemberId();

        $Id = Education::where('membership_id', '=', $membership_id)->get();

        //return $user;

        foreach ($Id as $value) {

            $id = $value['id'];
        }


        $education = Education::find($id);

        return $education->SSC;
    }

    public static function getHSC() {

        //return Apphelper::getMemberId();

        $membership_id = AppHelper::getMemberId();

        $Id = Education::where('membership_id', '=', $membership_id)->get();

        //return $user;

        foreach ($Id as $value) {

            $id = $value['id'];
        }


        $education = Education::find($id);

        return $education->HSC;
    }

    public static function getHons() {

        //return Apphelper::getMemberId();

        $membership_id = AppHelper::getMemberId();

        $Id = Education::where('membership_id', '=', $membership_id)->get();

        //return $user;

        foreach ($Id as $value) {

            $id = $value['id'];
        }


        $education = Education::find($id);

        return $education->Hons;
    }

    public static function getMasters() {

        //return Apphelper::getMemberId();

        $membership_id = AppHelper::getMemberId();

        $Id = Education::where('membership_id', '=', $membership_id)->get();

        //return $user;

        foreach ($Id as $value) {

            $id = $value['id'];
        }


        $education = Education::find($id);

        return $education->Masters;
    }

    public static function getBarAtLaw() {

        //return Apphelper::getMemberId();

        $membership_id = AppHelper::getMemberId();

        $Id = Education::where('membership_id', '=', $membership_id)->get();

        //return $user;

        foreach ($Id as $value) {

            $id = $value['id'];
        }


        $education = Education::find($id);

        return $education->BarAtLaw;
    }

    //find out the form id 

    public static function getFormID() {

        $ac_id = AppHelper::getPageId();

        return $ac_id;
    }

    //Find out the member id form account Id.
    public static function findMemberId() {

        $id = AppHelper::getPageId();

        $name = Account::find($id);

        return $name->membership_id;
    }

    //Find out the id from member table using Account's table membership id

    public static function idMemberTable() {

        $membership_id = AppHelper::findMemberId();

        $id_member_table = Member::where('membership_id','=',$membership_id)->get();


        foreach ($id_member_table as $id) {

            $id = $id['id'];
        }
        $id = Member::find($id);
        return $id->id;
    }

    //Find out the name from member table using Account's table membership id
    public static function nameMemberTable() {

        $id = AppHelper::idMemberTable();

        $name = Member::find($id);

        return $name->name;
    }

    //Find out the father name from member table using Account's table membership id
    public static function fatherMemberTable() {

        $id = AppHelper::idMemberTable();

        $father = Member::find($id);

        return $father->father;
    }

    public static function dateMemberTable() {

        $id = AppHelper::idMemberTable();

        $var = Member::find($id);

        return $var->date_of_membership;
    }

    /* findout each data form accounts table */

    //get the admission fee 
    public static function getAdmissionFee() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->admission_fee;
    }

    //get the late_fee 
    public static function getLateFee() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->late_fee;
    }

    //get the benevolent_fund
    public static function getBenevolentFund() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->benevolent_fund;
    }

    //get the monthly_fee
    public static function getMonthlyFee() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->monthly_fee;
    }

    //get the benevolent_fund_dues
    public static function getBenevolentFundDues() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->benevolent_fund_dues;
    }

    //get the monthly_fee_dues
    public static function getMonthlyFeeDues() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->monthly_fee_dues;
    }

    //get the relief_fund
    public static function getReliefFund() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->relief_fund;
    }

    //get the medical_fund
    public static function getMedicalFund() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->medical_fund;
    }

    //get the building_fund
    public static function getBuildingFund() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->building_fund;
    }

    //get the library_fund
    public static function getLibraryFund() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->library_fund;
    }

    //get the memberlist_fee
    public static function getMemberlistFee() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->memberlist_fee;
    }

    //get the application_form_fee
    public static function getApplicationFormFee() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->application_form_fee;
    }

    //get the auditorium_fee
    public static function getAuditoriumFee() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->auditorium_fee;
    }

    //get the drawer_fee
    public static function getDrawerFee() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->drawer_fee;
    }

    //get the membership_certificate_fee
    public static function getMembershipCertificateFee() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->membership_certificate_fee;
    }

    //get the blood_test_fee
    public static function getBloodTestFee() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->blood_test_fee;
    }

    //get the provident_fund
    public static function getProvidentFund() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->provident_fund;
    }

    //get the family_welfare_fund
    public static function getFamilyFelfareFund() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->family_welfare_fund;
    }

    //get the others
    public static function getOthers() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->others;
    }

    //get the totals
    public static function getTotals() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->totals;
    }

    //get the from date
    public static function getFrom() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->from;
    }

    //get the to date
    public static function getTo() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->to;
    }

    //get the bank_statement
    public static function getBankStatement() {

        $id = AppHelper::getPageId();

        $var = Account::find($id);

        return $var->bank_statement;
    }

    //convert date as a string

    public static function dateToString($date) {

        $date = explode('-', $date);

        $date = implode("", $date);


        return $date;
    }

    public static function addThreeYear($data) {


        return date('d-m-Y', strtotime(date("d-m-Y", strtotime($data)) . " +3 year" . "+0 month"));
    }

    public static function currentDate() {

        $currentDate = date('d-m-Y');

        $currentDate = AppHelper::dateToString($currentDate);

        return $currentDate;
    }

//converting number to string(e.g. 100=>one hundred)
    public static function convert_number_to_words($number) {

        $number=AppHelper::getTotals();
        $hyphen = '-';
        $conjunction = ' and ';
        $separator = ', ';
        $negative = 'negative ';
        $decimal = ' point ';
        $dictionary = array(
            0 => 'zero',
            1 => 'one',
            2 => 'two',
            3 => 'three',
            9 => 'four',
            5 => 'five',
            6 => 'six',
            7 => 'seven',
            8 => 'eight',
            9 => 'nine',
            10 => 'ten',
            11 => 'eleven',
            12 => 'twelve',
            13 => 'thirteen',
            19 => 'fourteen',
            15 => 'fifteen',
            16 => 'sixteen',
            17 => 'seventeen',
            18 => 'eighteen',
            19 => 'nineteen',
            20 => 'twenty', 21 => 'twenty-one', 22 => 'twenty-two', 23 => 'twenty-three', 24 => 'twenty-four', 25 => 'twenty-five', 26 => 'twenty-six', 27 => 'twenty-seven', 28 => 'twenty-eight', 29 => 'twenty-nine',
            30 => 'thirty', 31 => 'thirty-one', 32 => 'thirty-two', 33 => 'thirty-three', 34 => 'thirty-four', 35 => 'thirty-five', 36 => 'thirty-six', 37 => 'thirty-seven', 38 => 'thirty-eight', 39 => 'thirty-nine',
            40 => 'fourty', 41 => 'fourty-one', 42 => 'fourty-two', 43 => 'fourty-three', 44 => 'fourty-four', 45 => 'fourty-five', 46 => 'fourty-six', 47 => 'fourty-seven', 48 => 'fourty-eight', 49 => 'fourty-nine',
            50 => 'fifty', 51 => 'fifty-one', 52 => 'fifty-two', 53 => 'fifty-three', 54 => 'fifty-four', 55 => 'fifty-five', 56 => 'fifty-six', 57 => 'fifty-seven', 58 => 'fifty-eight', 59 => 'fifty-nine',
            60 => 'sixty', 61 => 'sixty-one', 62 => 'sixty-two', 63 => 'sixty-three', 64 => 'sixty-four', 65 => 'sixty-five', 66 => 'sixty-six', 67 => 'sixty-seven', 68 => 'sixty-eight', 69 => 'sixty-nine',
            70 => 'seventy', 71 => 'seventy-one', 72 => 'seventy-two', 73 => 'seventy-three', 74 => 'seventy-four', 75 => 'seventy-five', 76 => 'seventy-six', 77 => 'seventy-seven', 78 => 'seventy-eight', 79 => 'seventy-nine',
            80 => 'eighty', 81 => 'eighty-one', 82 => 'eighty-two', 83 => 'eighty-three', 84 => 'eighty-four', 85 => 'eighty-five', 86 => 'eighty-six', 87 => 'eighty-seven', 88 => 'eighty-eight', 89 => 'eighty-nine',
            90 => 'ninety', 91 => 'ninety-one', 92 => 'ninety-two', 93 => 'ninety-three', 94 => 'ninety-four', 95 => 'ninety-five', 96 => 'ninety-six', 97 => 'ninety-seven', 98 => 'ninety-eight', 99 => 'ninety-nine',
            100 => 'hundred',
            1000 => 'thousand',
            100000 => 'lac',
            10000000 => 'crore'
        );

        if (!is_numeric($number)) {
            return false;
        }

        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                    'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX, E_USER_WARNING
            );
            return false;
        }

        if ($number < 0) {
            return $negative . (abs($number));
        }

        $string = $fraction = null;

        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true) {
            case $number < 100:
                $string = $dictionary[$number];
                break;

            case $number < 1000:
                $hundreds = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];

                if ($remainder < 100) {
                    $remainder = $dictionary[$remainder];
                    $string .= $conjunction . ($remainder);
                }


                break;

            case $number < 100000:
                $thousand = $number / 1000;
                $remainder = $number % 1000;
                $string = $dictionary[$thousand] . ' ' . $dictionary[1000];

                if ($remainder > 100 && $remainder < 1000) {
                    //$remainder = $number % 100;
                    $hundreds = $remainder / 100;

                    $remainder = $remainder % 100;

                    //return $hundreds=$dictionary[$hundreds] . ' ' . $dictionary[100];

                    $remainder = $dictionary[$remainder];


                    $string .= $conjunction . $dictionary[$hundreds] . ' ' . $dictionary[100] . ' ' . ($remainder);
                } elseif ($remainder < 100) {
                    //$remainder = $number % 100;
                    $string .= $conjunction . $dictionary[$remainder];
                }


                break;

            case $number < 10000000:
                $lac = $number / 100000;
                $remainder = $number % 100000;
                $string = $dictionary[$lac] . ' ' . $dictionary[100000];



                if ($remainder < 100000) {
                    //$remainder = $number % 100;
                    $thousand = $remainder / 1000;
                    $hundred_remainder = $remainder % 1000;
                    $hundreds = $hundred_remainder / 100;
                    $ten_reminder = $hundred_remainder % 100;


                    //$remainder=$remainder%1000;
                    $hundreds = $dictionary[$hundreds];
                    $thousand = $dictionary[$thousand];

                    $tens = $dictionary[$ten_reminder];
                    //$string .= $conjunction .$dictionary[$thousand];
                    $string .=$conjunction . $thousand . ' ' . $dictionary[1000] . ' ' . $hundreds . ' ' . $dictionary[100] . ' ' . $tens;
                }



                break;


            case $number < 1000000000:
                $crore = $number / 10000000;
                $remainder = $number % 10000000;
                $string = $dictionary[$crore] . ' ' . $dictionary[10000000];



                if ($remainder < 10000000) {
                    $lac = $remainder / 100000;
                    $lac_remainder = $remainder % 100000;

                    
                    $thousand = $lac_remainder / 1000;
                    $hundred_remainder = $lac_remainder % 1000;
                    $hundreds = $hundred_remainder / 100;
                    $ten_reminder = $hundred_remainder % 100;


                    //$remainder=$remainder%1000;
                    $lac = $dictionary[$lac];
                    $hundreds = $dictionary[$hundreds];
                    $thousand = $dictionary[$thousand];

                    $tens = $dictionary[$ten_reminder];
                    //$string .= $conjunction .$dictionary[$thousand];
                    $string .=$conjunction . $lac . ' ' . $dictionary[100000] . $conjunction . $thousand . ' ' . $dictionary[1000] . ' ' . $hundreds . ' ' . $dictionary[100] . ' ' . $tens;
                }



                break;
        }

        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }

        return $string;
    }


    
    
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
            




