<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name', 50)->nullable(false);
            $table->string('cust_add', 50)->nullable();
            $table->string('cust_tel', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('cust_status', 1)->nullable(false);
            $table->boolean('is_vip')->nullable(false);
            $table->dateTime('membership_date')->nullable(false);
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
        Schema::dropIfExists('customers');
    }
}
