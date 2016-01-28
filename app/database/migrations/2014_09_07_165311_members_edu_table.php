<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembersEduTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::Create('educations',function($table){
                    
                   $table->integer('id')->primary();
                   $table->integer('membership_id')->nullable();
                   $table->string('SSC')->default('N/A');
                   $table->string('HSC')->default('N/A');
                   $table->string('Hons')->default('N/A');
                   $table->string('Masters')->default('N/A');
                   $table->string('BarAtLaw')->default('N/A');                   
                   
                   
                   
                  $table->integer('created_by_id')->nullable();
                   $table->integer('updated_by_id')->nullable();     
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
		Schema::Drop('educations');
	}

}
