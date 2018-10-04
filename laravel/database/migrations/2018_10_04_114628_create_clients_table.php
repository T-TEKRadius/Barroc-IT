<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('address_1');
            $table->string('zipcode_1');
            $table->string('residence_1');
            $table->string('address_2');
            $table->string('zipcode_2');
            $table->string('residence_2');
            $table->string('contact_person');
            $table->string('initials');
            $table->string('phone_number');
            $table->string('fax_number');
            $table->string('email');
            $table->boolean('credit_worthy');
            $table->integer('discount_percentage');
            $table->boolean('prospect');
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
        Schema::dropIfExists('clients');
    }
}
