<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_approves', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('passport_number');
            $table->string('confirmation_number');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('document')->nullable();
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
        Schema::dropIfExists('visa_approves');
    }
};
