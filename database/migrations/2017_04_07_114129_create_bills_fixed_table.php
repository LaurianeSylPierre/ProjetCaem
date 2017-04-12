<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsFixedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills_fixed', function(Blueprint $table) {
            $table->increments('id');
            $table->string('bills_id');
            $table->string('people_id');
            $table->string('people_name');
            $table->string('activities_id');
            $table->string('activities_name');
            $table->string('activities_prices');
            $table->string('reductions');
            $table->string('total');
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
        Schema::drop('bills');
    }
}
