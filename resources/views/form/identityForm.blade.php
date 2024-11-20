<x-layouts>
    <div class="container my-5">
        <h2 class="border-bottom mb-4 pb-3">Oil Palm Smallholder Identity</h2>
        <form action="{{ route('submittedIdentity', $identity->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-5">

                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="registration-number" class="form-label">Registration Number</label>
                        <input type="text" class="form-control" id="registration-number" name="registrationNumber" value="{{ old('registrationNumber', isset($identity) ? $identity->registrationNumber : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Oil Palm Smallholder's Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', isset($identity) ? $identity->email : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password', isset($identity) ? $identity->password : '')}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Oil Palm Smallholder's Name</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username', isset($identity) ? $identity->username : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender" name="gender" value="{{ old('gender', isset($identity) ? $identity->gender : '')}}">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="national-id" class="form-label">National Identification Number</label>
                        <input type="text" class="form-control" id="national-id" name="nationalID" value="{{ old('nationalID', isset($identity) ? $identity->nationalID : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="tax-id" class="form-label">Taxpayer Identification Number</label>
                        <input type="text" class="form-control" id="tax-id" name="taxID" value="{{ old('taxID', isset($identity) ? $identity->taxID : '')}}" >
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone/Cellphone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', isset($identity) ? $identity->phone : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', isset($identity) ? $identity->address : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="rt-rw" class="form-label">Neighborhood Association (RT) / Citizen (RW)</label>
                        <input type="text" class="form-control" id="rt-rw" name="rtRw" value="{{ old('rtRw', isset($identity) ? $identity->rtRw : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="hamlet" class="form-label">Hamlet</label>
                        <input type="text" class="form-control" id="hamlet" name="hamlet" value="{{ old('hamlet', isset($identity) ? $identity->hamlet : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="village" class="form-label">Village</label>
                        <input type="text" class="form-control" id="village" name="village" value="{{ old('village', isset($identity) ? $identity->village : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="sub-district" class="form-label">Sub-District</label>
                        <input type="text" class="form-control" id="sub-district" name="subDistrict" value="{{ old('subDistrict', isset($identity) ? $identity->subDistrict : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="distritc-city" class="form-label">District/City</label>
                        <input type="text" class="form-control" id="distritc-city" name="districtCity" value="{{ old('districtCity', isset($identity) ? $identity->districtCity : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="province" class="form-label">Province</label>
                        <input type="text" class="form-control" id="province" name="province" value="{{ old('province', isset($identity) ? $identity->province : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="smallholder" class="form-label">Oil Palm Smallholder Name (Cooperative, Smallholder Group, Association, Union, etc.)</label>
                        <input type="text" class="form-control" id="smallholder" name="smallholder" value="{{ old('smallholder', isset($identity) ? $identity->smallholder : '')}}">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="organization-contact" class="form-label">Oil Palm Smallholder Organization Contact Number</label>
                        <input type="text" class="form-control" id="organization-contact" name="organizationName" value="{{ old('organizationName', isset($identity) ? $identity->organizationName : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="organization-email" class="form-label">Oil Palm Smallholder Organization Email Address</label>
                        <input type="email" class="form-control" id="organization-email" name="organizationEmail" value="{{ old('organizationEmail', isset($identity) ? $identity->organizationEmail : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Oil Palm Smallholder's Age (Years)</label>
                        <input type="number" class="form-control" id="age" name="age" value="{{ old('age', isset($identity) ? $identity->age : '')}}" >
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', isset($identity) ? $identity->dob : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="place-of-birth" class="form-label">Place of Birth</label>
                        <input type="text" class="form-control" id="place-of-birth" name="placeOfBirth" value="{{ old('placeOfBirth', isset($identity) ? $identity->placeOfBirth : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="religion" class="form-label">Religion</label>
                        <select class="form-select" id="religion" name="religion" value="{{ old('religion', isset($identity) ? $identity->religion : '')}}">
                            <option value="Moslem">Moslem</option>
                            <option value="Christian">Christian</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddhist">Buddhist</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ethnicity" class="form-label">Ethnicity</label>
                        <input type="text" class="form-control" id="ethnicity" name="ethnicity" value="{{ old('ethnicity', isset($identity) ? $identity->ethnicity : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="marital-status" class="form-label">Marital Status</label>
                        <select class="form-select" id="marital-status" name="maritalStatus" value="{{ old('maritalStatus', isset($identity) ? $identity->maritalStatus : '')}}">
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="family-members" class="form-label">Number of Family Members</label>
                        <input type="number" class="form-control" id="family-members" name="familyMembers" value="{{ old('familyMembers', isset($identity) ? $identity->familyMembers : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="male-family-members" class="form-label">Number of Male Family Members</label>
                        <input type="number" class="form-control" id="male-family-members" name="maleFamilyMembers" value="{{ old('maleFamilyMembers', isset($identity) ? $identity->maleFamilyMembers : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="female-family-members" class="form-label">Number of Female Family Members</label>
                        <input type="number" class="form-control" id="female-family-members" name="femaleFamilyMembers" value="{{ old('femaleFamilyMembers', isset($identity) ? $identity->femaleFamilyMembers : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="last-education-level" class="form-label">Last Education Level</label>
                        <select class="form-select" id="last-education-level" name="lastEducationLevel" value="{{ old('lastEducationLevel', isset($identity) ? $identity->lastEducationLevel : '')}}">
                            <option selected hidden>Select Your Degree</option>
                            <option value="High School Certificate">High School Certificate</option>
                            <option value="Bachelor Degree">Bachelor Degree</option>
                            <option value="Master Degree">Master Degree</option>
                            <option value="Doctoral Degree">Doctoral Degree</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="duration-of-education" class="form-label">Duration of Education (Years)</label>
                        <input type="number" class="form-control" id="duration-of-education" name="durationOfEducation" value="{{ old('durationOfEducation', isset($identity) ? $identity->durationOfEducation : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="palm-oil-plantation-experience" class="form-label">Palm Oil Plantation Experience (Years)</label>
                        <input type="number" class="form-control" id="palm-oil-plantation-experience" name="palmOilPlantationExperience" value="{{ old('palmOilPlantationExperience', isset($identity) ? $identity->palmOilPlantationExperience : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="other-job" class="form-label">Other Job</label>
                        <input type="number" class="form-control" id="other-job" name="otherJob" value="{{ old('otherJob', isset($identity) ? $identity->otherJob : '')}}">
                    </div>
                </div>
                <div class="d-flex justify-content-start">
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</x-layouts>