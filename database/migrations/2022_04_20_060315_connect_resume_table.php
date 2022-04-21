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
        Schema::create('resume_connect', function (Blueprint $table) {
            $table->bigIncrements('resumeId');
            $table->unsignedBigInteger('cResumeId');
            $table->foreign('cResumeId')->references('cResumeId')->on('create_resume');
            $table->unsignedBigInteger('itemId');
            $table->foreign('itemId')->references('itemId')->on('resume_item');
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
        Schema::dropIfExists('resume_connect');
    }
};
