<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ispos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID')->nullable();
            $table->string('sertifikatTanah')->nullable();
            $table->string('penetapanTataRuang')->nullable();
            $table->string('penyelesaianSengketa')->nullable();
            $table->string('salinanPerjanjian')->nullable();
            $table->string('stdb')->nullable();
            $table->string('suratIzinLingkungan')->nullable();
            $table->string('catatanPelaksanaan')->nullable();
            $table->string('suratMemilikiKelambagaan')->nullable();
            $table->string('suratKelompokTani')->nullable();
            $table->string('sertifikat')->nullable();
            $table->string('laporanKegiatanPerkebun')->nullable();
            $table->string('sop')->nullable();
            $table->string('dokumenRencanaKegiatan')->nullable();
            $table->string('catatanAsalBenih')->nullable();
            $table->string('sopPenanaman')->nullable();
            $table->string('catatanPelaksanaanPenanaman')->nullable();
            $table->string('catatanPenanaman')->nullable();
            $table->string('sopPemeliharaanTanaman')->nullable();
            $table->string('catatanPemupukanTanaman')->nullable();
            $table->string('ipm')->nullable();
            $table->string('suratPengendalianOPT')->nullable();
            $table->string('acuanTeknisPanen')->nullable();
            $table->string('catatanPelaksanaanPemanenan')->nullable();
            $table->string('petunjukTeknis')->nullable();
            $table->string('pencegahanPenanggulanganKebakaran')->nullable();
            $table->string('keberadaanSatwaTumbuhan')->nullable();
            $table->string('keberadaanSatwaTumbuhanKebun')->nullable();
            $table->string('informasiHargaTBS')->nullable();
            $table->string('catatanHargaTBSRealisasiPembelian')->nullable();
            $table->string('sopPelayanan')->nullable();
            $table->string('pemberianInformasiKepadaPemangkuKepentingan')->nullable();
            $table->string('tanggapanPermintaanInformasiDariPemangkuKepentingan')->nullable();
            $table->string('perbaikanUsaha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ispos');
    }
};
