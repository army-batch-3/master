<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitionRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisition_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('requestor_id');
            $table->enum('type',[
                'employee',
                'fleet'
            ]);
            $table->longText('requests')->nullable(); 
            $table->enum('status',[
                'pending',
                'declined',
                'approved'
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
        Schema::dropIfExists('requisition_requests');
    }
}
