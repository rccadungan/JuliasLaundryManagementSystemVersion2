<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('pmt_date')->nullable(false);
            $table->foreignId('so_id')->constrained('service_orders');
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('amount', $precision = 18, $scale = 2)->nullable(false);
            $table->foreignId('eod_posting_id')->constrained('eod_posting')->nullable();
            $table->string('pmt_desc', 100)->nullable(false);
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
        Schema::dropIfExists('payments');
    }
}
