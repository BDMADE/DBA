<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BorrowsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::Create('borrows',function($table){
                    
                   $table->integer('id')->primary();
                   $table->string('membership_id')->nullable();
                   $table->string('book_name')->nullable();
                   $table->string('borrow_date')->nullable();
                   $table->string('return_date')->nullable();
                   $table->integer('book_copy')->nullable();
                   
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
		Schema::Drop('borrows');
	}
}
