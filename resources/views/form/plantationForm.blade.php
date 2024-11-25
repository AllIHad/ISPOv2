<x-layouts>
    <div class="container my-5">
        <h2 class="border-bottom mb-4 pb-3">Plantation Performance</h2>
        <form action="" method="post">
            @csrf
            <div class="row g-5">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="total-area" class="form-label">Total Oil Palm Plantation Area (ha)</label>
                        <input type="text" class="form-control" id="total-area" name="plantationArea">
                    </div>
                    <div class="mb-3">
                        <label for="mature-plants" class="form-label">Mature Plants (TM) (ha)</label>
                        <input type="text" class="form-control" id="mature-plants" name="maturePlant">
                    </div>
                    <div class="mb-3">
                        <label for="immature-plants" class="form-label">Immature Plants (TBM) (ha)</label>
                        <input type="text" class="form-control" id="immature-plants" name="immaturePlant">
                    </div>
                    <div class="mb-3">
                        <label for="age-producing-plants" class="form-label">Age of Producing Oil Palm Plants (Year)</label>
                        <input type="number" class="form-control" id="age-producing-plants" name="producingOil">
                    </div>
                    <div class="mb-3">
                        <label for="age-immature-plants" class="form-label">Age of Immature Oil Palm Plants (Year)</label>
                        <input type="number" class="form-control" id="age-immature-plants" name="immatureOil">
                    </div>
                    <div class="mb-3">
                        <label for="origin-land" class="form-label">Origin Of Oil Palm Plantation Land (Forest, Rubber, Etc.)</label>
                        <input type="text" class="form-control" id="origin-land" name="">
                    </div>
                    <div class="mb-3">
                        <label for="ownership-status" class="form-label">Ownership Status Of Oil Palm Plantation (Owned, Rented, Etc.)</label>
                        <input type="text" class="form-control" id="ownership-status">
                    </div>
                    <div class="mb-3">
                        <label for="legal-status" class="form-label">Legal Status Of Oil Palm Plantation Land (SHM, SKGR, SKT, Within Forest Area)</label>
                        <input type="text" class="form-control" id="legal-status">
                    </div>
                    <div class="mb-3">
                        <label for="spatial-plan" class="form-label">Plantation Land Has Been Mapped According To Spatial Plan (RT/RW) (In Coordinates)</label>
                        <input type="text" class="form-control" id="spatial-plan">
                    </div>
                    <div class="mb-3">
                        <label for="stdb-doc" class="form-label">STDB Document (Available, In Process, Not Available)</label>
                        <input type="text" class="form-control" id="stdb-doc">
                    </div>
                    <div class="mb-3">
                        <label for="sppl-doc" class="form-label">SPPL Document (Available, In Process, Not Available)</label>
                        <input type="text" class="form-control" id="sppl-doc">
                    </div>
                    <div class="mb-3">
                        <label for="soil-type" class="form-label">Soil Type (Mineral, Peat)</label>
                        <input type="text" class="form-control" id="soil-type">
                    </div>
                    <div class="mb-3">
                        <label for="seedling-type" class="form-label">Type Of Oil Palm Seedlings (Dura, Tenera, Unknown)</label>
                        <input type="text" class="form-control" id="seedling-type">
                    </div>
                    <div class="mb-3">
                        <label for="nitrogen-fertilizer" class="form-label">Nitrogen (N) Fertilizer (Urea, ZA, AN); Application : Once Every 4-6 Months</label>
                        <input type="text" class="form-control" id="nitrogen-fertilizer">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phosphorus-fertilizer" class="form-label">Phosphorus (P) Fertilizer (SP-36, RP, TSP, DAP); Application : Once Every 6-12 Months</label>
                        <input type="text" class="form-control" id="phosphorus-fertilizer">
                    </div>
                    <div class="mb-3">
                        <label for="potassium-fertilizer" class="form-label">Potassium (K) Fertilizer (Kcl, K2SO4); Application : Once Every 4-6 Months</label>
                        <input type="text" class="form-control" id="potassium-fertilizer">
                    </div>
                    <div class="mb-3">
                        <label for="magnesium-fertilizer" class="form-label">Magnesium (Kieserite, Dolomite, Langbeinite); Application : Once Every 4-6 Months</label>
                        <input type="text" class="form-control" id="magnesium-fertilizer">
                    </div>
                    <div class="mb-3">
                        <label for="boron-fertilizer" class="form-label">Boron (B) Sodium Borate; Application : Once Every 6-12 Months</label>
                        <input type="text" class="form-control" id="boron-fertilizer">
                    </div>
                    <div class="mb-3">
                        <label for="copper-fertilizer" class="form-label">Copper (Cu) (CuSO4); Application : Once Every 12 Months</label>
                        <input type="text" class="form-control" id="copper-fertilizer">
                    </div>
                    <div class="mb-3">
                        <label for="disc-clearing" class="form-label">Disc Clearing Per Year (4 Times A Year)</label>
                        <input type="text" class="form-control" id="disc-clearing">
                    </div>
                    <div class="mb-3">
                        <label for="row-clearing" class="form-label">Row Clearing Per Year (4 Times A Year)</label>
                        <input type="text" class="form-control" id="row-clearing">
                    </div>
                    <div class="mb-3">
                        <label for="pruning" class="form-label">Pruning Per Year (2 Times A Year)</label>
                        <input type="text" class="form-control" id="pruning">
                    </div>
                    <div class="mb-3">
                        <label for="harvesting-frequency" class="form-label">Harvesting Frequency (1x Every 15 Days, 1x Every 10 Days, 1x Every 7 Days)</label>
                        <input type="text" class="form-control" id="harvesting-frequency">
                    </div>
                    <div class="mb-3">
                        <label for="ffb-production" class="form-label">Fresh Fruit Bunch (FFB) Production Per Harvest (Kg)</label>
                        <input type="text" class="form-control" id="ffb-production">
                    </div>
                    <div class="mb-3">
                        <label for="ffb-sold" class="form-label">FFB Sold To (Collectors, RAM, Palm Oil Mill)</label>
                        <input type="text" class="form-control" id="ffb-sold">
                    </div>
                    <div class="mb-3">
                        <label for="ffb-price" class="form-label">Latest FFB Selling Price (Rp/Kg)</label>
                        <input type="text" class="form-control" id="ffb-price">
                    </div>
                    <div class="mb-3">
                        <label for="plantation-income" class="form-label">Total Oil Palm Plantation Income (Rp/Month, Rp/Year)</label>
                        <input type="text" class="form-control" id="plantation-income">
                    </div>
                </div>
                <div class="d-flex justify-content-start">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>  
        </form>
    </div>
</x-layouts>