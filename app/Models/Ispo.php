<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ispo extends Model
{
    //
    use HasFactory;

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
