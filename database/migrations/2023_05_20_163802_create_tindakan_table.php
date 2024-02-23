<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindakan', function (Blueprint $table) {
            $table->id();
            $table->string('poli');
            $table->string('kode');
            $table->string('nama');
            $table->integer('harga')->default(0);
            $table->timestamps();
        });

        DB::table('tindakan')->insert([
            'poli' => 'Umum',
            'kode' => 'U001',
            'nama' => 'Pemeriksaan Umum',
            'harga' => 50000
        ]);

        DB::table('tindakan')->insert([
            'poli' => 'Gigi',
            'kode' => 'G001',
            'nama' => 'Pemeriksaan Gigi',
            'harga' => 75000
        ]);

        DB::table('tindakan')->insert([
            'poli' => 'KIA',
            'kode' => 'K001',
            'nama' => 'Pemeriksaan KIA',
            'harga' => 100000
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindakan');
    }
}
