<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurseries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('head_of_company');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('fak');
            $table->string('web');
            $table->string('bank_accountno');
            $table->string('area');
            $table->string('monthly_omzet');
            $table->string('total_capacity');
            $table->string('permanent_emp');
            $table->string('non_permanent_emp');
            $table->string('potency');
            $table->string('is_verified');
            $table->string('existing_land');
            $table->string('developing_land');
            $table->string('notes');
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
        Schema::dropIfExists('nurseries');
    }
}
