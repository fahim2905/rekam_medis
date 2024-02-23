<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->default(1)->comment("
            1 => Admin
            2 => Petugas Registrasi
            3 => Dokter
            4 => Petugas Obat
            ");
            $table->integer('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => 'Admin',

            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 1,
            'status' => 1,
        ]);

        // Petugas Registrasi
        DB::table('users')->insert([
            'name' => 'Petugas Registrasi',

            'email' => 'petugas_registrasi@gmail.com',
            'password' => Hash::make('password'),
            'role' => 2,
            'status' => 1,
        ]);

        // Dokter UMUM
        DB::table('users')->insert([
            'name' => 'Dokter Umum ',

            'email' => 'dokterumum@gmail.com',
            'password' => Hash::make('password'),
            'role' => 3,
            'status' => 1,
        ]);
        // Dokter Gigi
        DB::table('users')->insert([
            'name' => 'Dokter Gigi ',

            'email' => 'doktergigi@gmail.com',
            'password' => Hash::make('password'),
            'role' => 3,
            'status' => 1,
        ]);
        // Dokter KIA
        DB::table('users')->insert([
            'name' => 'Dokter KIA ',

            'email' => 'dokterkia@gmail.com',
            'password' => Hash::make('password'),
            'role' => 3,
            'status' => 1,
        ]);

        // Petugas Obat
        DB::table('users')->insert([
            'name' => 'Petugas Obat',

            'email' => 'petugas_obat@gmail.com',
            'password' => Hash::make('password'),
            'role' => 4,
            'status' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
