<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidayHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llx_holiday_history_users', function (Blueprint $table) {
            $table->bigIncrements('fk_user');
            $table->date('date_inicio');
            $table->date('date_final');
            $table->string('totales');
            $table->string('tomadas');
            $table->string('restantes');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llx_holiday_history_users');
    }
}
