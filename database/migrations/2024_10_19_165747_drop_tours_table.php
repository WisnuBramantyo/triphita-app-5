<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tours');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Optional: If you want to recreate the table on rollback
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('duration');
            $table->date('available_date');
            $table->integer('adults');
            $table->integer('children');
            $table->timestamps();
        });
    }
}
