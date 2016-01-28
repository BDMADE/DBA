@extends('Admin/layout')

@section('content')

@include('Admin/flash_msg')

@if(count($errors)>0)
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    @foreach($errors->all() as $message)
    <li>{{ $message }}</li>
    @endforeach

</div>

@endif
<div class="container">
    {{Form::open(array('action'=>'AdminAccountController@handleEdit','id'=>'editPage'))}}

    <div class="row">
        <div class="col-md-12"> 
            <div class="box box-solid box-info">
                <div class="box-header">
                    <h3 class="box-title">Information</h3>

                </div><!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    <div class="form-group">
                        <label>Membership Number</label>
                        <input type="text" name="membership_id" class="form-control" id="membership_id"  placeholder="Enter Membership Number"  value="{{$account->membership_id}}" required="">
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>From</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="from" class="form-control pull-right" id="from" value="{{$account->from}}"/>
                                </div><!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-md-6">    
                            <div class="form-group">
                                <label>To</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="to" class="form-control pull-right" id="to" value="{{$account->to}}"/>
                                </div><!-- /.input group -->
                            </div><!-- /.form group --> 

                        </div>
                    </div>
                </div><!-- /.box-body -->



            </div><!-- /.box -->

        </div>
    </div>

    <!--This row is made for pay form-Page1 --> 
    <div class="row">
        <!--1st row left column -->
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Regular Fee</h3>

                </div><!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    <div class="form-group">
                        <label>Monthly Fee</label>
                        <input type="text" name="monthly_fee" class="form-control" id="monthly_fee" placeholder="Enter Monthly Fee" value="{{$account->monthly_fee}}" >
                    </div>
                    <div class="form-group">

                        <label>Benevolent Fund</label>
                        <input type="text" name="benevolent_fund" class="form-control" id="benevolent_fund" placeholder="Enter Benevolent" value="{{$account->benevolent_fund}}" >
                    </div>
                    <div class="form-group">
                        <label>Building Fund</label>
                        <input type="text"  name="building_fund" class="form-control" id="building_fund" placeholder="Enter Building Fund" value="{{$account->building_fund}}">
                    </div>
                    <div class="form-group">
                        <label>Relief Fund</label>
                        <input type="text"  name="relief_fund" class="form-control" id="relief_fund" placeholder="Enter Relief Fund" value="{{$account->relief_fund}}">
                    </div>


                    <div class="form-group">
                        <label>Medical Fund</label>
                        <input type="text" name="medical_fund" class="form-control" id="medical_fund" placeholder="Enter Medical Fund" value="{{$account->medical_fund}}" >
                    </div>

                    <div class="form-group">
                        <label>Library Fund</label>
                        <input type="text" name="library_fund" class="form-control" id="library_fund" placeholder="Enter Library Fund" value="{{$account->library_fund}}">
                    </div>



                    <div class="form-group">
                        <label>Provident Fund </label>
                        <input type="text" name="provident_fund" class="form-control" id="provident_fund" placeholder="Enter Provident Fund" value="{{$account->provident_fund}}">
                    </div>

                    <div class="form-group">
                        <label>Others </label>
                        <input type="text" name="others" class="form-control" id="others" placeholder="Enter Other Fee" value="{{$account->others}}">
                    </div>


                </div><!-- /.box-body -->



            </div><!-- /.box -->


        </div>

        <!--1st row right column -->
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Admission</h3>

                </div><!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    <div class="form-group">
                        <label>Admission Fee</label>
                        <input type="text" name="admission_fee" class="form-control" id="admission_fee"  placeholder="Enter Admission Fee" value="{{$account->admission_fee}}">
                    </div>
                    <div class="form-group">
                        <label>ID Card/Application Form Fee</label>
                        <input type="text" name="application_form_fee" class="form-control" id="application_form_fee" placeholder="Enter ID Card/Application Form Fee " value="{{$account->application_form_fee}}">
                    </div>
                    <div class="form-group">
                        <label>Member list/Constitution Fee</label>
                        <input type="text" name="memberlist_fee" class="form-control" id="memberlist_fee" placeholder="Enter Member list/Constitution Fee" value="{{$account->memberlist_fee}}">
                    </div>

                </div><!-- /.box-body -->



            </div><!-- /.box -->

            <div class="box box-solid box-danger">
                <div class="box-header">
                    <h3 class="box-title">Dues</h3>

                </div><!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    <div class="form-group">
                        <label>Late Fee</label>
                        <input type="text" name="late_fee" class="form-control" id="late_fee"  placeholder="Enter Late Fee" value="{{$account->late_fee}}" >
                    </div>

                    <div class="form-group">
                        <label>Dues of Benevolent Fund</label>
                        <input type="text" name="benevolent_fund_dues" class="form-control" id="benevolent_fund_dues"  placeholder="Enter Benevolent Fund Dues" value="{{$account->benevolent_fund_dues}}">
                    </div>

                    <div class="form-group">
                        <label>Dues of Monthly Fee</label>
                        <input type="text" name="monthly_fee_dues" class="form-control" id="monthly_fee_dues"  placeholder="Enter Monthly Fee Dues" value="{{$account->monthly_fee_dues}}" >
                    </div>

                </div><!-- /.box-body -->



            </div><!-- /.box -->


        </div>


        <div class="col-md-4">


            <!-- general form elements -->
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Others</h3>

                </div><!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    <div class="form-group">
                        <label>Auditorium Fee</label>
                        <input type="text" name="auditorium_fee" class="form-control" id="auditorium_fee"  placeholder="Enter Auditorium Fee" value="{{$account->auditorium_fee}}">
                    </div>
                    <div class="form-group">
                        <label>Drawer Fee /Legal Aid</label>
                        <input type="text" name="drawer_fee" class="form-control" id="drawer_fee" placeholder="EnterDrawer Fee /Legal Aid Fee " value="{{$account->drawer_fee}}">
                    </div>

                    <div class="form-group">
                        <label>Membership Certificate</label>
                        <input type="text" name="membership_certificate_fee" class="form-control" id="membership_certificate_fee" placeholder="Enter Membership Certificate Fee " value="{{$account->membership_certificate_fee}}">
                    </div>
                    <div class="form-group">
                        <label>Blood Sugar Test Fee</label>
                        <input type="text" name="blood_test_fee" class="form-control" id="blood_test_fee" placeholder="Enter Blood Sugar Test Fee" value="{{$account->blood_test_fee}}">
                    </div>




                    <div class="form-group">
                        <label>Lawyer Family Welfare Fund</label>
                        <input type="text" name="family_welfare_fund" class="form-control" id="family_welfare_fund" placeholder="Enter Lawyer Family Welfare Fund " value="{{$account->family_welfare_fund}}">
                    </div>


                </div><!-- /.box-body -->



            </div><!-- /.box -->
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Total</h3>

                </div><!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    <center><h2>{{$account->totals}}</h2></center>
                    <input class="btn btn-flat btn-primary" type="submit" id="view" name="view" value="View" />
                    <!-- The following div will use to display data from server -->



                </div><!-- /.box-body -->



            </div><!-- /.box -->
        </div>

    </div>

    <input type="submit" name="save" value="Submit" id="save" class="btn btn-primary btn-success">

    <a href="#" class="btn btn-flat btn-primary" onclick="printContent('printTable')">Print The Documents</a>

    <a href="{{action('AdminAccountController@formCancel')}}" class="btn btn-default">Please Cancel</a>
    <input type="hidden"  name="account"  value="{{$account->id}}"/>
    {{Form::close()}}






    <div class="hidden-md hidden-lg hidden-sm hidden-xs">
        <div id="printTable">

            <div class="row">
                <div class="col-md-3 bdr">


                    1st Part<b>&nbsp;:</b>&nbsp;<b>Bank</b><span class="space-form">Form No.<b> : {{AppHelper::getFormID()}}</b></span>
                    <div class="space-bank-name"><h1>Pubali Bank Ltd.</h1></div>
                    <div class="space-bank-name-branch"><h5>Dhaka Bar Library Branch, Dhaka.</h5></div>
                    <div class="space-form-date"><h5>Date <b>: .............................</b></h5></div>

                    <h5>As per particulars overleaf the amount is deposited into the Collection<b> Account No. 4910</b> of the Dhaka Bar Association standing in the Pubali Bank,Dhaka Bar Library Branch,Dhaka.</h5>
                    <br/>
                    <div>
                         Taka<b>&nbsp;:&nbsp;{{AppHelper::getTotals()}}&nbsp;Taka</b>
                    </div>
                    <br/>
                    <div>
                        In Word<b>&nbsp;:&nbsp;<?php echo AppHelper::convert_number_to_words(AppHelper::getTotals())?>&nbsp;Taka</b>
                    </div>
                    <br/>
                    
                    <div>
                        Scroll No.<b>&nbsp;:&nbsp;.....................................................</b>
                    </div>
                    <br/>
                    <div>
                        Main Cashier<b>&nbsp;:&nbsp;................................................</b>
                    </div>
                    <br/>
                    <div>
                        Scroll Cash.<b>&nbsp;:&nbsp;..................................................</b>
                    </div>
                    <br/>
                    <div>
                        Signature of Officer<b>&nbsp;:&nbsp;.......................................</b>
                    </div>
                    <br/>
                    <div>
                        (1)&nbsp;Name<b>&nbsp;:&nbsp;{{AppHelper::nameMemberTable()}}</b>
                    </div>
                    <br/>
                    <div>
                        (2)&nbsp;Father/Husband<b>&nbsp;:&nbsp;{{AppHelper::fatherMemberTable()}}</b>
                    </div>
                    <br/>
                    <div>
                        (3)&nbsp;Membership No.<b>&nbsp;:&nbsp;{{AppHelper::findMemberId()}}</b>
                    </div>
                    <br/>
                    <div>
                        (4)&nbsp;Date of Membership<b>&nbsp;:&nbsp;{{AppHelper::dateMemberTable()}}</b>
                    </div>

                </div>

                <div class="col-md-3 bdr">


                    2nd Part<b>&nbsp;:</b>&nbsp;<b>DBA</b><span class="space-form">Form No.<b> : {{AppHelper::getFormID()}}</b></span>
                    <div class="space-bank-name"><h1>Pubali Bank Ltd.</h1></div>
                    <div class="space-bank-name-branch"><h5>Dhaka Bar Library Branch, Dhaka.</h5></div>
                    <div class="space-form-date"><h5>Date <b>: .............................</b></h5></div>

                    <h5>As per particulars overleaf the amount is deposited into the Collection<b> Account No. 4910</b> of the Dhaka Bar Association standing in the Pubali Bank,Dhaka Bar Library Branch,Dhaka.</h5>
                    <br/>
                    <div>
                         Taka<b>&nbsp;:&nbsp;{{AppHelper::getTotals()}}&nbsp;Taka</b>
                    </div>
                    <br/>
                    <div>
                       In Word<b>&nbsp;:&nbsp;<?php echo AppHelper::convert_number_to_words(AppHelper::getTotals())?>&nbsp;Taka</b>
                    </div>
                    
                    
                    <br/>
                    <div>
                        Scroll No.<b>&nbsp;:&nbsp;.....................................................</b>
                    </div>
                    <br/>
                    <div>
                        Main Cashier<b>&nbsp;:&nbsp;................................................</b>
                    </div>
                    <br/>
                    <div>
                        Scroll Cash.<b>&nbsp;:&nbsp;..................................................</b>
                    </div>
                    <br/>
                    <div>
                        Signature of Officer<b>&nbsp;:&nbsp;.......................................</b>
                    </div>
                    <br/>
                    <div>
                        (1)&nbsp;Name<b>&nbsp;:&nbsp;{{AppHelper::nameMemberTable()}}</b>
                    </div>
                    <br/>
                    <div>
                        (2)&nbsp;Father/Husband<b>&nbsp;:&nbsp;{{AppHelper::fatherMemberTable()}}</b>
                    </div>
                    <br/>
                    <div>
                        (3)&nbsp;Membership No.<b>&nbsp;:&nbsp;{{AppHelper::findMemberId()}}</b>
                    </div>
                    <br/>
                    <div>
                        (4)&nbsp;Date of Membership<b>&nbsp;:&nbsp;{{AppHelper::dateMemberTable()}}</b>
                    </div>

                </div>

                <div class="col-md-3 bdr">


                    3rd Part<b>&nbsp;:</b>&nbsp;<b>Office Copy</b><span class="space-form-depositor">Form No.<b> : {{AppHelper::getFormID()}}</b></span>
                    <div class="space-bank-name"><h1>Pubali Bank Ltd.</h1></div>
                    <div class="space-bank-name-branch"><h5>Dhaka Bar Library Branch, Dhaka.</h5></div>
                    <div class="space-form-date"><h5>Date <b>: .............................</b></h5></div>

                    <h5>As per particulars overleaf the amount is deposited into the Collection<b> Account No. 4910</b> of the Dhaka Bar Association standing in the Pubali Bank,Dhaka Bar Library Branch,Dhaka.</h5>
                    <br/>
                    <div>
                         Taka<b>&nbsp;:&nbsp;{{AppHelper::getTotals()}}&nbsp;Taka</b>
                    </div>
                    <br/>
                    <div>
                        In Word<b>&nbsp;:&nbsp;<?php echo AppHelper::convert_number_to_words(AppHelper::getTotals())?>&nbsp;Taka</b>
                    </div>
                   
                    <br/>
                    <div>
                        Scroll No.<b>&nbsp;:&nbsp;.....................................................</b>
                    </div>
                    <br/>
                    <div>
                        Main Cashier<b>&nbsp;:&nbsp;................................................</b>
                    </div>
                    <br/>
                    <div>
                        Scroll Cash.<b>&nbsp;:&nbsp;..................................................</b>
                    </div>
                    <br/>
                    <div>
                        Signature of Officer<b>&nbsp;:&nbsp;.......................................</b>
                    </div>
                    <br/>
                    <div>
                        (1)&nbsp;Name<b>&nbsp;:&nbsp;{{AppHelper::nameMemberTable()}}</b>
                    </div>
                    <br/>
                    <div>
                        (2)&nbsp;Father/Husband<b>&nbsp;:&nbsp;{{AppHelper::fatherMemberTable()}}</b>
                    </div>
                    <br/>
                    <div>
                        (3)&nbsp;Membership No.<b>&nbsp;:&nbsp;{{AppHelper::findMemberId()}}</b>
                    </div>
                    <br/>
                    <div>
                        (4)&nbsp;Date of Membership<b>&nbsp;:&nbsp;{{AppHelper::dateMemberTable()}}</b>
                    </div>

                </div>    

                <div class="col-md-3">


                    4th Part<b>&nbsp;:</b>&nbsp;<b>Depositor</b><span class="space-form-depositor">Form No.<b> : {{AppHelper::getFormID()}}</b></span>
                    <div class="space-bank-name"><h1>Pubali Bank Ltd.</h1></div>
                    <div class="space-bank-name-branch"><h5>Dhaka Bar Library Branch, Dhaka.</h5></div>
                    <div class="space-form-date"><h5>Date <b>: .............................</b></h5></div>

                    <h5>As per particulars overleaf the amount is deposited into the Collection<b> Account No. 4910</b> of the Dhaka Bar Association standing in the Pubali Bank,Dhaka Bar Library Branch,Dhaka.</h5>
                    <br/>
                    <div>
                         Taka<b>&nbsp;:&nbsp;{{AppHelper::getTotals()}}&nbsp;Taka</b>
                    </div>
                    <br/>
                    <div>
                      In Word<b>&nbsp;:&nbsp;<?php echo AppHelper::convert_number_to_words(AppHelper::getTotals())?>&nbsp;Taka</b>
                    </div>
                    
                    <br/>
                    <div>
                        Scroll No.<b>&nbsp;:&nbsp;.....................................................</b>
                    </div>
                    <br/>
                    <div>
                        Main Cashier<b>&nbsp;:&nbsp;................................................</b>
                    </div>
                    <br/>
                    <div>
                        Scroll Cash.<b>&nbsp;:&nbsp;..................................................</b>
                    </div>
                    <br/>
                    <div>
                        Signature of Officer<b>&nbsp;:&nbsp;.......................................</b>
                    </div>
                    <br/>
                    <div>
                        (1)&nbsp;Name<b>&nbsp;:&nbsp;{{AppHelper::nameMemberTable()}}</b>
                    </div>
                    <br/>
                    <div>
                        (2)&nbsp;Father/Husband<b>&nbsp;:&nbsp;{{AppHelper::fatherMemberTable()}}</b>
                    </div>
                    <br/>
                    <div>
                        (3)&nbsp;Membership No.<b>&nbsp;:&nbsp;{{AppHelper::findMemberId()}}</b>
                    </div>
                    <br/>
                    <div>
                        (4)&nbsp;Date of Membership<b>&nbsp;:&nbsp;{{AppHelper::dateMemberTable()}}</b>
                    </div>

                </div>    

            </div>

            <br/>
            <!--This row is made for pay form -Page2-->    
            <div class="row">

                <div class="col-md-3 bdr">

                    <div class="zero-margin">
                        <center>
                            <h3>Dhaka Bar Association</h3>
                            <address>6-7,Court House Street,Dhaka-1100</address>
                            <small>Phone: 9578788, 7119682,7119815</small>

                        </center>
                    </div>


                    <table class="table table-bordered">

                        <div class="date">
                            From<b> : {{AppHelper::getFrom()}}</b> --- To<b> : {{AppHelper::getTo()}}</b>
                        </div
                        <tr>
                            <th style="width:7px">No.</th>
                            <th>Description</th>
                            <th>Amount</th>

                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Admission Fee</td>
                            <td>{{AppHelper::getAdmissionFee()}}</td>

                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Late Fee</td>
                            <td>{{AppHelper::getLateFee()}}</td>

                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Benevolent Fund</td>
                            <td>{{AppHelper::getBenevolentFund()}}</td>

                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Monthly Fee</td>
                            <td>{{AppHelper::getMonthlyFee()}}</td>

                        </tr>
                        <tr>
                            <td>5.</td>
                            <td> Dues of Benevolent Fund </td>
                            <td>{{AppHelper::getBenevolentFundDues()}}</td>

                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Dues of Monthly Fee</td>
                            <td>{{AppHelper::getMonthlyFeeDues()}}</td>

                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Building Fund</td>
                            <td>{{AppHelper::getBuildingFund()}}</td>

                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Relief Fund</td>
                            <td>{{AppHelper::getReliefFund()}}</td>

                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Medical Fund</td>
                            <td>{{AppHelper::getMedicalFund()}}</td>

                        </tr>

                        <tr>
                            <td>10.</td>
                            <td>Library Fund</td>
                            <td>{{AppHelper::getLibraryFund()}}</td>

                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>Member list/Constitution Fee</td>
                            <td>{{AppHelper::getMemberlistFee()}}</td>

                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>ID Card/Application Fee</td>
                            <td>{{AppHelper::getApplicationFormFee()}}</td>

                        </tr>
                        <tr>
                            <td>13.</td>
                            <td>Auditorium Fee</td>
                            <td>{{AppHelper::getAuditoriumFee()}}</td>

                        </tr>
                        <tr>
                            <td>14.</td>
                            <td>Drawer Fee /Legal Aid</td>
                            <td>{{AppHelper::getDrawerFee()}}</td>

                        </tr>
                        <tr>
                            <td>15.</td>
                            <td>Membership Certificate</td>
                            <td>{{AppHelper::getMembershipCertificateFee()}}</td>

                        </tr>

                        <tr>
                            <td>16.</td>
                            <td>Blood Sugar Test Fee</td>
                            <td>{{AppHelper::getBloodTestFee()}}</td>

                        </tr>
                        <tr>
                            <td>17.</td>
                            <td>Provident Fund</td>
                            <td>{{AppHelper::getProvidentFund()}}</td>

                        </tr>
                        <tr>
                            <td>18.</td>
                            <td>Lawyer Family Welfare Fund</td>
                            <td>{{AppHelper::getFamilyFelfareFund()}}</td>

                        </tr>
                        <tr>
                            <td>19.</td>
                            <td>Miscellaneous</td>
                            <td>{{AppHelper::getOthers()}}</td>

                        </tr>


                        <tr>
                            <td></td>   
                            <td>Total</td>

                            <td><b>{{AppHelper::getTotals()}}</b></td>
                        </tr>

                    </table>
                    </br></br>
                    <center><span class="space">Accountant</span> <span class="space">Collector</span> <span class="space">Depositor</span></center>

                </div>

                <div class="col-md-3 bdr">

                    <div class="zero-margin">
                        <center>
                            <h3>Dhaka Bar Association</h3>
                            <address>6-7,Court House Street,Dhaka-1100</address>
                            <small>Phone: 9578788, 7119682,7119815</small>

                        </center>
                    </div>


                    <table class="table table-bordered">

                        <div class="date">
                            From<b> : {{AppHelper::getFrom()}}</b> --- To<b> : {{AppHelper::getTo()}}</b>
                        </div
                        <tr>
                            <th style="width:7px">No.</th>
                            <th>Description</th>
                            <th>Amount</th>

                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Admission Fee</td>
                            <td>{{AppHelper::getAdmissionFee()}}</td>

                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Late Fee</td>
                            <td>{{AppHelper::getLateFee()}}</td>

                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Benevolent Fund</td>
                            <td>{{AppHelper::getBenevolentFund()}}</td>

                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Monthly Fee</td>
                            <td>{{AppHelper::getMonthlyFee()}}</td>

                        </tr>
                        <tr>
                            <td>5.</td>
                            <td> Dues of Benevolent Fund </td>
                            <td>{{AppHelper::getBenevolentFundDues()}}</td>

                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Dues of Monthly Fee</td>
                            <td>{{AppHelper::getMonthlyFeeDues()}}</td>

                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Building Fund</td>
                            <td>{{AppHelper::getBuildingFund()}}</td>

                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Relief Fund</td>
                            <td>{{AppHelper::getReliefFund()}}</td>

                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Medical Fund</td>
                            <td>{{AppHelper::getMedicalFund()}}</td>

                        </tr>

                        <tr>
                            <td>10.</td>
                            <td>Library Fund</td>
                            <td>{{AppHelper::getLibraryFund()}}</td>

                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>Member list/Constitution Fee</td>
                            <td>{{AppHelper::getMemberlistFee()}}</td>

                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>ID Card/Application Fee</td>
                            <td>{{AppHelper::getApplicationFormFee()}}</td>

                        </tr>
                        <tr>
                            <td>13.</td>
                            <td>Auditorium Fee</td>
                            <td>{{AppHelper::getAuditoriumFee()}}</td>

                        </tr>
                        <tr>
                            <td>14.</td>
                            <td>Drawer Fee /Legal Aid</td>
                            <td>{{AppHelper::getDrawerFee()}}</td>

                        </tr>
                        <tr>
                            <td>15.</td>
                            <td>Membership Certificate</td>
                            <td>{{AppHelper::getMembershipCertificateFee()}}</td>

                        </tr>

                        <tr>
                            <td>16.</td>
                            <td>Blood Sugar Test Fee</td>
                            <td>{{AppHelper::getBloodTestFee()}}</td>

                        </tr>
                        <tr>
                            <td>17.</td>
                            <td>Provident Fund</td>
                            <td>{{AppHelper::getProvidentFund()}}</td>

                        </tr>
                        <tr>
                            <td>18.</td>
                            <td>Lawyer Family Welfare Fund</td>
                            <td>{{AppHelper::getFamilyFelfareFund()}}</td>

                        </tr>
                        <tr>
                            <td>19.</td>
                            <td>Miscellaneous</td>
                            <td>{{AppHelper::getOthers()}}</td>

                        </tr>


                        <tr>
                            <td></td>   
                            <td>Total</td>

                            <td><b>{{AppHelper::getTotals()}}</b></td>
                        </tr>

                    </table>
                    </br></br>
                    <center><span class="space">Accountant</span> <span class="space">Collector</span> <span class="space">Depositor</span></center>

                </div>

                <div class="col-md-3 bdr">

                    <div class="zero-margin">
                        <center>
                            <h3>Dhaka Bar Association</h3>
                            <address>6-7,Court House Street,Dhaka-1100</address>
                            <small>Phone: 9578788, 7119682,7119815</small>

                        </center>
                    </div>


                    <table class="table table-bordered">

                        <div class="date">
                            From<b> : {{AppHelper::getFrom()}}</b> --- To<b> : {{AppHelper::getTo()}}</b>
                        </div
                        <tr>
                            <th style="width:7px">No.</th>
                            <th>Description</th>
                            <th>Amount</th>

                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Admission Fee</td>
                            <td>{{AppHelper::getAdmissionFee()}}</td>

                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Late Fee</td>
                            <td>{{AppHelper::getLateFee()}}</td>

                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Benevolent Fund</td>
                            <td>{{AppHelper::getBenevolentFund()}}</td>

                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Monthly Fee</td>
                            <td>{{AppHelper::getMonthlyFee()}}</td>

                        </tr>
                        <tr>
                            <td>5.</td>
                            <td> Dues of Benevolent Fund </td>
                            <td>{{AppHelper::getBenevolentFundDues()}}</td>

                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Dues of Monthly Fee</td>
                            <td>{{AppHelper::getMonthlyFeeDues()}}</td>

                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Building Fund</td>
                            <td>{{AppHelper::getBuildingFund()}}</td>

                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Relief Fund</td>
                            <td>{{AppHelper::getReliefFund()}}</td>

                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Medical Fund</td>
                            <td>{{AppHelper::getMedicalFund()}}</td>

                        </tr>

                        <tr>
                            <td>10.</td>
                            <td>Library Fund</td>
                            <td>{{AppHelper::getLibraryFund()}}</td>

                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>Member list/Constitution Fee</td>
                            <td>{{AppHelper::getMemberlistFee()}}</td>

                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>ID Card/Application Fee</td>
                            <td>{{AppHelper::getApplicationFormFee()}}</td>

                        </tr>
                        <tr>
                            <td>13.</td>
                            <td>Auditorium Fee</td>
                            <td>{{AppHelper::getAuditoriumFee()}}</td>

                        </tr>
                        <tr>
                            <td>14.</td>
                            <td>Drawer Fee /Legal Aid</td>
                            <td>{{AppHelper::getDrawerFee()}}</td>

                        </tr>
                        <tr>
                            <td>15.</td>
                            <td>Membership Certificate</td>
                            <td>{{AppHelper::getMembershipCertificateFee()}}</td>

                        </tr>

                        <tr>
                            <td>16.</td>
                            <td>Blood Sugar Test Fee</td>
                            <td>{{AppHelper::getBloodTestFee()}}</td>

                        </tr>
                        <tr>
                            <td>17.</td>
                            <td>Provident Fund</td>
                            <td>{{AppHelper::getProvidentFund()}}</td>

                        </tr>
                        <tr>
                            <td>18.</td>
                            <td>Lawyer Family Welfare Fund</td>
                            <td>{{AppHelper::getFamilyFelfareFund()}}</td>

                        </tr>
                        <tr>
                            <td>19.</td>
                            <td>Miscellaneous</td>
                            <td>{{AppHelper::getOthers()}}</td>

                        </tr>


                        <tr>
                            <td></td>   
                            <td>Total</td>

                            <td><b>{{AppHelper::getTotals()}}</b></td>
                        </tr>

                    </table>
                    </br></br>
                    <center><span class="space">Accountant</span> <span class="space">Collector</span> <span class="space">Depositor</span></center>

                </div>

                <div class="col-md-3">

                    <div class="zero-margin">
                        <center>
                            <h3>Dhaka Bar Association</h3>
                            <address>6-7,Court House Street,Dhaka-1100</address>
                            <small>Phone: 9578788, 7119682,7119815</small>

                        </center>
                    </div>


                    <table class="table table-bordered">

                        <div class="date">
                            From<b> : {{AppHelper::getFrom()}}</b> --- To<b> : {{AppHelper::getTo()}}</b>
                        </div
                        <tr>
                            <th style="width:7px">No.</th>
                            <th>Description</th>
                            <th>Amount</th>

                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Admission Fee</td>
                            <td>{{AppHelper::getAdmissionFee()}}</td>

                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Late Fee</td>
                            <td>{{AppHelper::getLateFee()}}</td>

                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Benevolent Fund</td>
                            <td>{{AppHelper::getBenevolentFund()}}</td>

                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Monthly Fee</td>
                            <td>{{AppHelper::getMonthlyFee()}}</td>

                        </tr>
                        <tr>
                            <td>5.</td>
                            <td> Dues of Benevolent Fund </td>
                            <td>{{AppHelper::getBenevolentFundDues()}}</td>

                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Dues of Monthly Fee</td>
                            <td>{{AppHelper::getMonthlyFeeDues()}}</td>

                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Building Fund</td>
                            <td>{{AppHelper::getBuildingFund()}}</td>

                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Relief Fund</td>
                            <td>{{AppHelper::getReliefFund()}}</td>

                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Medical Fund</td>
                            <td>{{AppHelper::getMedicalFund()}}</td>

                        </tr>

                        <tr>
                            <td>10.</td>
                            <td>Library Fund</td>
                            <td>{{AppHelper::getLibraryFund()}}</td>

                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>Member list/Constitution Fee</td>
                            <td>{{AppHelper::getMemberlistFee()}}</td>

                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>ID Card/Application Fee</td>
                            <td>{{AppHelper::getApplicationFormFee()}}</td>

                        </tr>
                        <tr>
                            <td>13.</td>
                            <td>Auditorium Fee</td>
                            <td>{{AppHelper::getAuditoriumFee()}}</td>

                        </tr>
                        <tr>
                            <td>14.</td>
                            <td>Drawer Fee /Legal Aid</td>
                            <td>{{AppHelper::getDrawerFee()}}</td>

                        </tr>
                        <tr>
                            <td>15.</td>
                            <td>Membership Certificate</td>
                            <td>{{AppHelper::getMembershipCertificateFee()}}</td>

                        </tr>

                        <tr>
                            <td>16.</td>
                            <td>Blood Sugar Test Fee</td>
                            <td>{{AppHelper::getBloodTestFee()}}</td>

                        </tr>
                        <tr>
                            <td>17.</td>
                            <td>Provident Fund</td>
                            <td>{{AppHelper::getProvidentFund()}}</td>

                        </tr>
                        <tr>
                            <td>18.</td>
                            <td>Lawyer Family Welfare Fund</td>
                            <td>{{AppHelper::getFamilyFelfareFund()}}</td>

                        </tr>
                        <tr>
                            <td>19.</td>
                            <td>Miscellaneous</td>
                            <td>{{AppHelper::getOthers()}}</td>

                        </tr>


                        <tr>
                            <td></td>   
                            <td>Total</td>

                            <td><b>{{AppHelper::getTotals()}}</b></td>
                        </tr>

                    </table>
                    </br></br>
                    <center><span class="space">Accountant</span> <span class="space">Collector</span> <span class="space">Depositor</span></center>

                </div>


            </div> 




        </div>     
    </div>

</div>                          










</div>

<script>
            $(function() {
            var dates = $("#from, #to").datepicker({
            defaultDate: "+1w",
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 1,
                    dateFormat: 'dd-mm-yy',
                    onSelect: function(selectedDate) {
                    var option = this.id == "from" ? "minDate" : "maxDate",
                            instance = $(this).data("datepicker"),
                            date = $.datepicker.parseDate(
                                    instance.settings.dateFormat ||
                                    $.datepicker._defaults.dateFormat,
                                    selectedDate, instance.settings);
                            dates.not(this).datepicker("option", option, date);
                    }
            });
            });</script>


<!--script type="text/javascript">
            $(function() {
                
                //Date range picker
                $('#reservation').daterangepicker({format: 'DD/MM/YYYY'});
                //Date range picker with time picker
                
                

            });
        </script>
        
         <script>

  /* attach a submit handler to the form */
  $("#createPage").submit(function(event) {
  /* stop form from submitting normally */  
  event.preventDefault();

  /* get some values from elements on the page: */
  var $form = $( this ),
  //Get the first value
  value1 = $form.find( 'input[name="monthly_fee"]' ).val(),
  //get second value
  value2 = $form.find( 'input[name="benevolent_fund"]' ).val(),
  
  //get Third value
  value3 = $form.find( 'input[name="building_fund"]' ).val(),
  
  value4 = $form.find( 'input[name="relief_fund"]' ).val(),
  
  value5 = $form.find( 'input[name="medical_fund"]' ).val(),
  
  value6 = $form.find( 'input[name="provident_fund"]' ).val(),
  
  value7 = $form.find( 'input[name="late_fee"]' ).val(),
  
  value8 = $form.find( 'input[name="benevolent_fund_dues"]' ).val(),
  
  value9 = $form.find( 'input[name="monthly_fee_dues"]' ).val(),
  
  value10 = $form.find( 'input[name="admission_fee"]' ).val(),
  
  value11= $form.find( 'input[name="memberlist_fee"]' ).val(),
  
  value12 = $form.find( 'input[name="application_form_fee"]' ).val(),
  
  value13 = $form.find( 'input[name="auditorium_fee"]' ).val(),
  
  value14 = $form.find( 'input[name="drawer_fee"]' ).val(),
  
  value15 = $form.find( 'input[name="membership_certificate_fee"]' ).val(),
  
  
  value16 = $form.find( 'input[name="blood_test_fee"]' ).val(),
  
  value17 = $form.find( 'input[name="family_welfare_fund"]' ).val(),
  
  value18 = $form.find( 'input[name="others"]' ).val(),
  
  value19 = $form.find( 'input[name="library_fund"]' ).val(),
  
  //get the url. action="count.php"
  url = $form.attr( 'action' );

  /* Send the data using post */
  var posting = $.post( url, {
      
      monthly_fee: value1,
      benevolent_fund: value2 ,
      building_fund: value3,
      relief_fund:value4,
      medical_fund:value5,
      provident_fund:value6,
      late_fee:value7,
      benevolent_fund_dues:value8,
      monthly_fee_dues:value9,
      admission_fee:value10,
      memberlist_fee:value11,
     
      application_form_fee:value12,
      auditorium_fee:value13,
      drawer_fee:value14,
      membership_certificate_fee:value15,
      blood_test_fee:value16,
      family_welfare_fund:value17,
      others:value18,
      library_fund:value19
  } );

  /* Put the results in a div */
  posting.done(function( data ) {

  $( "#result" ).empty().append( data );
  });
  });
  
    
  </script>-->

<script type="text/javascript">

            function printContent(id){
            str = document.getElementById(id).innerHTML
                    newwin = window.open('', 'printwin', 'left=200,top=100,width=800,height=800')
                    newwin.document.write('<HTML>\n<HEAD>\n')
//newwin.document.write('<TITLE>Print Page</TITLE>\n')
                    newwin.document.write('<link href="{{url('AdminBox/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />\n')
                    newwin.document.write('<link rel="stylesheet" href="{{url('AdminBox/assets/plugins/print/css/print.css')}}" media="print"/>\n')
                    newwin.document.write('<script>\n')
                    newwin.document.write('function chkstate(){\n')
                    newwin.document.write('if(document.readyState=="complete"){\n')
                    newwin.document.write('window.close()\n')
                    newwin.document.write('}\n')
                    newwin.document.write('else{\n')
                    newwin.document.write('setTimeout("chkstate()",2000)\n')
                    newwin.document.write('}\n')
                    newwin.document.write('}\n')
                    newwin.document.write('function print_win(){\n')
                    newwin.document.write('window.print();\n')
                    newwin.document.write('chkstate();\n')
                    newwin.document.write('}\n')
                    newwin.document.write('<\/script>\n')
                    newwin.document.write('</HEAD>\n')
                    newwin.document.write('<BODY onload="print_win()">\n')
                    newwin.document.write(str)
                    newwin.document.write('</BODY>\n')
                    newwin.document.write('</HTML>\n')
                    newwin.document.close()
            }

</script>



@stop