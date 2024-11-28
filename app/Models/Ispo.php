<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ispo extends Model
{
    //
    protected $fillable = [
        'userID',
        'sertifikatTanah',
        'penetapanTataRuang',
        'penyelesaianSengketa',
        'salinanPerjanjian',
        'stdb',
        'suratIzinLingkungan',
        'catatanPelaksanaan',
        'suratMemilikiKelambagaan',
        'suratKelompokTani',
        'sertifikat',
        'laporanKegiatanPerkebun',
        'sop',
        'dokumenRencanaKegiatan',
        'catatanAsalBenih',
        'sopPenanaman',
        'catatanPelaksanaanPenanaman',
        'catatanPenanaman',
        'sopPemeliharaanTanaman',
        'catatanPemupukanTanaman',
        'ipm',
        'suratPengendalianOPT',
        'acuanTeknisPanen',
        'catatanPelaksanaanPemanenan',
        'petunjukTeknis',
        'pencegahanPenanggulanganKebakaran',
        'keberadaanSatwaTumbuhan',
        'keberadaanSatwaTumbuhanKebun',
        'informasiHargaTBS',
        'catatanHargaTBSRealisasiPembelian',
        'sopPelayanan',
        'pemberianInformasiKepadaPemangkuKepentingan',
        'tanggapanPermintaanInformasiDariPemangkuKepentingan',
        'perbaikanUsaha',
    ];

    protected $table = 'ispos';
}
