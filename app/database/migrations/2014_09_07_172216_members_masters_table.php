<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembersMastersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::Create('masters',function($table){
                    
                   $table->integer('id')->primary();
                   $table->integer('membership_id')->default('N/A');;
                   $table->string('result')->default('N/A');;
                   $table->date('year')->default('N/A');;
                   $table->string('university')->default('N/A');;
                   $table->integer('created_by_id')->default('N/A');;
                   $table->integer('updated_by_id')->default('N/A');;     
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
		Schema::Drop('masters');
	}

}
