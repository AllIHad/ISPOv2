<x-layouts>
    <x-slot:slot>
        <div class="container my-5">
            <h4 class="border-bottom mb-4 pb-3">Plantattion Detail</h4>
            <div class="p-3 mt-2 mb-4 bg-light text-dark d-flex justify-content-center rounded gap-2">
                @foreach($plantations as $plantation)
                <div class="col-md-6">
                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Total Oil Palm Plantation Area (ha) :</p>
                        <span class="my-0">{{ $plantation->plantationArea }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Mature Plants (TM) (ha) :</p>
                        <span class="my-0">{{ $plantation->maturePlant }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Immature Plants (TBM) (ha) :</p>
                        <span class="my-0">{{ $plantation->immaturePlant }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Age of Producing Oil Palm Plants (Year) :</p>
                        <span class="my-0">{{ $plantation->producingOil }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Age of Immature Oil Palm Plants (Year) :</p>
                        <span class="my-0">{{ $plantation->immatureOil }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Origin Of Oil Palm Plantation Land (Forest, Rubber, Etc.) :</p>
                        <span class="my-0">{{ $plantation->plantationLand }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Ownership Status Of Oil Palm Plantation (Owned, Rented, Etc.) :</p>
                        <span class="my-0">{{ $plantation->ownershipStatus }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Legal Status Of Oil Palm Plantation Land (SHM, SKGR, SKT, Within Forest Area) :</p>
                        <span class="my-0">{{ $plantation->legalStatus }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Plantation Land Has Been Mapped According To Spatial Plan (RT/RW) (In Coordinates) :</p>
                        <span class="my-0">{{ $plantation->spatialPlan }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">STDB Document (Available, In Process, Not Available) :</p>
                        <span class="my-0">{{ $plantation->stdb }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">SPPL Document (Available, In Process, Not Available) :</p>
                        <span class="my-0">{{ $plantation->sppl }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Soil Type (Mineral, Peat) :</p>
                        <span class="my-0">{{ $plantation->soilType }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Type Of Oil Palm Seedlings (Dura, Tenera, Unknown) :</p>
                        <span class="my-0">{{ $plantation->seedlingType }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Nitrogen (N) Fertilizer (Urea, ZA, AN); Application : Once Every 4-6 Months :</p>
                        <span class="my-0">{{ $plantation->nitgrogenFertilizer }}</span>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Phosphorus (P) Fertilizer (SP-36, RP, TSP, DAP); Application : Once Every 6-12 Months :</p>
                        <span class="my-0">{{ $plantation->phosphorusFertilizer }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Potassium (K) Fertilizer (Kcl, K2SO4); Application : Once Every 4-6 Months :</p>
                        <span class="my-0">{{ $plantation->potassiumFertilizer }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Magnesium (Kieserite, Dolomite, Langbeinite); Application : Once Every 4-6 Months :</p>
                        <span class="my-0">{{ $plantation->magnesiumFertilizer }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Boron (B) Sodium Borate; Application : Once Every 6-12 Months :</p>
                        <span class="my-0">{{ $plantation->boronFertilizer }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Copper (Cu) (CuSO4); Application : Once Every 12 Months :</p>
                        <span class="my-0">{{ $plantation->copperFertilizer }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Disc Clearing Per Year (4 Times A Year) :</p>
                        <span class="my-0">{{ $plantation->discClearing }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Row Clearing Per Year (4 Times A Year) :</p>
                        <span class="my-0">{{ $plantation->rowClearing }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Pruning Per Year (2 Times A Year) :</p>
                        <span class="my-0">{{ $plantation->pruning }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Harvesting Frequency (1x Every 15 Days, 1x Every 10 Days, 1x Every 7 Days) :</p>
                        <span class="my-0">{{ $plantation->harvestingFrequency }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Fresh Fruit Bunch (FFB) Production Per Harvest (Kg) :</p>
                        <span class="my-0">{{ $plantation->ffbProduction }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">FFB Sold To (Collectors, RAM, Palm Oil Mill) :</p>
                        <span class="my-0">{{ $plantation->ffbSold }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Latest FFB Selling Price (Rp/Kg) :</p>
                        <span class="my-0">{{ $plantation->ffbPrice }}</span>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bolder mb-1">Total Oil Palm Plantation Income (Rp/Month, Rp/Year) :</p>
                        <span class="my-0">{{ $plantation->plantationIncome }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </x-slot:slot>
</x-layouts>