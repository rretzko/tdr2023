<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->smallInteger('start');
            $table->smallInteger('end')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['school_id','user_id']);
            $table->unique(['school_id','user_id','start']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenures');
    }
};
