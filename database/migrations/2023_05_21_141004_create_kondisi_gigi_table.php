<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKondisiGigiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_gigi', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama')->nullable();
            $table->timestamps();
        });

        $data = [
            ['kode' => 'sou', 'nama' => 'sound'],
            ['kode' => 'non', 'nama' => 'no information'],
            ['kode' => 'une', 'nama' => 'unerupted'],
            ['kode' => 'pre', 'nama' => 'present'],
            ['kode' => 'imx', 'nama' => 'impacted non-visible'],
            ['kode' => 'ano', 'nama' => 'anomali'],
            ['kode' => 'dia', 'nama' => 'diastema'],
            ['kode' => 'abr', 'nama' => null],
            ['kode' => 'car', 'nama' => 'caries'],
            ['kode' => 'cfr', 'nama' => 'crown fractured'],
            ['kode' => 'nvt', 'nama' => 'non-vital tooth'],
            ['kode' => 'rrx', 'nama' => 'retained root'],
            ['kode' => 'mis', 'nama' => 'missing'],
            ['kode' => 'att', 'nama' => 'attrition'],
            ['kode' => 'amf', 'nama' => 'amalgam filling'],
            ['kode' => 'gif', 'nama' => 'glass ionomer filling'],
            ['kode' => 'cof', 'nama' => null],
            ['kode' => 'fis', 'nama' => 'fissure sealant'],
            ['kode' => 'inl', 'nama' => 'inlay'],
            ['kode' => 'onl', 'nama' => 'onlay'],
            ['kode' => 'fmc', 'nama' => 'full metal crown'],
            ['kode' => 'poc', 'nama' => 'porcelain crown'],
            ['kode' => 'mpc', 'nama' => 'metal porcelain crown'],
            ['kode' => 'gmc', 'nama' => 'gold metal crown'],
            ['kode' => 'rct', 'nama' => 'root canal treatment'],
            ['kode' => 'ipx', 'nama' => 'implant'],
            ['kode' => 'meb', 'nama' => 'metal bridge'],
            ['kode' => 'pob', 'nama' => 'porcelain bridge'],
            ['kode' => 'pon', 'nama' => 'pontic'],
            ['kode' => 'abu', 'nama' => 'abutment'],
        ];

        foreach ($data as $item) {
            DB::table('kondisi_gigi')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kondisi_gigi');
    }
}
