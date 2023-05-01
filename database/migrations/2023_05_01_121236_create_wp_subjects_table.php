<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wp_subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id');
            $table->string('name');
            $table->string('code');
            $table->string('description');
            $table->date('from');
            $table->date('to');
            $table->string('duration');
            $table->string('venue');
            $table->string('created_by');
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
        Schema::dropIfExists('wp_subjects');
    }
}
