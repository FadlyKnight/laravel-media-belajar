<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnOnNilais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilais', function (Blueprint $table) {
            $table->integer('total_benar')->default(0)->after('total_nilai');
            $table->integer('total_salah')->default(0)->after('total_benar');
            $table->integer('total_tidak_jawab')->default(0)->after('total_salah');
            $table->text('history')->nullable()->after('total_tidak_jawab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
