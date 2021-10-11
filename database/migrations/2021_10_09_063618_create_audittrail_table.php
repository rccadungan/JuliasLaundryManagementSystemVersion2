<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudittrailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_trail', function (Blueprint $table) {
            $table->id();
            $table->string('audit_type', 1)->nullable(false);
            $table->string('audit_user_id', 20)->nullable(false);
            $table->dateTime('audit_date')->nullable(false);
            $table->text('audit_remarks')->nullable(false);
            $table->string('audit_comp_name', 50)->nullable(false);
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
        Schema::dropIfExists('audit_trail');
    }
}
