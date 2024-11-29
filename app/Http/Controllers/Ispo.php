<?php

namespace App\Http\Controllers;

use App\Models\Ispo as ModelsIspo;
use App\Models\Plantation;
use App\Models\User;
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

        if($request->hasFile('sertifikatTanah')){
            $file1 = $request->file('sertifikatTanah')->store(options:'ispo');
        }

        if($request->hasFile('penetapanTataRuang')){
            $file2 = $request->file('penetapanTataRuang')->store(options:'ispo');
        }

        if($request->hasFile('penyelesaianSengketa')){
            $file3 = $request->file('penyelesaianSengketa')->store(options:'ispo');
        }

        if($request->hasFile('salinanPerjanjian')){
            $file4 = $request->file('salinanPerjanjian')->store(options:'ispo');
        }

        if($request->hasFile('stdb')){
            $file5 = $request->file('stdb')->store(options:'ispo');
        }

        if($request->hasFile('suratIzinLingkungan')){
            $file6 = $request->file('suratIzinLingkungan')->store(options:'ispo');
        }

        if($request->hasFile('suratMemilikiKelambagaan')){
            $file7 = $request->file('suratMemilikiKelambagaan')->store(options:'ispo');
        }

        if($request->hasFile('suratMemilikiKelambagaan')){
            $file8 = $request->file('suratMemilikiKelambagaan')->store(options:'ispo');
        }

        if($request->hasFile('suratKelompokTani')){
            $file9 = $request->file('suratKelompokTani')->store(options:'ispo');
        }

        if($request->hasFile('sertifikat')){
            $file10 = $request->file('sertifikat')->store(options:'ispo');
        }

        if($request->hasFile('laporanKegiatanPerkebun')){
            $file11 = $request->file('laporanKegiatanPerkebun')->store(options:'ispo');
        }

        if($request->hasFile('sop')){
            $file12 = $request->file('sop')->store(options:'ispo');
        }

        if($request->hasFile('dokumenRencanaKegiatan')){
            $file13 = $request->file('dokumenRencanaKegiatan')->store(options:'ispo');
        }

        if($request->hasFile('catatanAsalBenih')){
            $file14 = $request->file('catatanAsalBenih')->store(options:'ispo');
        }

        if($request->hasFile('sopPenanaman')){
            $file15 = $request->file('sopPenanaman')->store(options:'ispo');
        }

        if($request->hasFile('catatanPelaksanaanPenanaman')){
            $file16 = $request->file('catatanPelaksanaanPenanaman')->store(options:'ispo');
        }

        if($request->hasFile('catatanPenanaman')){
            $file17 = $request->file('catatanPenanaman')->store(options:'ispo');
        }

        if($request->hasFile('sopPemeliharaanTanaman')){
            $file18 = $request->file('sopPemeliharaanTanaman')->store(options:'ispo');
        }

        if($request->hasFile('catatanPemupukanTanaman')){
            $file19 = $request->file('catatanPemupukanTanaman')->store(options:'ispo');
        }
        
        if($request->hasFile('ipm')){
            $file20 = $request->file('ipm')->store(options:'ispo');
        }

        if($request->hasFile('suratPengendalianOPT')){
            $file21 = $request->file('suratPengendalianOPT')->store(options:'ispo');
        }

        if($request->hasFile('acuanTeknisPanen')){
            $file22 = $request->file('acuanTeknisPanen')->store(options:'ispo');
        }

        if($request->hasFile('catatanPelaksanaanPemanenan')){
            $file23 = $request->file('catatanPelaksanaanPemanenan')->store(options:'ispo');
        }

        if($request->hasFile('petunjukTeknis')){
            $file24 = $request->file('petunjukTeknis')->store(options:'ispo');
        }

        if($request->hasFile('pencegahanPenanggulanganKebakaran')){
            $file25 = $request->file('pencegahanPenanggulanganKebakaran')->store(options:'ispo');
        }

        if($request->hasFile('keberadaanSatwaTumbuhan')){
            $file26 = $request->file('keberadaanSatwaTumbuhan')->store(options:'ispo');
        }

        if($request->hasFile('keberadaanSatwaTumbuhanKebun')){
            $file27 = $request->file('keberadaanSatwaTumbuhanKebun')->store(options:'ispo');
        }

        if($request->hasFile('informasiHargaTBS')){
            $file28 = $request->file('informasiHargaTBS')->store(options:'ispo');
        }

        if($request->hasFile('catatanHargaTBSRealisasiPembelian')){
            $file29 = $request->file('catatanHargaTBSRealisasiPembelian')->store(options:'ispo');
        }

        if($request->hasFile('sopPelayanan')){
            $file30 = $request->file('sopPelayanan')->store(options:'ispo');
        }

        if($request->hasFile('pemberianInformasiKepadaPemangkuKepentingan')){
            $file31 = $request->file('pemberianInformasiKepadaPemangkuKepentingan')->store(options:'ispo');
        }

        if($request->hasFile('tanggapanPermintaanInformasiDariPemangkuKepentingan')){
            $file32 = $request->file('tanggapanPermintaanInformasiDariPemangkuKepentingan')->store(options:'ispo');
        }

        if($request->hasFile('perbaikanUsaha')){
            $file33 = $request->file('perbaikanUsaha')->store(options:'ispo');
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

        return view('dashboard.detailIspo',[
            'ispo' => $ispo
        ]);
    }
}
