<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashBreakdownTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_breakdowns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eod_posting_id')->constrained('eod_posting');
            $table->decimal('denomination', $precision = 8, $scale = 2)->nullable(false);
            $table->integer('num_pcs')->nullable(false);
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
        Schema::dropIfExists('cash_breakdowns');
    }
}
