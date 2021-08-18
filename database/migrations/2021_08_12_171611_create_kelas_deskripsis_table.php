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
            $table->string('kelas1aDesc', 500)->nullable()->default(null);
            $table->string('kelas1aImage')->nullable()->default(null);
            $table->string('kelas1bDesc', 500)->nullable()->default(null);
            $table->string('kelas1bImage')->nullable()->default(null);

            $table->string('kelas2aDesc', 500)->nullable()->default(null);
            $table->string('kelas2aImage')->nullable()->default(null);
            $table->string('kelas2bDesc', 500)->nullable()->default(null);
            $table->string('kelas2bImage')->nullable()->default(null);

            $table->string('kelas3aDesc', 500)->nullable()->default(null);
            $table->string('kelas3aImage')->nullable()->default(null);
            $table->string('kelas3bDesc', 500)->nullable()->default(null);
            $table->string('kelas3bImage')->nullable()->default(null);

            $table->string('kelas4aDesc', 500)->nullable()->default(null);
            $table->string('kelas4aImage')->nullable()->default(null);
            $table->string('kelas4bDesc', 500)->nullable()->default(null);
            $table->string('kelas4bImage')->nullable()->default(null);

            $table->string('kelas5aDesc', 500)->nullable()->default(null);
            $table->string('kelas5aImage')->nullable()->default(null);
            $table->string('kelas5bDesc', 500)->nullable()->default(null);
            $table->string('kelas5bImage')->nullable()->default(null);

            $table->string('kelas6aDesc', 500)->nullable()->default(null);
            $table->string('kelas6aImage')->nullable()->default(null);
            $table->string('kelas6bDesc', 500)->nullable()->default(null);
            $table->string('kelas6bImage')->nullable()->default(null);
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
