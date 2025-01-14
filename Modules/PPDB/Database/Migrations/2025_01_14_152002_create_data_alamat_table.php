<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAlamatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_alamat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');

            // Ayah
            $table->enum('status_tinggal_ayah',[0,1])->default(0);
            $table->enum('status_rumah_ayah',['Milik Sendiri','Rumah Orang Tua','Rumah Saudara/kerabat','Rumah Dinas','Sewa/kontrak','Lainnya'])->nullable();
            $table->string('provinsi_ayah')->nullable();
            $table->string('kabupaten_ayah')->nullable();
            $table->string('kecamatan_ayah')->nullable();
            $table->string('kelurahan_ayah')->nullable();
            $table->text('alamat_ayah')->nullable();
            $table->string('kode_pos_ayah')->nullable();

            // Ibu
            $table->enum('status_tinggal_ibu',[0,1])->default(0);
            $table->enum('status_rumah_ibu',['Milik Sendiri','Rumah Orang Tua','Rumah Saudara/kerabat','Rumah Dinas','Sewa/kontrak','Lainnya'])->nullable();
            $table->string('provinsi_ibu')->nullable();
            $table->string('kabupaten_ibu')->nullable();
            $table->string('kecamatan_ibu')->nullable();
            $table->string('kelurahan_ibu')->nullable();
            $table->text('alamat_ibu')->nullable();
            $table->string('kode_pos_ibu')->nullable();

            // Wali
            $table->enum('status_tinggal_wali',[0,1])->default(0);
            $table->enum('status_rumah_wali',['Milik Sendiri','Rumah Orang Tua','Rumah Saudara/kerabat','Rumah Dinas','Sewa/kontrak','Lainnya'])->nullable();
            $table->string('provinsi_wali')->nullable();
            $table->string('kabupaten_wali')->nullable();
            $table->string('kecamatan_wali')->nullable();
            $table->string('kelurahan_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('kode_pos_wali')->nullable();

            // Siswa
            $table->enum('status_tinggal_siswa',['Tinggal dengan Ayah Kandung','Tinggal dengan Ibu Kandung','Tinggal dengan Wali','Ikut Saudara/Kerabat','Asrama Madrasah','Kontrak/Kost','Tinggal di Asrama Pesantren','Panti Asuhan','Rumah Singgah','Lainnya'])->nullable();
            $table->string('provinsi_siswa')->nullable();
            $table->string('kabupaten_siswa')->nullable();
            $table->string('kecamatan_siswa')->nullable();
            $table->string('kelurahan_siswa')->nullable();
            $table->text('alamat_siswa')->nullable();
            $table->string('koordinat_siswa')->nullable();
            $table->string('kode_pos_siswa')->nullable();
            $table->enum('jarak_ke',['Kurang dari 5 km','Antara 5 – 10 Km','Antara 11 – 20 Km','Antara 21 – 30 Km','Lebih dari 30 Km'])->nullable();
            $table->enum('transport_ke',['Jalan Kaki','Sepeda','Sepeda Motor','Mobil Pribadi','Antar Jemput Sekolah','Angkutan Umum','Perahu/Sampan','Kendaraan Pribadi','Kereta Api','Ojek','Andong/Bendi/Sado/Dokar/Delman/Becak','Lainnya'])->nullable();
            $table->enum('waktu_tempuh_ke',['1-10 menit','10-19 menit','20-29 menit','30-39 menit','1-2 jam','> 2 jam'])->nullable();

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
        Schema::dropIfExists('data_alamat');
    }
}
