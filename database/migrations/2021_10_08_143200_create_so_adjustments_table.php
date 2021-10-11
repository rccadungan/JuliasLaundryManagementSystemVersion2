<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoAdjustmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('so_adjustments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('so_id')->constrained('service_orders');
            $table->decimal('amount', $precision = 8, $scale = 2)->nullable(false);
            $table->string('adj_desc', 100)->nullable(false);
            $table->foreignId('user_id')->constrained('users');
            $table->dateTime('adj_date')->nullable(false);
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
        Schema::dropIfExists('so_adjustments');
    }
}
