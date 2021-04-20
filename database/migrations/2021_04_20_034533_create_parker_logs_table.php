<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkerLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parker_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parker_id');
            $table->dateTime('dateTime_in')->nullable();
            $table->dateTime('dateTime_out')->nullable();
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
        Schema::dropIfExists('parker_logs');
    }
}
