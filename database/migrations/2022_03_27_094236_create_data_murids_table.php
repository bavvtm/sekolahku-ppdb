<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_murids', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('nisn')->nullable();
            $table->bigInteger('nis_lokal')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->bigInteger('nik')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('jenis_kelamin',['Laki-laki', 'Perempuan'])->nullable();
            $table->string('jumlah_saudara')->nullable();
            $table->string('anak_ke')->nullable();
            $table->enum('agama',['Islam','Kristen Katolik','Kristen Protestan','Hindu','Budha','Konghucu'])->nullable();
            $table->enum('cita_cita',['PNS','TNI/Polri','Guru/Dosen','Dokter','Politikus','Wiraswasta','Seniman/Artis','Ilmuan','Agamawan','Lainnya'])->nullable();
            $table->enum('hobi',['Olahraga','Kesenian','Membaca','Menulis','Jalan-jalan','Lainnya'])->nullable();
            $table->enum('yang_membiayai',['Orang Tua','Wali/Orang Tua Asuh','Tanggungan Sendiri','Lainnya'])->nullable();
            $table->enum('pra_sekolah',['Pernah TK/RA', 'Pernah PAUD'])->nullable();
            $table->string('telp')->nullable();
            $table->bigInteger('kip')->nullable();
            $table->bigInteger('kk')->nullable();
            $table->string('nama_kepala_keluarga')->nullable();
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
        Schema::dropIfExists('data_murids');
    }
}
