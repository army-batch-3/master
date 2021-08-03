<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestockRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restock_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id'); 
            // array of assets
            $table->longText('requests')->nullable(); 
            $table->enum('status',[
                'pending',
                'declined',
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
        Schema::dropIfExists('restock_requests');
    }
}
