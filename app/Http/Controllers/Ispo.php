<?php

namespace App\Http\Controllers;

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

    public function submittedIdentity($slug, Request $request)
    {

        $validatedData = $request->validate([
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

        $user = User::where('id', $slug)->firstOrFail();

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
}
