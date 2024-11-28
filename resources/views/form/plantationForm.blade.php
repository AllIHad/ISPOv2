<x-layouts>
    <div class="container my-5">
        <h2 class="border-bottom mb-4 pb-3">Plantation Performance</h2>
        <form action="{{ isset($plantation) ? route('UpdatePlantationForm', $plantation->id ) : route('createdPlantationForm') }}" method="post">
            @csrf
            @if($plantation)
            @method('put')
            @endif
            <div class="row g-5">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="total-area" class="form-label">Total Oil Palm Plantation Area (ha)</label>
                        <input type="text" class="form-control @error('plantationArea') is-invalid @enderror" id="total-area" name="plantationArea" value="{{ old('plantationArea', isset($plantation) ? $plantation->plantationArea : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="mature-plants" class="form-label">Mature Plants (TM) (ha)</label>
                        <input type="text" class="form-control @error('maturePlant') is-invalid @enderror" id="mature-plants" name="maturePlant" value="{{ old('maturePlant', isset($plantation) ? $plantation->maturePlant : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="immature-plants" class="form-label">Immature Plants (TBM) (ha)</label>
                        <input type="text" class="form-control @error('immaturePlant') is-invalid @enderror" id="immature-plants" name="immaturePlant" value="{{ old('immaturePlant', isset($plantation) ? $plantation->immaturePlant : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="age-producing-plants" class="form-label">Age of Producing Oil Palm Plants (Year)</label>
                        <input type="number" class="form-control @error('producingOil') is-invalid @enderror" id="age-producing-plants" name="producingOil" value="{{ old('producingOil', isset($plantation) ? $plantation->producingOil : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="age-immature-plants" class="form-label">Age of Immature Oil Palm Plants (Year)</label>
                        <input type="number" class="form-control @error('immatureOil') is-invalid @enderror" id="age-immature-plants" name="immatureOil" value="{{ old('immatureOil', isset($plantation) ? $plantation->immatureOil : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="origin-land" class="form-label">Origin Of Oil Palm Plantation Land (Forest, Rubber, Etc.)</label>
                        <input type="text" class="form-control @error('plantationLand') is-invalid @enderror" id="origin-land" name="plantationLand" value="{{ old('plantationLand', isset($plantation) ? $plantation->plantationLand : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="ownership-status" class="form-label">Ownership Status Of Oil Palm Plantation (Owned, Rented, Etc.)</label>
                        <input type="text" class="form-control @error('ownershipStatus') is-invalid @enderror" id="ownership-status" name="ownershipStatus" value="{{ old('ownershipStatus', isset($plantation) ? $plantation->ownershipStatus : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="legal-status" class="form-label">Legal Status Of Oil Palm Plantation Land (SHM, SKGR, SKT, Within Forest Area)</label>
                        <input type="text" class="form-control @error('legalStatus') is-invalid @enderror" id="legal-status" name="legalStatus" value="{{ old('legalStatus', isset($plantation) ? $plantation->legalStatus : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="spatial-plan" class="form-label">Plantation Land Has Been Mapped According To Spatial Plan (RT/RW) (In Coordinates)</label>
                        <input type="text" class="form-control @error('spatialPlan') is-invalid @enderror" id="spatial-plan" name="spatialPlan" value="{{ old('spatialPlan', isset($plantation) ? $plantation->spatialPlan : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="stdb-doc" class="form-label">STDB Document (Available, In Process, Not Available)</label>
                        <input type="text" class="form-control @error('stdb') is-invalid @enderror" id="stdb-doc" name="stdb" value="{{ old('stdb', isset($plantation) ? $plantation->stdb : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="sppl-doc" class="form-label">SPPL Document (Available, In Process, Not Available)</label>
                        <input type="text" class="form-control @error('sppl') is-invalid @enderror" id="sppl-doc" name="sppl" value="{{ old('sppl', isset($plantation) ? $plantation->sppl : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="soil-type" class="form-label">Soil Type (Mineral, Peat)</label>
                        <input type="text" class="form-control @error('soilType') is-invalid @enderror" id="soil-type" name="soilType" value="{{ old('soilType', isset($plantation) ? $plantation->soilType : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="seedling-type" class="form-label">Type Of Oil Palm Seedlings (Dura, Tenera, Unknown)</label>
                        <input type="text" class="form-control @error('seedlingType') is-invalid @enderror" id="seedling-type" name="seedlingType" value="{{ old('seedlingType', isset($plantation) ? $plantation->seedlingType : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="nitrogen-fertilizer" class="form-label">Nitrogen (N) Fertilizer (Urea, ZA, AN); Application : Once Every 4-6 Months</label>
                        <input type="text" class="form-control @error('nitgrogenFertilizer') is-invalid @enderror" id="nitrogen-fertilizer" name="nitgrogenFertilizer" value="{{ old('nitgrogenFertilizer', isset($plantation) ? $plantation->nitgrogenFertilizer : '')}}">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phosphorus-fertilizer" class="form-label">Phosphorus (P) Fertilizer (SP-36, RP, TSP, DAP); Application : Once Every 6-12 Months</label>
                        <input type="text" class="form-control @error('phosphorusFertilizer') is-invalid @enderror" id="phosphorus-fertilizer" name="phosphorusFertilizer" value="{{ old('phosphorusFertilizer', isset($plantation) ? $plantation->phosphorusFertilizer : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="potassium-fertilizer" class="form-label">Potassium (K) Fertilizer (Kcl, K2SO4); Application : Once Every 4-6 Months</label>
                        <input type="text" class="form-control @error('potassiumFertilizer') is-invalid @enderror" id="potassium-fertilizer" name="potassiumFertilizer" value="{{ old('potassiumFertilizer', isset($plantation) ? $plantation->potassiumFertilizer : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="magnesium-fertilizer" class="form-label">Magnesium (Kieserite, Dolomite, Langbeinite); Application : Once Every 4-6 Months</label>
                        <input type="text" class="form-control @error('magnesiumFertilizer') is-invalid @enderror" id="magnesium-fertilizer" name="magnesiumFertilizer" value="{{ old('magnesiumFertilizer', isset($plantation) ? $plantation->magnesiumFertilizer : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="boron-fertilizer" class="form-label">Boron (B) Sodium Borate; Application : Once Every 6-12 Months</label>
                        <input type="text" class="form-control @error('boronFertilizer') is-invalid @enderror" id="boron-fertilizer" name="boronFertilizer" value="{{ old('boronFertilizer', isset($plantation) ? $plantation->boronFertilizer : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="copper-fertilizer" class="form-label">Copper (Cu) (CuSO4); Application : Once Every 12 Months</label>
                        <input type="text" class="form-control @error('copperFertilizer') is-invalid @enderror" id="copper-fertilizer" name="copperFertilizer" value="{{ old('copperFertilizer', isset($plantation) ? $plantation->copperFertilizer : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="disc-clearing" class="form-label">Disc Clearing Per Year (4 Times A Year)</label>
                        <input type="text" class="form-control @error('discClearing') is-invalid @enderror" id="disc-clearing" name="discClearing" value="{{ old('discClearing', isset($plantation) ? $plantation->discClearing : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="row-clearing" class="form-label">Row Clearing Per Year (4 Times A Year)</label>
                        <input type="text" class="form-control @error('rowClearing') is-invalid @enderror" id="row-clearing" name="rowClearing" value="{{ old('rowClearing', isset($plantation) ? $plantation->rowClearing : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="pruning" class="form-label">Pruning Per Year (2 Times A Year)</label>
                        <input type="text" class="form-control @error('pruning') is-invalid @enderror" id="pruning" name="pruning" value="{{ old('pruning', isset($plantation) ? $plantation->pruning : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="harvesting-frequency" class="form-label">Harvesting Frequency (1x Every 15 Days, 1x Every 10 Days, 1x Every 7 Days)</label>
                        <input type="text" class="form-control @error('harvestingFrequency') is-invalid @enderror" id="harvesting-frequency" name="harvestingFrequency" value="{{ old('harvestingFrequency', isset($plantation) ? $plantation->harvestingFrequency : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="ffb-production" class="form-label">Fresh Fruit Bunch (FFB) Production Per Harvest (Kg)</label>
                        <input type="text" class="form-control @error('ffbProduction') is-invalid @enderror" id="ffb-production" name="ffbProduction" value="{{ old('ffbProduction', isset($plantation) ? $plantation->ffbProduction : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="ffb-sold" class="form-label">FFB Sold To (Collectors, RAM, Palm Oil Mill)</label>
                        <input type="text" class="form-control @error('ffbSold') is-invalid @enderror" id="ffb-sold" name="ffbSold" value="{{ old('ffbSold', isset($plantation) ? $plantation->ffbSold : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="ffb-price" class="form-label">Latest FFB Selling Price (Rp/Kg)</label>
                        <input type="text" class="form-control @error('ffbPrice') is-invalid @enderror" id="ffb-price" name="ffbPrice" value="{{ old('ffbPrice', isset($plantation) ? $plantation->ffbPrice : '')}}">
                    </div>
                    <div class="mb-3">
                        <label for="plantation-income" class="form-label">Total Oil Palm Plantation Income (Rp/Month, Rp/Year)</label>
                        <input type="text" class="form-control @error('plantationIncome') is-invalid @enderror" id="plantation-income" name="plantationIncome" value="{{ old('plantationIncome', isset($plantation) ? $plantation->plantationIncome : '')}}">
                    </div>
                </div>
                <div class="d-flex justify-content-start">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>  
        </form>
    </div>
</x-layouts>