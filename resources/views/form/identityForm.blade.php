<x-layouts>
    <div class="container my-5">
        <h1 class="border-bottom mb-4 pb-3">Oil Palm Smallholder Identity</h1>
        <form action="{{ route('submittedIdentity', $identity->id) }}" method="post">
            @csrf
            @method('put')
            <div class="row g-5">

                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="registration-number" class="form-label">Registration Number</label>
                        <input type="text" class="form-control @error('registrationNumber') is-invalid @enderror" id="registration-number" name="registrationNumber" value="{{ old('registrationNumber', isset($identity) ? $identity->registrationNumber : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Oil Palm Smallholder's Email Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', isset($identity) ? $identity->email : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password', isset($identity) ? $identity->password : '')}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Oil Palm Smallholder's Name</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', isset($identity) ? $identity->username : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender" value="{{ old('gender', isset($identity) ? $identity->gender : '')}}">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="national-id" class="form-label">National Identification Number</label>
                        <input type="text" class="form-control @error('nationalID') is-invalid @enderror" id="national-id" name="nationalID" value="{{ old('nationalID', isset($identity) ? $identity->nationalID : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="tax-id" class="form-label">Taxpayer Identification Number</label>
                        <input type="text" class="form-control @error('taxID') is-invalid @enderror" id="tax-id" name="taxID" value="{{ old('taxID', isset($identity) ? $identity->taxID : '')}}" >
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone/Cellphone Number</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', isset($identity) ? $identity->phone : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', isset($identity) ? $identity->address : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="rt-rw" class="form-label">Neighborhood Association (RT) / Citizen (RW)</label>
                        <input type="text" class="form-control @error('rtRw') is-invalid @enderror" id="rt-rw" name="rtRw" value="{{ old('rtRw', isset($identity) ? $identity->rtRw : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="hamlet" class="form-label">Hamlet</label>
                        <input type="text" class="form-control @error('hamlet') is-invalid @enderror" id="hamlet" name="hamlet" value="{{ old('hamlet', isset($identity) ? $identity->hamlet : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="village" class="form-label">Village</label>
                        <input type="text" class="form-control @error('village') is-invalid @enderror" id="village" name="village" value="{{ old('village', isset($identity) ? $identity->village : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="sub-district" class="form-label">Sub-District</label>
                        <input type="text" class="form-control @error('subDistrict') is-invalid @enderror" id="sub-district" name="subDistrict" value="{{ old('subDistrict', isset($identity) ? $identity->subDistrict : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="distritc-city" class="form-label">District/City</label>
                        <input type="text" class="form-control @error('districtCity') is-invalid @enderror" id="distritc-city" name="districtCity" value="{{ old('districtCity', isset($identity) ? $identity->districtCity : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="province" class="form-label">Province</label>
                        <input type="text" class="form-control @error('province') is-invalid @enderror" id="province" name="province" value="{{ old('province', isset($identity) ? $identity->province : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="smallholder" class="form-label">Oil Palm Smallholder Name (Cooperative, Smallholder Group, Association, Union, etc.)</label>
                        <input type="text" class="form-control @error('smallholder') is-invalid @enderror" id="smallholder" name="smallholder" value="{{ old('smallholder', isset($identity) ? $identity->smallholder : '')}}">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="organization-contact" class="form-label">Oil Palm Smallholder Organization Contact Number</label>
                        <input type="text" class="form-control @error('organizationName') is-invalid @enderror" id="organization-contact" name="organizationName" value="{{ old('organizationName', isset($identity) ? $identity->organizationName : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="organization-email" class="form-label">Oil Palm Smallholder Organization Email Address</label>
                        <input type="email" class="form-control @error('organizationEmail') is-invalid @enderror" id="organization-email" name="organizationEmail" value="{{ old('organizationEmail', isset($identity) ? $identity->organizationEmail : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Oil Palm Smallholder's Age (Years)</label>
                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age', isset($identity) ? $identity->age : '')}}" >
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob', isset($identity) ? $identity->dob : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="place-of-birth" class="form-label">Place of Birth</label>
                        <input type="text" class="form-control @error('placeOfBirth') is-invalid @enderror" id="place-of-birth" name="placeOfBirth" value="{{ old('placeOfBirth', isset($identity) ? $identity->placeOfBirth : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="religion" class="form-label">Religion</label>
                        <select class="form-select @error('religion') is-invalid @enderror" id="religion" name="religion" value="{{ old('religion', isset($identity) ? $identity->religion : '')}}">
                            <option value="Moslem">Moslem</option>
                            <option value="Christian">Christian</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddhist">Buddhist</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ethnicity" class="form-label">Ethnicity</label>
                        <input type="text" class="form-control @error('ethnicity') is-invalid @enderror" id="ethnicity" name="ethnicity" value="{{ old('ethnicity', isset($identity) ? $identity->ethnicity : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="marital-status" class="form-label">Marital Status</label>
                        <select class="form-select @error('maritalStatus') is-invalid @enderror" id="marital-status" name="maritalStatus" value="{{ old('maritalStatus', isset($identity) ? $identity->maritalStatus : '')}}">
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="family-members" class="form-label">Number of Family Members</label>
                        <input type="number" class="form-control @error('familyMembers') is-invalid @enderror" id="family-members" name="familyMembers" value="{{ old('familyMembers', isset($identity) ? $identity->familyMembers : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="male-family-members" class="form-label">Number of Male Family Members</label>
                        <input type="number" class="form-control @error('maleFamilyMembers') is-invalid @enderror" id="male-family-members" name="maleFamilyMembers" value="{{ old('maleFamilyMembers', isset($identity) ? $identity->maleFamilyMembers : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="female-family-members" class="form-label">Number of Female Family Members</label>
                        <input type="number" class="form-control @error('femaleFamilyMembers') is-invalid @enderror" id="female-family-members" name="femaleFamilyMembers" value="{{ old('femaleFamilyMembers', isset($identity) ? $identity->femaleFamilyMembers : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="last-education-level" class="form-label">Last Education Level</label>
                        <select class="form-select @error('lastEducationLevel') is-invalid @enderror" id="last-education-level" name="lastEducationLevel" value="{{ old('lastEducationLevel', isset($identity) ? $identity->lastEducationLevel : '')}}">
                            <option selected>Select Your Degree</option>
                            <option value="None">None</option>
                            <option value="High School Certificate">High School Certificate</option>
                            <option value="Bachelor Degree">Bachelor Degree</option>
                            <option value="Master Degree">Master Degree</option>
                            <option value="Doctoral Degree">Doctoral Degree</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="duration-of-education" class="form-label">Duration of Education (Years)</label>
                        <input type="number" class="form-control @error('durationOfEducation') is-invalid @enderror" id="duration-of-education" name="durationOfEducation" value="{{ old('durationOfEducation', isset($identity) ? $identity->durationOfEducation : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="palm-oil-plantation-experience" class="form-label">Palm Oil Plantation Experience (Years)</label>
                        <input type="number" class="form-control @error('palmOilPlantationExperience') is-invalid @enderror" id="palm-oil-plantation-experience" name="palmOilPlantationExperience" value="{{ old('palmOilPlantationExperience', isset($identity) ? $identity->palmOilPlantationExperience : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="other-job" class="form-label">Other Job</label>
                        <input type="text" class="form-control @error('otherJob') is-invalid @enderror" id="other-job" name="otherJob" value="{{ old('otherJob', isset($identity) ? $identity->otherJob : '')}}">
                    </div>
                </div>
                <div class="d-flex justify-content-start">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</x-layouts>