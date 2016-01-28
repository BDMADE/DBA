<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::Create('accounts',function($table){
                    
                   $table->integer('id')->primary();
                   $table->integer('membership_id')->default(0);
                   $table->float('admission_fee')->default(0);
                   $table->float('late_fee')->default(0);
                   $table->float('benevolent_fund')->default(0);
                   $table->float('monthly_fee')->default(0);
                   $table->float('benevolent_fund_dues')->default(0);
                   $table->float('monthly_fee_dues')->default(0);
                   $table->float('relief_fund')->default(0);
                   $table->float('medical_fund')->default(0);
                   $table->float('building_fund')->default(0);
                   $table->float('library_fund')->default(0);
                   $table->float('memberlist_fee')->default(0);
                   $table->float('application_form_fee')->default(0);
                   $table->float('auditorium_fee')->default(0);
                   $table->float('drawer_fee')->default(0);
                   //$table->float('sales_of_okalotnama')->default(0);
                  // $table->float('attendence_fee')->default(0);
                   //$table->float('bellbond_fee')->default(0);
                  // $table->float('clerk_licence_fee')->default(0);
                   $table->float('membership_certificate_fee')->default(0);
                   $table->float('blood_test_fee')->default(0);
                   $table->float('provident_fund')->default(0);
                   $table->float('family_welfare_fund')->default(0);
                   $table->float('others')->default(0);
                   
                   $table->float('totals')->default(0);
                   $table->date('from')->default(0);
                   $table->date('to')->default(0);
                   $table->integer('bank_statement')->default('0');
                   $table->integer('created_by_id')->default(0);
                   $table->integer('updated_by_id')->default(0);     
                   $table->timestamps();
                   
                    
                    
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::Drop('accounts');
	}
}
