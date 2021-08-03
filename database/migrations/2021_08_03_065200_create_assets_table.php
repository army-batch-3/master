<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->enum('type_of_asset',[
                'Computer/Electronics',
                'Office Supplies',
                'Armory',
                'Kitchen Utensils'
            ]);

            $table->string('name');
            $table->longText('name')->nullable();
            $table->longText('photo')->nullable();
            $table->integer('stocks')->nullable()->default(0);
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('warehouse_id');
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
        Schema::dropIfExists('assets');
    }
}
