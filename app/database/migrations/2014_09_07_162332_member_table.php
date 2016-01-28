<?php

use Illuminate\Database\Schema\Blueprinteger;
use Illuminate\Database\Migrations\Migration;

class MemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::Create('members',function($table){
                    
                   $table->integer('id')->primary();
                   $table->integer('membership_id')->default('N/A');
                   $table->string('name')->default('N/A');
                   $table->string('father')->default('N/A');
                   $table->string('husband')->default('N/A');
                   $table->text('village')->default('N/A');
                   $table->text('postOffice')->default('N/A');
                   $table->text('thana')->default('N/A');
                   $table->text('district')->default('N/A');
                   $table->text('present_address')->default('N/A');
                   $table->text('birthday')->nullable();
                   $table->string('phone')->default('N/A');
                   $table->string('acknowledgement_name')->default('N/A');
                   $table->string('acknowledgement_relationship')->default('N/A');
                   $table->text('date_of_enrollment')->default('0');
                   $table->integer('roll')->default('N/A');
                   $table->text('date_of_past_enrollment')->default('0');
                   $table->text('date_of_cancel')->default('0');
                   $table->integer('cancel_roll')->default('0');
                   
                   $table->integer('status')->default('0');
                   $table->text('date_of_membership');
                   
                   $table->integer('created_by_id')->default('N/A');
                   $table->integer('updated_by_id')->default('N/A');     
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
		Schema::drop('members');
	}

}
