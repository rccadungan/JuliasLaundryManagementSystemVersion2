<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers');
            $table->dateTime('so_date_printed')->nullable(false);
            $table->dateTime('so_date_rcv')->nullable(false);
            $table->dateTime('so_date_pickup')->nullable(false);
            $table->dateTime('so_date_release')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('eod_posting_id')->constrained('eod_posting');
            $table->string('released_by', 20)->nullable();
            $table->foreignId('rel_eod_posting_id')->constrained('eod_posting');
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
        Schema::dropIfExists('service_orders');
    }
}
