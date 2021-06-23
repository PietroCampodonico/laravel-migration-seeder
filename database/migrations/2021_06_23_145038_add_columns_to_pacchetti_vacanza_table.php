<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPacchettiVacanzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacchetti_vacanza', function (Blueprint $table) {
            $table->char('name', 50);
            $table->string('locations', 255);
            $table->date('booking_dates');
            $table->smallinteger('vacation_duration');
            $table->decimal('price', 7, 2);
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacchetti_vacanza', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('locations');
            $table->dropColumn('booking_dates');
            $table->dropColumn('vacation_duration');
            $table->dropColumn('price');
            $table->dropColumn('description');
        });
    }
}
