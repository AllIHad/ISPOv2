<?php

namespace App\Http\Controllers;

use App\Models\Ispo as ModelsIspo;
use App\Models\Plantation;
use App\Models\User;
use App\Models\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Ispo extends Controller
{
    public function landingPage()
    {

        return view('welcome');
    }

    public function dashboard()
    {

        return view('dashboard.index');
    }

    public function identity()
    {
        $identity = User::where('id', Auth::user()->id)->firstOrFail();

        return view('form.identityForm', [
            'identity' => $identity
        ]);
    }

    public function plantation()
    {
        $plantation = Plantation::where('userID', Auth::user()->id)->first();

        return view('form.plantationForm', [
            'plantation' => $plantation
        ]);
    }

    public function createdPlantation(Request $request)
    {

        $request->validate([
            'plantationArea' => 'required',
            'maturePlant' => 'required',
            'immaturePlant' => 'required',
            'producingOil' => 'required',
            'immatureOil' => 'required',
            'plantationLand' => 'required',
            'ownershipStatus' => 'required',
            'legalStatus' => 'required',
            'spatialPlan' => 'required',
            'stdb' => 'required',
            'sppl' => 'required',
            'soilType' => 'required',
            'seedlingType' => 'required',
            'nitgrogenFertilizer' => 'required',
            'phosphorusFertilizer' => 'required',
            'potassiumFertilizer' => 'required',
            'magnesiumFertilizer' => 'required',
            'boronFertilizer' => 'required',
            'copperFertilizer' => 'required',
            'discClearing' => 'required',
            'rowClearing' => 'required',
            'pruning' => 'required',
            'harvestingFrequency' => 'required',
            'ffbProduction' => 'required',
            'ffbSold' => 'required',
            'ffbPrice' => 'required',
            'plantationIncome' => 'required',
        ]);

        Plantation::create([
            'userID' => Auth::user()->id,
            'plantationArea' => $request->plantationArea,
            'maturePlant' => $request->maturePlant,
            'immaturePlant' => $request->immaturePlant,
            'producingOil' => $request->producingOil,
            'immatureOil' => $request->immatureOil,
            'plantationLand' => $request->plantationLand,
            'ownershipStatus' => $request->ownershipStatus,
            'legalStatus' => $request->legalStatus,
            'spatialPlan' => $request->spatialPlan,
            'stdb' => $request->stdb,
            'sppl' => $request->sppl,
            'soilType' => $request->soilType,
            'seedlingType' => $request->seedlingType,
            'nitgrogenFertilizer' => $request->nitgrogenFertilizer,
            'phosphorusFertilizer' => $request->phosphorusFertilizer,
            'potassiumFertilizer' => $request->potassiumFertilizer,
            'magnesiumFertilizer' => $request->magnesiumFertilizer,
            'boronFertilizer' => $request->boronFertilizer,
            'copperFertilizer' => $request->copperFertilizer,
            'discClearing' => $request->discClearing,
            'rowClearing' => $request->rowClearing,
            'pruning' => $request->pruning,
            'harvestingFrequency' => $request->harvestingFrequency,
            'ffbProduction' => $request->ffbProduction,
            'ffbSold' => $request->ffbSold,
            'ffbPrice' => $request->ffbPrice,
            'plantationIncome' => $request->plantationIncome,
        ]);

        return redirect('/dashboard')->with('success', 'Data Has Created');
    }

    public function updatePlantation($slug, Request $request)
    {
        $plantation = Plantation::where('id', $slug)->firstOrFail();

        $request->validate([
            'plantationArea' => 'required',
            'maturePlant' => 'required',
            'immaturePlant' => 'required',
            'producingOil' => 'required',
            'immatureOil' => 'required',
            'plantationLand' => 'required',
            'ownershipStatus' => 'required',
            'legalStatus' => 'required',
            'spatialPlan' => 'required',
            'stdb' => 'required',
            'sppl' => 'required',
            'soilType' => 'required',
            'seedlingType' => 'required',
            'nitgrogenFertilizer' => 'required',
            'phosphorusFertilizer' => 'required',
            'potassiumFertilizer' => 'required',
            'magnesiumFertilizer' => 'required',
            'boronFertilizer' => 'required',
            'copperFertilizer' => 'required',
            'discClearing' => 'required',
            'rowClearing' => 'required',
            'pruning' => 'required',
            'harvestingFrequency' => 'required',
            'ffbProduction' => 'required',
            'ffbSold' => 'required',
            'ffbPrice' => 'required',
            'plantationIncome' => 'required',
        ]);

        $plantation->update([
            'plantationArea' => $request->plantationArea,
            'maturePlant' => $request->maturePlant,
            'immaturePlant' => $request->immaturePlant,
            'producingOil' => $request->producingOil,
            'immatureOil' => $request->immatureOil,
            'plantationLand' => $request->plantationLand,
            'ownershipStatus' => $request->ownershipStatus,
            'legalStatus' => $request->legalStatus,
            'spatialPlan' => $request->spatialPlan,
            'stdb' => $request->stdb,
            'sppl' => $request->sppl,
            'soilType' => $request->soilType,
            'seedlingType' => $request->seedlingType,
            'nitgrogenFertilizer' => $request->nitgrogenFertilizer,
            'phosphorusFertilizer' => $request->phosphorusFertilizer,
            'potassiumFertilizer' => $request->potassiumFertilizer,
            'magnesiumFertilizer' => $request->magnesiumFertilizer,
            'boronFertilizer' => $request->boronFertilizer,
            'copperFertilizer' => $request->copperFertilizer,
            'discClearing' => $request->discClearing,
            'rowClearing' => $request->rowClearing,
            'pruning' => $request->pruning,
            'harvestingFrequency' => $request->harvestingFrequency,
            'ffbProduction' => $request->ffbProduction,
            'ffbProduction' => $request->ffbProduction,
            'ffbPrice' => $request->ffbPrice,
            'plantationIncome' => $request->plantationIncome,
        ]);

        return redirect('/dashboard')->with('success', 'Data Has Created');
    }

    public function submittedIdentity(Request $request, $slug)
    {
        $user = User::findOrFail($slug);

        $request->validate([
            'registrationNumber' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'nationalID' => 'required',
            'taxID' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'rtRw' => 'required',
            'hamlet' => 'required',
            'village' => 'required',
            'subDistrict' => 'required',
            'districtCity' => 'required',
            'province' => 'required',
            'smallholder' => 'required',
            'organizationName' => 'required',
            'organizationEmail' => 'required|email',
            'age' => 'required|integer',
            'dob' => 'required',
            'placeOfBirth' => 'required',
            'religion' => 'required',
            'ethnicity' => 'required',
            'maritalStatus' => 'required',
            'familyMembers' => 'required|integer',
            'maleFamilyMembers' => 'required|integer',
            'femaleFamilyMembers' => 'required|integer',
            'lastEducationLevel' => 'required',
            'durationOfEducation' => 'required|integer',
            'palmOilPlantationExperience' => 'required|integer',
            'otherJob' => 'required'
        ]);

        // dd($user->all());    

        $user->update([
            'username' => $request->username,
            'registrationNumber' => $request->registrationNumber,
            'email' => $request->email,
            'gender' => $request->gender,
            'nationalID' => $request->nationalID,
            'taxID' => $request->taxID,
            'phone' => $request->phone,
            'address' => $request->address,
            'rtRw' => $request->rtRw,
            'hamlet' => $request->hamlet,
            'village' => $request->village,
            'subDistrict' => $request->subDistrict,
            'districtCity' => $request->districtCity,
            'province' => $request->province,
            'smallholder' => $request->smallholder,
            'organizationName' => $request->organizationName,
            'organizationEmail' => $request->organizationEmail,
            'age' => $request->age,
            'dob' => $request->dob,
            'placeOfBirth' => $request->placeOfBirth,
            'religion' => $request->religion,
            'ethnicity' => $request->ethnicity,
            'maritalStatus' => $request->maritalStatus,
            'familyMembers' => $request->familyMembers,
            'maleFamilyMembers' => $request->maleFamilyMembers,
            'femaleFamilyMembers' => $request->femaleFamilyMembers,
            'lastEducationLevel' => $request->lastEducationLevel,
            'durationOfEducation' => $request->durationOfEducation,
            'palmOilPlantationExperience' => $request->palmOilPlantationExperience,
            'otherJob' => $request->otherJob,

        ]);

        return redirect('/dashboard')->with('success', 'Data Has Updated');
    }

    public function ispo()
    {
        $ispo = ModelsIspo::where('userID', Auth::user()->id)->first();

        return view('form.ispoForm', [
            'ispo' => $ispo
        ]);
    }

    public function createIspo(Request $request)
    {

        $request->validate([
            'sertifikatTanah' => 'mimes:pdf|max:5000|nullable',
            'penetapanTataRuang' => 'mimes:pdf|max:5000|nullable',
            'penyelesaianSengketa' => 'mimes:pdf|max:5000|nullable',
            'salinanPerjanjian' => 'mimes:pdf|max:5000|nullable',
            'stdb' => 'mimes:pdf|max:5000|nullable',
            'suratIzinLingkungan' => 'mimes:pdf|max:5000|nullable',
            'catatanPelaksanaan' => 'mimes:pdf|max:5000|nullable',
            'suratMemilikiKelambagaan' => 'mimes:pdf|max:5000|nullable',
            'suratKelompokTani' => 'mimes:pdf|max:5000|nullable',
            'sertifikat' => 'mimes:pdf|max:5000|nullable',
            'laporanKegiatanPerkebun' => 'mimes:pdf|max:5000|nullable',
            'sop' => 'mimes:pdf|max:5000|nullable',
            'dokumenRencanaKegiatan' => 'mimes:pdf|max:5000|nullable',
            'catatanAsalBenih' => 'mimes:pdf|max:5000|nullable',
            'sopPenanaman' => 'mimes:pdf|max:5000|nullable',
            'catatanPelaksanaanPenanaman' => 'mimes:pdf|max:5000|nullable',
            'catatanPenanaman' => 'mimes:pdf|max:5000|nullable',
            'sopPemeliharaanTanaman' => 'mimes:pdf|max:5000|nullable',
            'catatanPemupukanTanaman' => 'mimes:pdf|max:5000|nullable',
            'ipm' => 'mimes:pdf|max:5000|nullable',
            'suratPengendalianOPT' => 'mimes:pdf|max:5000|nullable',
            'acuanTeknisPanen' => 'mimes:pdf|max:5000|nullable',
            'catatanPelaksanaanPemanenan' => 'mimes:pdf|max:5000|nullable',
            'petunjukTeknis' => 'mimes:pdf|max:5000|nullable',
            'pencegahanPenanggulanganKebakaran' => 'mimes:pdf|max:5000|nullable',
            'keberadaanSatwaTumbuhan' => 'mimes:pdf|max:5000|nullable',
            'keberadaanSatwaTumbuhanKebun' => 'mimes:pdf|max:5000|nullable',
            'informasiHargaTBS' => 'mimes:pdf|max:5000|nullable',
            'catatanHargaTBSRealisasiPembelian' => 'mimes:pdf|max:5000|nullable',
            'sopPelayanan' => 'mimes:pdf|max:5000|nullable',
            'pemberianInformasiKepadaPemangkuKepentingan' => 'mimes:pdf|max:5000|nullable',
            'tanggapanPermintaanInformasiDariPemangkuKepentingan' => 'mimes:pdf|max:5000|nullable',
            'perbaikanUsaha' => 'mimes:pdf|max:5000|nullable',
        ]);

        if ($request->hasFile('sertifikatTanah')) {
            $file1 = $request->file('sertifikatTanah')->store(options: 'ispo');
        }

        if ($request->hasFile('penetapanTataRuang')) {
            $file2 = $request->file('penetapanTataRuang')->store(options: 'ispo');
        }

        if ($request->hasFile('penyelesaianSengketa')) {
            $file3 = $request->file('penyelesaianSengketa')->store(options: 'ispo');
        }

        if ($request->hasFile('salinanPerjanjian')) {
            $file4 = $request->file('salinanPerjanjian')->store(options: 'ispo');
        }

        if ($request->hasFile('stdb')) {
            $file5 = $request->file('stdb')->store(options: 'ispo');
        }

        if ($request->hasFile('suratIzinLingkungan')) {
            $file6 = $request->file('suratIzinLingkungan')->store(options: 'ispo');
        }

        if ($request->hasFile('suratMemilikiKelambagaan')) {
            $file7 = $request->file('suratMemilikiKelambagaan')->store(options: 'ispo');
        }

        if ($request->hasFile('suratMemilikiKelambagaan')) {
            $file8 = $request->file('suratMemilikiKelambagaan')->store(options: 'ispo');
        }

        if ($request->hasFile('suratKelompokTani')) {
            $file9 = $request->file('suratKelompokTani')->store(options: 'ispo');
        }

        if ($request->hasFile('sertifikat')) {
            $file10 = $request->file('sertifikat')->store(options: 'ispo');
        }

        if ($request->hasFile('laporanKegiatanPerkebun')) {
            $file11 = $request->file('laporanKegiatanPerkebun')->store(options: 'ispo');
        }

        if ($request->hasFile('sop')) {
            $file12 = $request->file('sop')->store(options: 'ispo');
        }

        if ($request->hasFile('dokumenRencanaKegiatan')) {
            $file13 = $request->file('dokumenRencanaKegiatan')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanAsalBenih')) {
            $file14 = $request->file('catatanAsalBenih')->store(options: 'ispo');
        }

        if ($request->hasFile('sopPenanaman')) {
            $file15 = $request->file('sopPenanaman')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanPelaksanaanPenanaman')) {
            $file16 = $request->file('catatanPelaksanaanPenanaman')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanPenanaman')) {
            $file17 = $request->file('catatanPenanaman')->store(options: 'ispo');
        }

        if ($request->hasFile('sopPemeliharaanTanaman')) {
            $file18 = $request->file('sopPemeliharaanTanaman')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanPemupukanTanaman')) {
            $file19 = $request->file('catatanPemupukanTanaman')->store(options: 'ispo');
        }

        if ($request->hasFile('ipm')) {
            $file20 = $request->file('ipm')->store(options: 'ispo');
        }

        if ($request->hasFile('suratPengendalianOPT')) {
            $file21 = $request->file('suratPengendalianOPT')->store(options: 'ispo');
        }

        if ($request->hasFile('acuanTeknisPanen')) {
            $file22 = $request->file('acuanTeknisPanen')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanPelaksanaanPemanenan')) {
            $file23 = $request->file('catatanPelaksanaanPemanenan')->store(options: 'ispo');
        }

        if ($request->hasFile('petunjukTeknis')) {
            $file24 = $request->file('petunjukTeknis')->store(options: 'ispo');
        }

        if ($request->hasFile('pencegahanPenanggulanganKebakaran')) {
            $file25 = $request->file('pencegahanPenanggulanganKebakaran')->store(options: 'ispo');
        }

        if ($request->hasFile('keberadaanSatwaTumbuhan')) {
            $file26 = $request->file('keberadaanSatwaTumbuhan')->store(options: 'ispo');
        }

        if ($request->hasFile('keberadaanSatwaTumbuhanKebun')) {
            $file27 = $request->file('keberadaanSatwaTumbuhanKebun')->store(options: 'ispo');
        }

        if ($request->hasFile('informasiHargaTBS')) {
            $file28 = $request->file('informasiHargaTBS')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanHargaTBSRealisasiPembelian')) {
            $file29 = $request->file('catatanHargaTBSRealisasiPembelian')->store(options: 'ispo');
        }

        if ($request->hasFile('sopPelayanan')) {
            $file30 = $request->file('sopPelayanan')->store(options: 'ispo');
        }

        if ($request->hasFile('pemberianInformasiKepadaPemangkuKepentingan')) {
            $file31 = $request->file('pemberianInformasiKepadaPemangkuKepentingan')->store(options: 'ispo');
        }

        if ($request->hasFile('tanggapanPermintaanInformasiDariPemangkuKepentingan')) {
            $file32 = $request->file('tanggapanPermintaanInformasiDariPemangkuKepentingan')->store(options: 'ispo');
        }

        if ($request->hasFile('perbaikanUsaha')) {
            $file33 = $request->file('perbaikanUsaha')->store(options: 'ispo');
        }

        ModelsIspo::create([
            'userID' => Auth::user()->id,
            'sertifikatTanah' => $file1 ?? null,
            'penetapanTataRuang' => $file2 ?? null,
            'penyelesaianSengketa' => $file3 ?? null,
            'salinanPerjanjian' => $file4 ?? null,
            'stdb' => $file5 ?? null,
            'suratIzinLingkungan' => $file6 ?? null,
            'catatanPelaksanaan' => $file7 ?? null,
            'suratMemilikiKelambagaan' => $file8 ?? null,
            'suratKelompokTani' => $file9 ?? null,
            'sertifikat' => $file10 ?? null,
            'laporanKegiatanPerkebun' => $file11 ?? null,
            'sop' => $file12 ?? null,
            'dokumenRencanaKegiatan' => $file13 ?? null,
            'catatanAsalBenih'  => $file14 ?? null,
            'sopPenanaman' => $file15 ?? null,
            'catatanPelaksanaanPenanaman' => $file16 ?? null,
            'catatanPenanaman' => $file17 ?? null,
            'sopPemeliharaanTanaman' => $file18 ?? null,
            'catatanPemupukanTanaman' => $file19 ?? null,
            'ipm' => $file20 ?? null,
            'suratPengendalianOPT' => $file21 ?? null,
            'acuanTeknisPanen' => $file22 ?? null,
            'catatanPelaksanaanPemanenan' => $file23 ?? null,
            'petunjukTeknis' => $file24 ?? null,
            'pencegahanPenanggulanganKebakaran' => $file25 ?? null,
            'keberadaanSatwaTumbuhan' => $file26 ?? null,
            'keberadaanSatwaTumbuhanKebun' => $file27 ?? null,
            'informasiHargaTBS' => $file28 ?? null,
            'catatanHargaTBSRealisasiPembelian' => $file29 ?? null,
            'sopPelayanan' => $file30 ?? null,
            'pemberianInformasiKepadaPemangkuKepentingan' => $file31 ?? null,
            'tanggapanPermintaanInformasiDariPemangkuKepentingan' => $file32 ?? null,
            'perbaikanUsaha' => $file33 ?? null,
        ]);

        return redirect('/dashboard')->with('success', 'Data Has Created');
    }

    public function detailIspo()
    {
        $ispo = ModelsIspo::where('userID', Auth::user()->id)->latest()->first();
        $user = User::where('id', Auth::user()->id)->first();
        $validCheck = Validator::where('userID', Auth::user()->id)->latest()->first();

        // Initialize counters
        $jumlahNull = 0;
        $jumlahTidakNull = -4;

        // Check if $ispo is not null and iterate over its columns
        if ($ispo) {
            foreach ($ispo->getAttributes() as $column => $value) {
                if (is_null($value)) {
                    $jumlahNull++;
                } else {
                    $jumlahTidakNull++;
                }
            }
        }

        $validCount = 0;
        $inValidCount = 0;
        $noDocumentCount = 0;

        // Check if $ispo is valid, invalid or has no document
        if ($validCheck) {
            foreach ($validCheck->getAttributes() as $column => $value) {
                if ($value === 'Valid') {
                    $validCount++;
                } elseif ($value === 'Invalid') {
                    $inValidCount++;
                } elseif ($value === 'No Document') {
                    $noDocumentCount++;
                }
            }
        }

        // Debugging
        // dd($validCount, $notValidCount, $noDocumentCount, $jumlahNull, $jumlahTidakNull);

        return view('dashboard.detailIspo', [
            'ispo' => $ispo,
            'jumlahTidakNull' => $jumlahTidakNull,
            'jumlahNull' => $jumlahNull,
            'user' => $user,
            'validCount' => $validCount,
            'inValidCount' => $inValidCount,
            'noDocumentCount' => $noDocumentCount,
        ]);
    }

    public function adminDashboardPage()
    {
        $users = User::where('role', '!=', '1')->latest()->get();

        return view('dashboard.adminDashboard', [
            'users' => $users
        ]);
    }

    public function identityDetail($slug)
    {
        $user = User::where('id', $slug)->get();

        return view('detail.identity', [
            'users' => $user
        ]);
    }

    public function plantationDetail($slug)
    {
        $plantations = Plantation::where('userID', $slug)->get();

        return view('detail.plantation', [
            'plantations' => $plantations
        ]);
    }

    public function deleteIspo($slug)
    {
        $user = User::where('id', $slug)->firstOrFail();
        $plantation = Plantation::where('userID', $slug)->firstOrFail();

        $user->delete();
        $plantation->delete();

        return redirect()->route('adminDashboardPage');
    }

    public function editIspo($slug, Request $request)
    {

        $ispo = ModelsIspo::where('id', $slug)->firstOrFail();

        $request->validate([
            'sertifikatTanah' => 'mimes:pdf|max:5000|nullable',
            'penetapanTataRuang' => 'mimes:pdf|max:5000|nullable',
            'penyelesaianSengketa' => 'mimes:pdf|max:5000|nullable',
            'salinanPerjanjian' => 'mimes:pdf|max:5000|nullable',
            'stdb' => 'mimes:pdf|max:5000|nullable',
            'suratIzinLingkungan' => 'mimes:pdf|max:5000|nullable',
            'catatanPelaksanaan' => 'mimes:pdf|max:5000|nullable',
            'suratMemilikiKelambagaan' => 'mimes:pdf|max:5000|nullable',
            'suratKelompokTani' => 'mimes:pdf|max:5000|nullable',
            'sertifikat' => 'mimes:pdf|max:5000|nullable',
            'laporanKegiatanPerkebun' => 'mimes:pdf|max:5000|nullable',
            'sop' => 'mimes:pdf|max:5000|nullable',
            'dokumenRencanaKegiatan' => 'mimes:pdf|max:5000|nullable',
            'catatanAsalBenih' => 'mimes:pdf|max:5000|nullable',
            'sopPenanaman' => 'mimes:pdf|max:5000|nullable',
            'catatanPelaksanaanPenanaman' => 'mimes:pdf|max:5000|nullable',
            'catatanPenanaman' => 'mimes:pdf|max:5000|nullable',
            'sopPemeliharaanTanaman' => 'mimes:pdf|max:5000|nullable',
            'catatanPemupukanTanaman' => 'mimes:pdf|max:5000|nullable',
            'ipm' => 'mimes:pdf|max:5000|nullable',
            'suratPengendalianOPT' => 'mimes:pdf|max:5000|nullable',
            'acuanTeknisPanen' => 'mimes:pdf|max:5000|nullable',
            'catatanPelaksanaanPemanenan' => 'mimes:pdf|max:5000|nullable',
            'petunjukTeknis' => 'mimes:pdf|max:5000|nullable',
            'pencegahanPenanggulanganKebakaran' => 'mimes:pdf|max:5000|nullable',
            'keberadaanSatwaTumbuhan' => 'mimes:pdf|max:5000|nullable',
            'keberadaanSatwaTumbuhanKebun' => 'mimes:pdf|max:5000|nullable',
            'informasiHargaTBS' => 'mimes:pdf|max:5000|nullable',
            'catatanHargaTBSRealisasiPembelian' => 'mimes:pdf|max:5000|nullable',
            'sopPelayanan' => 'mimes:pdf|max:5000|nullable',
            'pemberianInformasiKepadaPemangkuKepentingan' => 'mimes:pdf|max:5000|nullable',
            'tanggapanPermintaanInformasiDariPemangkuKepentingan' => 'mimes:pdf|max:5000|nullable',
            'perbaikanUsaha' => 'mimes:pdf|max:5000|nullable',
        ]);

        if ($request->hasFile('sertifikatTanah')) {
            $file1 = $request->file('sertifikatTanah')->store(options: 'ispo');
        }

        if ($request->hasFile('penetapanTataRuang')) {
            $file2 = $request->file('penetapanTataRuang')->store(options: 'ispo');
        }

        if ($request->hasFile('penyelesaianSengketa')) {
            $file3 = $request->file('penyelesaianSengketa')->store(options: 'ispo');
        }

        if ($request->hasFile('salinanPerjanjian')) {
            $file4 = $request->file('salinanPerjanjian')->store(options: 'ispo');
        }

        if ($request->hasFile('stdb')) {
            $file5 = $request->file('stdb')->store(options: 'ispo');
        }

        if ($request->hasFile('suratIzinLingkungan')) {
            $file6 = $request->file('suratIzinLingkungan')->store(options: 'ispo');
        }

        if ($request->hasFile('suratMemilikiKelambagaan')) {
            $file7 = $request->file('suratMemilikiKelambagaan')->store(options: 'ispo');
        }

        if ($request->hasFile('suratMemilikiKelambagaan')) {
            $file8 = $request->file('suratMemilikiKelambagaan')->store(options: 'ispo');
        }

        if ($request->hasFile('suratKelompokTani')) {
            $file9 = $request->file('suratKelompokTani')->store(options: 'ispo');
        }

        if ($request->hasFile('sertifikat')) {
            $file10 = $request->file('sertifikat')->store(options: 'ispo');
        }

        if ($request->hasFile('laporanKegiatanPerkebun')) {
            $file11 = $request->file('laporanKegiatanPerkebun')->store(options: 'ispo');
        }

        if ($request->hasFile('sop')) {
            $file12 = $request->file('sop')->store(options: 'ispo');
        }

        if ($request->hasFile('dokumenRencanaKegiatan')) {
            $file13 = $request->file('dokumenRencanaKegiatan')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanAsalBenih')) {
            $file14 = $request->file('catatanAsalBenih')->store(options: 'ispo');
        }

        if ($request->hasFile('sopPenanaman')) {
            $file15 = $request->file('sopPenanaman')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanPelaksanaanPenanaman')) {
            $file16 = $request->file('catatanPelaksanaanPenanaman')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanPenanaman')) {
            $file17 = $request->file('catatanPenanaman')->store(options: 'ispo');
        }

        if ($request->hasFile('sopPemeliharaanTanaman')) {
            $file18 = $request->file('sopPemeliharaanTanaman')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanPemupukanTanaman')) {
            $file19 = $request->file('catatanPemupukanTanaman')->store(options: 'ispo');
        }

        if ($request->hasFile('ipm')) {
            $file20 = $request->file('ipm')->store(options: 'ispo');
        }

        if ($request->hasFile('suratPengendalianOPT')) {
            $file21 = $request->file('suratPengendalianOPT')->store(options: 'ispo');
        }

        if ($request->hasFile('acuanTeknisPanen')) {
            $file22 = $request->file('acuanTeknisPanen')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanPelaksanaanPemanenan')) {
            $file23 = $request->file('catatanPelaksanaanPemanenan')->store(options: 'ispo');
        }

        if ($request->hasFile('petunjukTeknis')) {
            $file24 = $request->file('petunjukTeknis')->store(options: 'ispo');
        }

        if ($request->hasFile('pencegahanPenanggulanganKebakaran')) {
            $file25 = $request->file('pencegahanPenanggulanganKebakaran')->store(options: 'ispo');
        }

        if ($request->hasFile('keberadaanSatwaTumbuhan')) {
            $file26 = $request->file('keberadaanSatwaTumbuhan')->store(options: 'ispo');
        }

        if ($request->hasFile('keberadaanSatwaTumbuhanKebun')) {
            $file27 = $request->file('keberadaanSatwaTumbuhanKebun')->store(options: 'ispo');
        }

        if ($request->hasFile('informasiHargaTBS')) {
            $file28 = $request->file('informasiHargaTBS')->store(options: 'ispo');
        }

        if ($request->hasFile('catatanHargaTBSRealisasiPembelian')) {
            $file29 = $request->file('catatanHargaTBSRealisasiPembelian')->store(options: 'ispo');
        }

        if ($request->hasFile('sopPelayanan')) {
            $file30 = $request->file('sopPelayanan')->store(options: 'ispo');
        }

        if ($request->hasFile('pemberianInformasiKepadaPemangkuKepentingan')) {
            $file31 = $request->file('pemberianInformasiKepadaPemangkuKepentingan')->store(options: 'ispo');
        }

        if ($request->hasFile('tanggapanPermintaanInformasiDariPemangkuKepentingan')) {
            $file32 = $request->file('tanggapanPermintaanInformasiDariPemangkuKepentingan')->store(options: 'ispo');
        }

        if ($request->hasFile('perbaikanUsaha')) {
            $file33 = $request->file('perbaikanUsaha')->store(options: 'ispo');
        }

        $ispo->update([
            'sertifikatTanah' => isset($file1) ? $file1 : ($ispo->sertifikatTanah ? $ispo->sertifikatTanah : null),
            'penetapanTataRuang' => isset($file2) ? $file2 : ($ispo->penetapanTataRuang ? $ispo->penetapanTataRuang : null),
            'penyelesaianSengketa' => isset($file3) ? $file3 : ($ispo->penyelesaianSengketa ? $ispo->penyelesaianSengketa : null),
            'salinanPerjanjian' => isset($file4) ? $file4 : ($ispo->salinanPerjanjian ? $ispo->salinanPerjanjian : null),
            'stdb' => isset($file5) ? $file5 : ($ispo->stdb ? $ispo->stdb : null),
            'suratIzinLingkungan' => isset($file6) ? $file6 : ($ispo->suratIzinLingkungan ? $ispo->suratIzinLingkungan : null),
            'catatanPelaksanaan' => isset($file7) ? $file7 : ($ispo->catatanPelaksanaan ? $ispo->catatanPelaksanaan : null),
            'suratMemilikiKelambagaan' => isset($file8) ? $file8 : ($ispo->suratMemilikiKelambagaan ? $ispo->suratMemilikiKelambagaan : null),
            'suratKelompokTani' => isset($file9) ? $file9 : ($ispo->suratKelompokTani ? $ispo->suratKelompokTani : null),
            'sertifikat' => isset($file10) ? $file10 : ($ispo->sertifikat ? $ispo->sertifikat : null),
            'laporanKegiatanPerkebun' => isset($file11) ? $file11 : ($ispo->laporanKegiatanPerkebun ? $ispo->laporanKegiatanPerkebun : null),
            'sop' => isset($file12) ? $file12 : ($ispo->sop ? $ispo->sop : null),
            'dokumenRencanaKegiatan' => isset($file13) ? $file13 : ($ispo->dokumenRencanaKegiatan ? $ispo->dokumenRencanaKegiatan : null),
            'catatanAsalBenih'  => isset($file14) ? $file14 : ($ispo->catatanAsalBenih ? $ispo->catatanAsalBenih : null),
            'sopPenanaman' => isset($file15) ? $file15 : ($ispo->sopPenanaman ? $ispo->sopPenanaman : null),
            'catatanPelaksanaanPenanaman' => isset($file16) ? $file16 : ($ispo->catatanPelaksanaanPenanaman ? $ispo->catatanPelaksanaanPenanaman : null),
            'catatanPenanaman' => isset($file17) ? $file17 : ($ispo->catatanPenanaman ? $ispo->catatanPenanaman : null),
            'sopPemeliharaanTanaman' => isset($file18) ? $file18 : ($ispo->sopPemeliharaanTanaman ? $ispo->sopPemeliharaanTanaman : null),
            'catatanPemupukanTanaman' => isset($file19) ? $file19 : ($ispo->catatanPemupukanTanaman ? $ispo->catatanPemupukanTanaman : null),
            'ipm' => isset($file20) ? $file20 : ($ispo->ipm ? $ispo->ipm : null),
            'suratPengendalianOPT' => isset($file21) ? $file21 : ($ispo->suratPengendalianOPT ? $ispo->suratPengendalianOPT : null),
            'acuanTeknisPanen' => isset($file22) ? $file22 : ($ispo->acuanTeknisPanen ? $ispo->acuanTeknisPanen : null),
            'catatanPelaksanaanPemanenan' => isset($file23) ? $file23 : ($ispo->catatanPelaksanaanPemanenan ? $ispo->catatanPelaksanaanPemanenan : null),
            'petunjukTeknis' => isset($file24) ? $file24 : ($ispo->petunjukTeknis ? $ispo->petunjukTeknis : null),
            'pencegahanPenanggulanganKebakaran' => isset($file25) ? $file25 : ($ispo->pencegahanPenanggulanganKebakaran ? $ispo->pencegahanPenanggulanganKebakaran : null),
            'keberadaanSatwaTumbuhan' => isset($file26) ? $file26 : ($ispo->keberadaanSatwaTumbuhan ? $ispo->keberadaanSatwaTumbuhan : null),
            'keberadaanSatwaTumbuhanKebun' => isset($file27) ? $file27 : ($ispo->keberadaanSatwaTumbuhanKebun ? $ispo->keberadaanSatwaTumbuhanKebun : null),
            'informasiHargaTBS' => isset($file28) ? $file28 : ($ispo->informasiHargaTBS ? $ispo->informasiHargaTBS : null),
            'catatanHargaTBSRealisasiPembelian' => isset($file29) ? $file29 : ($ispo->catatanHargaTBSRealisasiPembelian ? $ispo->catatanHargaTBSRealisasiPembelian : null),
            'sopPelayanan' => isset($file30) ? $file30 : ($ispo->sopPelayanan ? $ispo->sopPelayanan : null),
            'pemberianInformasiKepadaPemangkuKepentingan' => isset($file31) ? $file31 : ($ispo->pemberianInformasiKepadaPemangkuKepentingan ? $ispo->pemberianInformasiKepadaPemangkuKepentingan : null),
            'tanggapanPermintaanInformasiDariPemangkuKepentingan' => isset($file32) ? $file32 : ($ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan ? $ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan : null),
            'perbaikanUsaha' => isset($file33) ? $file33 : ($ispo->perbaikanUsaha ? $ispo->perbaikanUsaha : null),
        ]);

        return redirect('/dashboard')->with('success', 'Data Has Created');
    }

    public function ispoStandard($slug)
    {
        $ispo = ModelsIspo::where('userID', $slug)->latest()->first();

        if (!$ispo) {
            $users = User::where('role', '!=', '1')->latest()->get();
            notify()->error('The user has not imputed a data');

            return view('dashboard.adminDashboard',[
                'users' => $users,
            ]);
        }
        
        $validCheck = Validator::where('userID', $slug)->latest()->first();
        
        return view('form.validatorAdmin', [
            'ispo' => $ispo,
            'validCheck' => $validCheck,
        ]);
    }

    public function validate($slug, Request $request)
    {
        $ispo = ModelsIspo::where('userID', $slug)->latest()->first();

        Validator::create([
            'userID' => $ispo->userID,
            'ispoID' => $slug,
            'file1' => $request->file1,
            'file2' => $request->file2,
            'file3' => $request->file3,
            'file4' => $request->file4,
            'file5' => $request->file5,
            'file6' => $request->file6,
            'file7' => $request->file7,
            'file8' => $request->file8,
            'file9' => $request->file9,
            'file10' => $request->file10,
            'file11' => $request->file11,
            'file12' => $request->file12,
            'file13' => $request->file13,
            'file14' => $request->file14,
            'file15' => $request->file15,
            'file16' => $request->file16,
            'file17' => $request->file17,
            'file18' => $request->file18,
            'file19' => $request->file19,
            'file20' => $request->file20,
            'file21' => $request->file21,
            'file22' => $request->file22,
            'file23' => $request->file23,
            'file24' => $request->file24,
            'file25' => $request->file25,
            'file26' => $request->file26,
            'file27' => $request->file27,
            'file28' => $request->file28,
            'file29' => $request->file29,
            'file30' => $request->file30,
            'file31' => $request->file31,
            'file32' => $request->file32,
            'file33' => $request->file33,
        ]);

        return redirect('/adminDashboard')->with('Success', 'Data has Created');
    }

    public function editValidate($slug, Request $request)
    {
        $validCheck = Validator::where('userID', $slug)->latest()->first();

        $validCheck->update([
            'file1' => $request->file1,
            'file2' => $request->file2,
            'file3' => $request->file3,
            'file4' => $request->file4,
            'file5' => $request->file5,
            'file6' => $request->file6,
            'file7' => $request->file7,
            'file8' => $request->file8,
            'file9' => $request->file9,
            'file10' => $request->file10,
            'file11' => $request->file11,
            'file12' => $request->file12,
            'file13' => $request->file13,
            'file14' => $request->file14,
            'file15' => $request->file15,
            'file16' => $request->file16,
            'file17' => $request->file17,
            'file18' => $request->file18,
            'file19' => $request->file19,
            'file20' => $request->file20,
            'file21' => $request->file21,
            'file22' => $request->file22,
            'file23' => $request->file23,
            'file24' => $request->file24,
            'file25' => $request->file25,
            'file26' => $request->file26,
            'file27' => $request->file27,
            'file28' => $request->file28,
            'file29' => $request->file29,
            'file30' => $request->file30,
            'file31' => $request->file31,
            'file32' => $request->file32,
            'file33' => $request->file33,
        ]);

        return redirect('/adminDashboard')->with('Success', 'Data has updated');
    }
}
