<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('kd_obat')->nullable();
            $table->string('nama');
            $table->string('satuan');
            $table->integer('stok');
            // $table->string('foto')->nullable();
            $table->integer('harga')->default(0);
            $table->integer('is_bpjs')->default(1);
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
        });

        DB::table('obat')->insert([
            'kd_obat' => 'OB001',
            'nama' => 'Paracetamol',
            'satuan' => 'Tablet',
            'stok' => 100,
            // 'foto' => null,
            'harga' => 5000,
            'is_bpjs' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null
        ]);

        DB::table('obat')->insert([
            'kd_obat' => 'OB002',
            'nama' => 'Amoxicillin',
            'satuan' => 'Kapsul',
            'stok' => 50,
            // 'foto' => null,
            'harga' => 10000,
            'is_bpjs' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null
        ]);

        DB::table('obat')->insert([
            'kd_obat' => 'OB003',
            'nama' => 'Cetirizine',
            'satuan' => 'Tablet',
            'stok' => 75,
            // 'foto' => null,
            'harga' => 7500,
            'is_bpjs' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat');
    }
}
