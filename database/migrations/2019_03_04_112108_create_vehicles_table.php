<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('name');
            $table->string('model')->nullable();
            $table->text('description');
            $table->float('price');
            $table->float('old_price')->nullable();
            $table->boolean('featured')->default(false);
            $table->string('make_year')->nullable();
            $table->enum('condition', ['new', 'used'])->default('used');
            $table->enum('transmission', ['manual', 'automatic'])->nullable();
            $table->string('color')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('engine_displacement')->nullable();
            $table->float('fuel_tank_capacity')->nullable();
            $table->float('mileage')->nullable();
            $table->integer('door_count')->nullable();
            $table->integer('cylinder_count')->nullable();
            $table->integer('gear_count')->nullable();
            $table->integer('seat_count')->nullable();
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('vehicle_photo_id');    // main photo
            $table->unsignedInteger('fuel_type_id');
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
        Schema::dropIfExists('vehicles');
    }
}
