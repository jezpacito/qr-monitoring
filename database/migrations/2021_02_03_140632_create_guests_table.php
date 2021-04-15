<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->longText('address');
            $table->string('city');
            $table->string('prk_brgy');
            $table->string('contact_no');
            $table->boolean('gender');
            $table->integer('postal_code');
            $table->string('email');
            $table->string('qr_code'); //for image
            $table->string('qr_number'); //qr code number 
            $table->string('qr_uri'); //url embed
            
            // $table->string('temperature');
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
        Schema::dropIfExists('guests');
    }
}
