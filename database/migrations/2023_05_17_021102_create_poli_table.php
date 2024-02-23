<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poli', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        DB::table('poli')->insert([
            'nama' => 'Umum',
            'status' => 1
        ]);

        DB::table('poli')->insert([
            'nama' => 'Gigi',
            'status' => 1
        ]);

        DB::table('poli')->insert([
            'nama' => 'KIA',
            'status' => 1
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poli');
    }
}
