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
        Schema::create('accessory_room', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accessorie_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('room_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('count');
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
        Schema::dropIfExists('accessory_room');
    }
};
