<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditMemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_memos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('cm_date')->nullable(false);
            $table->foreignId('so_id')->constrained('service_orders');
            $table->decimal('amount', $precision = 18, $scale = 2)->nullable(false);
            $table->foreignId('eod_posting_id')->constrained('eod_posting');
            $table->string('cm_desc', 100)->nullable(false);
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('credit_memos');
    }
}
