<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrderDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_order_det', function (Blueprint $table) {
            $table->id();
            $table->foreignId('so_id')->constrained('service_types');
            $table->foreignId('so_tos_id')->constrained('service_types');
            $table->decimal('so_qty',  $precision = 18, $scale = 2)->nullable(false);
            $table->decimal('so_actualqty',  $precision = 18, $scale = 2)->nullable(false);
	        $table->decimal('so_price',  $precision = 18, $scale = 2)->nullable(false);
	        $table->decimal('disc_pct',  $precision = 3, $scale = 2)->nullable(false);
	        $table->string('so_remarks', 50)->nullable();
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
        Schema::dropIfExists('service_order_det');
    }
}
