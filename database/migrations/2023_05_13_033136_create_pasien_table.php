<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 use Carbon\Carbon;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm');
            $table->string('nama');
            $table->string('tmp_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();;
            $table->enum('jk',["Laki-Laki","Perempuan"])->nullable();
            $table->longText('alamat_lengkap')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('agama')->default("Islam")->nullable();;
            $table->enum('status_menikah',["Menikah","Belum Menikah","Janda","Duda"])->nullable();;
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->enum('kewarganegaraan',["WNI","WNA"])->defaul("WNI");
            $table->string('no_hp',13)->nullable();
            $table->string('cara_bayar')->default("Umum/Mandiri");
            $table->string('no_bpjs')->nullable();
            $table->string('alergi')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        for ($i = 1; $i <= 10; $i++) {
            $birthDate = Carbon::now()->subYears(rand(18, 60))->subDays(rand(0, 365));

            DB::table('pasien')->insert([
                'no_rm' => 'RM00' . $i,
                'nama' => 'Pasien ' . $i,
                'tmp_lahir' => 'Kota ' . $i,
                'tgl_lahir' => $birthDate->toDateString(),
                'jk' => $i % 2 == 0 ? 'Laki-Laki' : 'Perempuan',
                'alamat_lengkap' => 'Jl. Pasien ' . $i . ', Kota ' . $i,
                'kelurahan' => 'Kelurahan ' . $i,
                'kecamatan' => 'Kecamatan ' . $i,
                'kabupaten' => 'Kabupaten ' . $i,
                'kodepos' => '1000' . $i,
                'agama' => 'Islam',
                'status_menikah' => $i % 2 == 0 ? 'Menikah' : 'Belum Menikah',
                'pendidikan' => 'S1',
                'pekerjaan' => 'PNS',
                'kewarganegaraan' => 'WNI',
                'no_hp' => '0812345678' . $i,
                'cara_bayar' => 'Umum/Mandiri',
                'no_bpjs' => null,
                'alergi' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
