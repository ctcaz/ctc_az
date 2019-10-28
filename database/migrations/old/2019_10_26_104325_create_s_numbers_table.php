<?php
/*
		File:	database\migrations\2019_10_26_102439_create_s_numbers_table.php
		 Ver:	1.00.003
 Purpose:	Migration file for table s_numbers
Author/s:	Christopher Georgiev
 Created:	2019-10-26
	Modify:	2019-10-26
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_numbers', function (Blueprint $table) {
            $table->string('table_name')->unique();
            $table->string('description')->nullable();
            $table->integer('last_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_numbers');
    }
}
