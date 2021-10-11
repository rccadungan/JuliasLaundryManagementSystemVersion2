<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disc_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tos_id')->constrained('service_types');
            $table->integer('min_qty')->nullable(false);
            $table->decimal('disc_pct',  $precision = 3, $scale = 2)->nullable(false);
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
        Schema::dropIfExists('disc_types');
    }
}
