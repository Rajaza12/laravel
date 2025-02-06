<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('pre-nom');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
};
