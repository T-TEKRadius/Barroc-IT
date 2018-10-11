<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignClientSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales', function(Blueprint $table){
            $table->foreign('client_id')->references('id')->on('clients');
        });
        Schema::table('invoices', function(Blueprint $table){
            $table->foreign('client_id')->references('id')->on('clients');
        });
        Schema::table('finance', function(Blueprint $table){
            $table->foreign('client_id')->references('id')->on('clients');
        });
        Schema::table('appointments', function(Blueprint $table){
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
