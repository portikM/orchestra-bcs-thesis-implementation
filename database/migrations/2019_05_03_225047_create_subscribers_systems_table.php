<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers_systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('subscriber_id');
            $table->foreign('subscriber_id')->references('id')->on('subscribers');
            $table->integer('equipment_id');
            $table->foreign('equipment_id')->references('id')->on('equipment');
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
        Schema::dropIfExists('subscribers_systems');
    }
}
