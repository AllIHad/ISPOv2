<x-layouts>
    <x-slot:slot>
        <div class="container my-5">
            <h4 class="border-bottom mb-4 pb-3">Plantattion Detail</h4>
            <div class="p-3 mt-2 mb-4 bg-light text-dark d-flex justify-content-center rounded gap-2">
                @foreach($plantations as $plantation)
                <div class="col-md-6">
                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->plantationArea }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->maturePlant }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->immaturePlant }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->producingOil }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->immatureOil }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->plantationLand }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->ownershipStatus }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->legalStatus }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->spatialPlan }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->stdb }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->sppl }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->soilType }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->seedlingType }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->nitgrogenFertilizer }}</span>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->phosphorusFertilizer }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->potassiumFertilizer }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->magnesiumFertilizer }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->boronFertilizer }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->copperFertilizer }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->discClearing }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->rowClearing }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->pruning }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->harvestingFrequency }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->ffbProduction }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->ffbSold }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->ffbPrice }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Registration Number :</p>
                        <span class="my-0">{{ $plantation->plantationIncome }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </x-slot:slot>
</x-layouts>