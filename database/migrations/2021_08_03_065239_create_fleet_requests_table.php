<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFleetRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fleet_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('transportation_id'); 
            // array of assets
            $table->longText('requests')->nullable(); 
            $table->enum('status',[
                'pending',
                'picked-up',
                'delivered'
            ]);
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
        Schema::dropIfExists('fleet_requests');
    }
}
