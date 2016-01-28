<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LibraryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::Create('libraries',function($table){
                    
                   $table->integer('id')->primary();
                   $table->string('book_name')->nullable();
                   $table->integer('book_copy')->nullable();
                   $table->string('book_img_name')->nullable();
                   
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
		Schema::Drop('libraries');
	}
}
