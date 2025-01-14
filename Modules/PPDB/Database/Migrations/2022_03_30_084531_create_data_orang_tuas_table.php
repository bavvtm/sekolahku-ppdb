<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataOrangTuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_orang_tuas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');

            // Ayah
            $table->string('nama_ayah')->nullable();
            $table->enum('status_ayah',['Masih Hidup','Sudah Meninggal','Tidak Diketahui'])->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tgl_lahir_ayah')->nullable();
            $table->enum('pendidikan_ayah',['SD/Sederajat','SMP/Sederajat','SMA/Sederajat','D1','D2','D3','D4/S1','S2','S3','Tidak Bersekolah','Lainnya'])->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->enum('penghasilan_ayah',['Kurang dari 500.000','500.000 - 1.000.000','1.000.001 - 2.000.000','2.000.001 - 3.000.000','3.000.001 - 4.000.000','4.000.001 - 5.000.000','Lebih dar 5.000.000','Tidak ada'])->nullable();
            $table->string('telp_ayah')->nullable();

            // Ibu
            $table->string('nama_ibu')->nullable();
            $table->enum('status_ibu',['Masih Hidup','Sudah Meninggal','Tidak Diketahui'])->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->date('tgl_lahir_ibu')->nullable();
            $table->enum('pendidikan_ibu',['SD/Sederajat','SMP/Sederajat','SMA/Sederajat','D1','D2','D3','D4/S1','S2','S3','Tidak Bersekolah','Lainnya'])->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->enum('penghasilan_ibu',['Kurang dari 500.000','500.000 - 1.000.000','1.000.001 - 2.000.000','2.000.001 - 3.000.000','3.000.001 - 4.000.000','4.000.001 - 5.000.000','Lebih dar 5.000.000','Tidak ada'])->nullable();
            $table->string('telp_ibu')->nullable();

            // Wali
            $table->string('nama_wali')->nullable();
            $table->enum('status_wali',['Masih Hidup','Sudah Meninggal','Tidak Diketahui'])->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tgl_lahir_wali')->nullable();
            $table->enum('pendidikan_wali',['SD/Sederajat','SMP/Sederajat','SMA/Sederajat','D1','D2','D3','D4/S1','S2','S3','Tidak Bersekolah','Lainnya'])->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->enum('penghasilan_wali',['Kurang dari 500.000','500.000 - 1.000.000','1.000.001 - 2.000.000','2.000.001 - 3.000.000','3.000.001 - 4.000.000','4.000.001 - 5.000.000','Lebih dar 5.000.000','Tidak ada'])->nullable();
            $table->string('telp_wali')->nullable();

            // Optional berkas
            $table->bigInteger('kks')->nullable();
            $table->bigInteger('pkh')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_orang_tuas');
    }
}
