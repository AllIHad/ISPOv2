<x-layouts>
    <div class="container my-5">
        <h1 class="border-bottom mb-4 pb-3">Standard ISPO (Permen No. 38 Tahun 2020)</h1>
        <form action="{{ route('createIspo') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Principle 1 -->
            <h3>Principle 1</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Owns Land Certificates, Sale And Purchase Deeds, Girik(Traditional Land Onwership Document), Or Other Valid Ownership Evidence (Format .pdf)</label>
                        <input type="file" class="form-control @error('sertifikatTanah') is-invalid @enderror" name="sertifikatTanah" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">The Farmer's Land Adheres To The Spatial Planning Regulations</label>
                        <input type="file" class="form-control @error('penetapanTataRuang') is-invalid @enderror" name="penetapanTataRuang" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Progress Of Dispute Resolution Meetings And Provides Maps Of Disputed Land Locations</label>
                        <input type="file" class="form-control @error('penyelesaianSengketa') is-invalid @enderror" name="penyelesaianSengketa" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Copy Of The Agreed-Upon Settlement Agreement</label>
                        <input type="file" class="form-control @error('salinanPerjanjian') is-invalid @enderror" name="salinanPerjanjian" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Plantation Business Registration Certificate For Cultivation (STDB)</label>
                        <input type="file" class="form-control @error('stdb') is-invalid @enderror" name="stdb" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has an Environmental Permiot According To SPPL</label>
                        <input type="file" class="form-control @error('suratIzinLingkungan') is-invalid @enderror" name="suratIzinLingkungan" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of SPPL Implementation</label>
                        <input type="file" class="form-control @error('catatanPelaksanaan') is-invalid @enderror" name="catatanPelaksanaan" />
                    </div>
                </div>
            </div>

            <!-- Principle 2 -->
            <h3>Principle 2</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">The Farmer Has An Organization In The Form Of A Farmer Group Or Cooperative (Fromat .pdf)</label>
                        <input type="file" class="form-control @error('suratMemilikiKelambagaan') is-invalid @enderror" name="suratMemilikiKelambagaan" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Document Of The Establishment Of A Farmer Group Or Cooperative Recognized By An Authorized Official</label>
                        <input type="file" class="form-control @error('suratKelompokTani') is-invalid @enderror" name="suratKelompokTani" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Uses Seeds From Seed Produ cers Certified By The Authorized Institution And Recognized By The Mitistry Of Agriculture</label>
                        <input type="file" class="form-control @error('sertifikat') is-invalid @enderror" name="sertifikat" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Report Of The Activities Of The Farmer, Farmer Group, And/Or Cooperative</label>
                        <input type="file" class="form-control @error('laporanKegiatanPerkebun') is-invalid @enderror" name="laporanKegiatanPerkebun" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements SOP And Work Instructions For Land Clearing Without Burning</label>
                        <input type="file" class="form-control @error('sop') is-invalid @enderror" name="sop" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has An Operational Plan Document For The Farmer, Farmer Group, And/Or Cooperative</label>
                        <input type="file" class="form-control @error('dokumenRencanaKegiatan') is-invalid @enderror" name="dokumenRencanaKegiatan" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Record Of Seed Origin</label>
                        <input type="file" class="form-control @error('catatanAsalBenih') is-invalid @enderror" name="catatanAsalBenih" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements SOP For Planting According To Good Agriculture Practice (GAP)</label>
                        <input type="file" class="form-control @error('sopPenanaman') is-invalid @enderror" name="sopPenanaman" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of Planting Implementation</label>
                        <input type="file" class="form-control @error('catatanPelaksanaanPenanaman') is-invalid @enderror" name="catatanPelaksanaanPenanaman" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Has Records For Planting On Peatlands That Comply With Applicable Regulations</label>
                        <input type="file" class="form-control @error('catatanPenanaman') is-invalid @enderror" name="catatanPenanaman" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has SOP And Work Instructions For Plant Maintenance</label>
                        <input type="file" class="form-control @error('sopPemeliharaanTanaman') is-invalid @enderror" name="sopPemeliharaanTanaman" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records of Fertilization And Plant Maintenance Activities</label>
                        <input type="file" class="form-control @error('catatanPemupukanTanaman') is-invalid @enderror" name="catatanPemupukanTanaman" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements The Technical Guidelines For Integrated Pest Management (IPM)</label>
                        <input type="file" class="form-control @error('ipm') is-invalid @enderror" name="ipm" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Pest Control Facilities According To Technical Guidelines And Has Trained Pest Control Teams</label>
                        <input type="file" class="form-control @error('suratPengendalianOPT') is-invalid @enderror" name="suratPengendalianOPT" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Technical Guidelines That Specify That Harvested Fruit Is Ripe And Harvested At The Appropriate Time</label>
                        <input type="file" class="form-control @error('acuanTeknisPanen') is-invalid @enderror" name="acuanTeknisPanen" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of Harvesting Implementation*</label>
                        <input type="file" class="form-control @error('catatanPelaksanaanPemanenan') is-invalid @enderror" name="catatanPelaksanaanPemanenan" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements Technical Guidelines For Transporting FFB (Fresh Fruit Bunches)*</label>
                        <input type="file" class="form-control @error('petunjukTeknis') is-invalid @enderror" name="petunjukTeknis" />
                    </div>
                </div>
            </div>


            <!-- Principle 3 -->
            <h3>Principle 3</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Implements Fire Prevention And Control Measures Together With Nearby Residents And Relevant Authorities, In Accordance With Fire Prevention And Control Guidelines</label>
                        <input type="file" class="form-control @error('pencegahanPenanggulanganKebakaran') is-invalid @enderror" name="pencegahanPenanggulanganKebakaran" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Has Records Of The Presence Of Wildlife And Plants In And Around The Plantation</label>
                        <input type="file" class="form-control @error('keberadaanSatwaTumbuhan') is-invalid @enderror" name="keberadaanSatwaTumbuhan" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Aware Of The Presence Of Wildlife And Plants In And Around The Plantation Area Before And After The Establishment Of The Plantation</label>
                        <input type="file" class="form-control @error('keberadaanSatwaTumbuhanKebun') is-invalid @enderror" name="keberadaanSatwaTumbuhanKebun" />
                    </div>
                </div>

            </div>

            <!-- Principle 4 -->
            <h3>Principle 4</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Has Information On FFB Prices Based On The Price Set By The FFB Price Determination Team For Each Sales Destination</label>
                        <input type="file" class="form-control @error('informasiHargaTBS') is-invalid @enderror" name="informasiHargaTBS" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of FFB Prices And Purchase Realizations By Companies/Mills, And A Source Of FFB Price Information That Is Regularly Monitored By Farmers, Farmer Groups, And/Or Cooperatives</label>
                        <input type="file" class="form-control @error('catatanHargaTBSRealisasiPembelian') is-invalid @enderror" name="catatanHargaTBSRealisasiPembelian" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">SOP For Information Services</label>
                        <input type="file" class="form-control @error('sopPelayanan') is-invalid @enderror" name="sopPelayanan" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Has Documents For Providing Information To Stakeholders In Accordance With Applicable Regulations</label>
                        <input type="file" class="form-control @error('pemberianInformasiKepadaPemangkuKepentingan') is-invalid @enderror" name="pemberianInformasiKepadaPemangkuKepentingan" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Documents Of Responses Or Information Services To Stakeholders' Information Requests</label>
                        <input type="file" class="form-control @error('tanggapanPermintaanInformasiDariPemangkuKepentingan') is-invalid @enderror" name="tanggapanPermintaanInformasiDariPemangkuKepentingan" />
                    </div>
                </div>
            </div>

            <!-- Principle 5 -->
            <h3>Principle 5</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Documents Of The Results Of Sustainable Business Improvements/Enhancements</label>
                        <input type="file" class="form-control @error('perbaikanUsaha') is-invalid @enderror" name="perbaikanUsaha" />
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start mt-4">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>
</x-layouts>