<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembersPhdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::Create('baratlaws',function($table){
                    
                   $table->integer('id')->primary();
                   $table->integer('membership_id')->default('0');
                   $table->string('result')->default('N/A');
                   $table->string('year')->nullable();
                   $table->string('univarsity')->default('N/A');
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
		Schema::Drop('baratlaws');
	}
}
