<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunderProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funder_projects', function (Blueprint $table) {
            $table->id();
            $table->string('total_fund');
            $table->string('benefit');
            $table->string('fixfund');
            $table->string('permanent_fund');
            $table->string('temporary_fund');
            $table->string('count_temporary_fund');
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
        Schema::dropIfExists('funder_projects');
    }
}
