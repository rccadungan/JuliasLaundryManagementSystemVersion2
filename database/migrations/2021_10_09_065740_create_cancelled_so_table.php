<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancelledSoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancelled_so', function (Blueprint $table) {
            $table->id();
            $table->dateTime('cancel_date')->nullable(false);
            $table->foreignId('so_id')->constrained('service_order');
            $table->foreignId('user_id')->constrained('users');
            $table->string('reason', 50)->nullable(false);
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
        Schema::dropIfExists('cancelled_so');
    }
}
