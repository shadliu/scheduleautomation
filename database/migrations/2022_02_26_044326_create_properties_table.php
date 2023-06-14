<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('property_name')->nullable();
            $table->string('address_divission')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address')->nullable();
            $table->string('beds')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('squire_feet')->nullable();
            $table->string('monthly_amount')->nullable();
            $table->string('land_area')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('garage')->nullable();
            $table->string('garage_size')->nullable();
            $table->string('security_deposit')->nullable();
            $table->string('building_age')->nullable();
            $table->string('property_purpose')->nullable();
            $table->string('interior')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('take_rent')->nullable();
            $table->string('gas')->nullable();
            $table->string('registration_type')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('servent_room')->nullable();
            $table->string('servent_washroom')->nullable();
            $table->string('unit_per_floor')->nullable();
            $table->string('front_road_size')->nullable();
            $table->string('building_facing')->nullable();
            $table->string('vacant_since')->nullable();
            $table->string('get_closing_time')->nullable();
            $table->string('any_special_think')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->comment('1=active, 2=pending, 3=rejected')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
