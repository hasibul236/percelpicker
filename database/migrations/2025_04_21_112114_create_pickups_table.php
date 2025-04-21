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
        Schema::create('pickups', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('pickup_location');
            $table->string('reciever_name');
            $table->unsignedInteger('pincode');
            $table->string('phone');
            $table->decimal('rate', 8, 2);
            $table->decimal('weight', 8, 2);
            $table->string('barcode');
            $table->string('percel_type');
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
        Schema::dropIfExists('pickups');
    }
};
