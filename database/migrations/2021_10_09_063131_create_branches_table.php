<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name', 50)->nullable(false);
            $table->string('addr1', 100)->nullable(false);
            $table->string('addr2', 100)->nullable();
	        $table->string('addr3', 100)->nullable();
            $table->decimal('start_custno',  $precision = 18, $scale = 0)->nullable(false);
            $table->decimal('start_softno',  $precision = 18, $scale = 0)->nullable(false);
            $table->foreignId('start_pmtid')->constrained('payments');
            $table->foreignId('start_cmid')->constrained('credit_memo');
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
        Schema::dropIfExists('branches');
    }
}
