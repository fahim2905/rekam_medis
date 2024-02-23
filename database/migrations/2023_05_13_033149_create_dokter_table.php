<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('poli');
            $table->integer('status')->default(1);
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        DB::table('dokter')->insert([
            [
                'nip' => '1234567890',
                'nama' => 'Dr. John Doe',
                'alamat' => 'Jl. Sudirman No. 123',
                'poli' => 'Umum',
                'user_id' => 3,
                'status' => 1
            ],
            [
                'nip' => '0987654321',
                'nama' => 'Dr. Jane Smith',
                'alamat' => 'Jl. Thamrin No. 456',
                'poli' => 'Gigi',
                'user_id' => 4,
                'status' => 1
            ],
            [
                'nip' => '1357924680',
                'nama' => 'Dr. Michael Johnson',
                'alamat' => 'Jl. Gatot Subroto No. 789',
                'poli' => 'KIA',
                'user_id' => 5,
                'status' => 1
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokter');
    }
}
