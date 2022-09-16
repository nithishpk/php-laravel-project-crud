<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->enum('time_zone', ['ist', 'est', 'pst'])->nullable('false');
            $table->enum('day_of_week', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'])->nullable('false');
            $table->time('available_at')->nullable('false');
            $table->time('available_until')->nullable('false');
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
        Schema::dropIfExists('coaches');
    }
}
