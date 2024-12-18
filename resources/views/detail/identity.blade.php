<x-layouts>
    <x-slot:slot>
        <div class="container my-5">
            <h4 class="border-bottom mb-4 pb-3">Identity Detail</h4>
            <div class="p-3 mt-2 mb-4 bg-light text-dark d-flex justify-content-center rounded gap-2">
                @foreach($users as $user)
                <div class="col-md-6">
                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $user->registrationNumber }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Oil Palm Smallholder's Email Address :</p>
                        <span class="my-0">{{ $user->email }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Oil Palm Smallholder's Name :</p>
                        <span class="my-0">{{ $user->username }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Gender :</p>
                        <span class="my-0">{{ $user->gender }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">National Identification Number :</p>
                        <span class="my-0">{{ $user->nationalID }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Taxpayer Identification Number :</p>
                        <span class="my-0">{{ $user->taxID }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Phone/Cellphone Number :</p>
                        <span class="my-0">{{ $user->phone }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Address :</p>
                        <span class="my-0">{{ $user->address }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Neighborhood Association (RT) / Citizen (RW) :</p>
                        <span class="my-0">{{ $user->rtRw }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Hamlet :</p>
                        <span class="my-0">{{ $user->hamlet }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Village :</p>
                        <span class="my-0">{{ $user->village }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Sub-District :</p>
                        <span class="my-0">{{ $user->subDistrict }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">District/City :</p>
                        <span class="my-0">{{ $user->districtCity }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Province :</p>
                        <span class="my-0">{{ $user->province }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Oil Palm Smallholder Name (Cooperative, Smallholder Group, Association, Union, etc.) :</p>
                        <span class="my-0">{{ $user->smallholder }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Oil Palm Smallholder Organization Contact Number :</p>
                        <span class="my-0">{{ $user->organizationName }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Oil Palm Smallholder Organization Email Address :</p>
                        <span class="my-0">{{ $user->organizationEmail }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Oil Palm Smallholder's Age (Years) :</p>
                        <span class="my-0">{{ $user->age }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Date of Birth :</p>
                        <span class="my-0">{{ $user->dob }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Place of Birth :</p>
                        <span class="my-0">{{ $user->placeOfBirth }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Religion :</p>
                        <span class="my-0">{{ $user->religion }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Ethnicity :</p>
                        <span class="my-0">{{ $user->ethnicity }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Marital Status :</p>
                        <span class="my-0">{{ $user->maritalStatus }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Number of Family Members :</p>
                        <span class="my-0">{{ $user->familyMembers }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Number of Male Family Members :</p>
                        <span class="my-0">{{ $user->maleFamilyMembers }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Number of Female Family Members :</p>
                        <span class="my-0">{{ $user->femaleFamilyMembers }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Last Education Level :</p>
                        <span class="my-0">{{ $user->lastEducationLevel }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Duration of Education (Years) :</p>
                        <span class="my-0">{{ $user->durationOfEducation }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Palm Oil Plantation Experience (Years) :</p>
                        <span class="my-0">{{ $user->palmOilPlantationExperience }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Other Job :</p>
                        <span class="my-0">{{ $user->otherJob }}</span>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </x-slot:slot>
</x-layouts>