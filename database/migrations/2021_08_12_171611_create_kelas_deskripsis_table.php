<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasDeskripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_deskripsis', function (Blueprint $table) {
            $table->id();
            $table->string('kelas1Desc', 1000)->nullable()->default(null);
            $table->string('kelas1Image')->nullable()->default(null);
            $table->string('kelas2Desc', 1000)->nullable()->default(null);
            $table->string('kelas2Image')->nullable()->default(null);
            $table->string('kelas3Desc', 1000)->nullable()->default(null);
            $table->string('kelas3Image')->nullable()->default(null);
            $table->string('kelas4Desc', 1000)->nullable()->default(null);
            $table->string('kelas4Image')->nullable()->default(null);
            $table->string('kelas5Desc', 1000)->nullable()->default(null);
            $table->string('kelas5Image')->nullable()->default(null);
            $table->string('kelas6Desc', 1000)->nullable()->default(null);
            $table->string('kelas6Image')->nullable()->default(null);
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
        Schema::dropIfExists('kelas_deskripsis');
    }
}
