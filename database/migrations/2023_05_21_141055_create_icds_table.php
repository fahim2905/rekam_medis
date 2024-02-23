<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icds', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('name_id')->nullable();
            $table->string('name_en')->nullable();
            $table->timestamps();
        });

        $data = [
            ['code' => 'R05', 'name_id' => 'Batuk', 'name_en' => 'Cough'],
            ['code' => 'J06.9', 'name_id' => 'Infeksi saluran pernapasan akut', 'name_en' => 'Acute upper respiratory infection'],
            ['code' => 'J03.9', 'name_id' => 'Tonsilitis akut', 'name_en' => 'Acute tonsillitis'],
            ['code' => 'J45', 'name_id' => 'Asma', 'name_en' => 'Asthma'],
            ['code' => 'I10', 'name_id' => 'Hipertensi esensial', 'name_en' => 'Essential hypertension'],
            ['code' => 'R10', 'name_id' => 'Nyeri perut', 'name_en' => 'Abdominal pain'],
            ['code' => 'H33', 'name_id' => 'Ablasi dan kerusakan retina', 'name_en' => 'Ablation and damage of retina'],
            ['code' => 'H33.2', 'name_id' => 'Ablasio retina', 'name_en' => 'Retinal detachment'],
            ['code' => 'O20.0', 'name_id' => 'Abortus iminens', 'name_en' => 'Threatened abortion'],
            ['code' => 'O08.0', 'name_id' => 'Abortus infeksius', 'name_en' => 'Infective abortion'],
            ['code' => 'O06.9', 'name_id' => 'Abortus inkomplit', 'name_en' => 'Incomplete abortion'],
            ['code' => 'O02.1', 'name_id' => 'Abortus insipiens', 'name_en' => 'Missed abortion'],
            ['code' => 'O05', 'name_id' => 'Abortus lainnya', 'name_en' => 'Other abortion'],
            ['code' => 'O04', 'name_id' => 'Abortus medik', 'name_en' => 'Medical abortion'],
            ['code' => 'O03', 'name_id' => 'Abortus spontan', 'name_en' => 'Spontaneous abortion'],
            ['code' => 'L02.9', 'name_id' => 'Abses (luka)', 'name_en' => 'Abscess (wound)'],
            ['code' => 'K65.0', 'name_id' => 'Abses abdominal', 'name_en' => 'Abdominal abscess'],
            ['code' => 'L02.4', 'name_id' => 'Abses Axila', 'name_en' => 'Axillary abscess'],
            ['code' => 'K 35.1', 'name_id' => 'Abses apendicular/ apendikes', 'name_en' => 'Appendicular/appendiceal abscess'],
            ['code' => 'N75.1', 'name_id' => 'Abses bartolini', 'name_en' => 'Bartholin s abscess'],
            // tambahkan lebih banyak penyakit di sini
        ];

        foreach ($data as $item) {
            DB::table('icds')->insert($item);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icds');
    }
}
