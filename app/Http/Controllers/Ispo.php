<?php

namespace App\Http\Controllers;

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
            'otherJob' => $request->otherJob
        ]);

        return redirect('/dashboard')->with('success', 'Data Has Updated');
    }

    public function ispo()
    {
        $ispo = User::where('id', Auth::user()->id)->firstOrFail();

        return view('form.ispoForm', [
            'ispo' => $ispo
        ]);
    }

    public function detailIspo()
    {

        return view('dashboard.detailIspo');
    }
}
