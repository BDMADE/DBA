<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembersSscTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::Create('sscs',function($table){
                    
                   $table->integer('id')->primary();
                   $table->integer('membership_id')->nullable();
                   $table->string('result')->nullable();
                   $table->date('year')->nullable();
                   $table->string('board')->nullable();
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
		Schema::Drop('sscs');
	}

}
