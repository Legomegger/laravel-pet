<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('processor_title');
            $table->integer('processor_speed', false, true);
            $table->string('ram_type');
            $table->integer('ram_speed', false, true);
            $table->string('gpu_title');
            $table->integer('gpu_speed', false, true);
            $table->integer('secondary_memory_size', false, true);
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
        Schema::dropIfExists('computers');
    }
}
