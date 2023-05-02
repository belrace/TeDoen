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
        Schema::create('Lijst_items', function (Blueprint $table) {
            $table->id();
            $table->string('Subject');
            $table->longText('Notitie');
            $table->integer('Done');
            $table->integer('Start_id');
            $table->integer('End_id');
            $table->integer('prioriteit');
            $table->integer('Lijst_id');
            $table->integer('category_id');
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
        //
    }
};
