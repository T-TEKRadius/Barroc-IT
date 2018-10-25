<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('to_pay')->nullable(true);
            $table->unsignedDecimal('invoice_amount')->nullable(true);
            $table->unsignedDecimal('revenue')->nullable(true);
            $table->unsignedDecimal('limit')->nullable(true);
            $table->string('bank_account_number')->nullable(true);
            $table->unsignedInteger('ledger_number')->nullable(true);
            $table->string('vat_number')->nullable(true);
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
        Schema::dropIfExists('finance');
    }
}
