<x-layouts>
    <div class="container my-5">
        <h1 class="border-bottom mb-4 pb-3">Standard ISPO (Permen No. 38 Tahun 2020)</h1>
        <form action="{{ isset($ispo) ? route('editIspo', $ispo->id) : route('createIspo') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if($ispo)
            @method('put')
            @endif
            <!-- Principle 1 -->
            <h3>Principle 1</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Owns Land Certificates, Sale And Purchase Deeds, Girik(Traditional Land Onwership Document), Or Other Valid Ownership Evidence (Format .pdf)</label>
                        <input type="file" class="form-control mb-2  @error('sertifikatTanah') is-invalid @enderror" value="{{( isset($ispo->sertifikatTanah) ? $ispo->sertifikatTanah : '')}}" name="sertifikatTanah" />
                        @if (isset($ispo->sertifikatTanah))
                        <a href="{{('storage/ispo/' . $ispo->sertifikatTanah)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">The Farmer's Land Adheres To The Spatial Planning Regulations</label>
                        <input type="file" class="form-control  mb-2 @error('penetapanTataRuang') is-invalid @enderror" value="{{( isset($ispo) ? $ispo->sertifikatTanah : '')}}" name="penetapanTataRuang" />
                        @if (isset($ispo->penetapanTataRuang))
                        <a href="{{('storage/ispo/' . $ispo->penetapanTataRuang)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Progress Of Dispute Resolution Meetings And Provides Maps Of Disputed Land Locations</label>
                        <input type="file" class="form-control  mb-2 @error('penyelesaianSengketa') is-invalid @enderror" value="{{( isset($ispo) ? $ispo->sertifikatTanah : '')}}" name="penyelesaianSengketa" />
                        @if (isset($ispo->penyelesaianSengketa))
                        <a href="{{('storage/ispo/' . $ispo->penyelesaianSengketa)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Copy Of The Agreed-Upon Settlement Agreement</label>
                        <input type="file" class="form-control mb-2  @error('salinanPerjanjian') is-invalid @enderror" value="{{( isset($ispo) ? $ispo->sertifikatTanah : '')}}" name="salinanPerjanjian" />
                        @if (isset($ispo->salinanPerjanjian))
                        <a href="{{('storage/ispo/' . $ispo->salinanPerjanjian)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Plantation Business Registration Certificate For Cultivation (STDB)</label>
                        <input type="file" class="form-control @error('stdb') is-invalid @enderror" value="{{( isset($ispo) ? $ispo->sertifikatTanah : '')}}" name="stdb" />
                        @if (isset($ispo->stdb))
                        <a href="{{('storage/ispo/' . $ispo->stdb)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has an Environmental Permiot According To SPPL</label>
                        <input type="file" class="form-control mb-2 @error('suratIzinLingkungan') is-invalid @enderror" value="{{( isset($ispo) ? $ispo->sertifikatTanah : '')}}" name="suratIzinLingkungan" />
                        @if (isset($ispo->suratIzinLingkungan))
                        <a href="{{('storage/ispo/' . $ispo->suratIzinLingkungan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of SPPL Implementation</label>
                        <input type="file" class="form-control mb-2 @error('catatanPelaksanaan') is-invalid @enderror" value="{{( isset($ispo) ? $ispo->sertifikatTanah : '')}}" name="catatanPelaksanaan" />
                        @if (isset($ispo->catatanPelaksanaan))
                        <a href="{{('storage/ispo/' . $ispo->catatanPelaksanaan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Principle 2 -->
            <h3>Principle 2</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">The Farmer Has An Organization In The Form Of A Farmer Group Or Cooperative (Fromat .pdf)</label>
                        <input type="file" class="form-control mb-2 @error('suratMemilikiKelambagaan') is-invalid @enderror" name="suratMemilikiKelambagaan" />
                        @if (isset($ispo->suratMemilikiKelambagaan))
                        <a href="{{('storage/ispo/' . $ispo->suratMemilikiKelambagaan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Document Of The Establishment Of A Farmer Group Or Cooperative Recognized By An Authorized Official</label>
                        <input type="file" class="form-control mb-2 @error('suratKelompokTani') is-invalid @enderror" name="suratKelompokTani" />
                        @if (isset($ispo->suratKelompokTani))
                        <a href="{{('storage/ispo/' . $ispo->suratKelompokTani)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Uses Seeds From Seed Produ cers Certified By The Authorized Institution And Recognized By The Mitistry Of Agriculture</label>
                        <input type="file" class="form-control mb-2 @error('sertifikat') is-invalid @enderror" name="sertifikat" />
                        @if (isset($ispo->sertifikat))
                        <a href="{{('storage/ispo/' . $ispo->sertifikat)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Report Of The Activities Of The Farmer, Farmer Group, And/Or Cooperative</label>
                        <input type="file" class="form-control mb-2 @error('laporanKegiatanPerkebun') is-invalid @enderror" name="laporanKegiatanPerkebun" />
                        @if (isset($ispo->laporanKegiatanPerkebun))
                        <a href="{{('storage/ispo/' . $ispo->laporanKegiatanPerkebun)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements SOP And Work Instructions For Land Clearing Without Burning</label>
                        <input type="file" class="form-control mb-2 @error('sop') is-invalid @enderror" name="sop" />
                        @if (isset($ispo->sop))
                        <a href="{{('storage/ispo/' . $ispo->sop)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has An Operational Plan Document For The Farmer, Farmer Group, And/Or Cooperative</label>
                        <input type="file" class="form-control mb-2 @error('dokumenRencanaKegiatan') is-invalid @enderror" name="dokumenRencanaKegiatan" />
                        @if (isset($ispo->dokumenRencanaKegiatan))
                        <a href="{{('storage/ispo/' . $ispo->dokumenRencanaKegiatan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Record Of Seed Origin</label>
                        <input type="file" class="form-control mb-2 @error('catatanAsalBenih') is-invalid @enderror" name="catatanAsalBenih" />
                        @if (isset($ispo->catatanAsalBenih))
                        <a href="{{('storage/ispo/' . $ispo->catatanAsalBenih)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements SOP For Planting According To Good Agriculture Practice (GAP)</label>
                        <input type="file" class="form-control mb-2 @error('sopPenanaman') is-invalid @enderror" name="sopPenanaman" />
                        @if (isset($ispo->sopPenanaman))
                        <a href="{{('storage/ispo/' . $ispo->sopPenanaman)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of Planting Implementation</label>
                        <input type="file" class="form-control mb-2 @error('catatanPelaksanaanPenanaman') is-invalid @enderror" name="catatanPelaksanaanPenanaman" />
                        @if (isset($ispo->catatanPelaksanaanPenanaman))
                        <a href="{{('storage/ispo/' . $ispo->catatanPelaksanaanPenanaman)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Has Records For Planting On Peatlands That Comply With Applicable Regulations</label>
                        <input type="file" class="form-control mb-2 @error('catatanPenanaman') is-invalid @enderror" name="catatanPenanaman" />
                        @if (isset($ispo->catatanPenanaman))
                        <a href="{{('storage/ispo/' . $ispo->catatanPenanaman)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has SOP And Work Instructions For Plant Maintenance</label>
                        <input type="file" class="form-control mb-2 @error('sopPemeliharaanTanaman') is-invalid @enderror" name="sopPemeliharaanTanaman" />
                        @if (isset($ispo->sopPemeliharaanTanaman))
                        <a href="{{('storage/ispo/' . $ispo->sopPemeliharaanTanaman)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records of Fertilization And Plant Maintenance Activities</label>
                        <input type="file" class="form-control mb-2 @error('catatanPemupukanTanaman') is-invalid @enderror" name="catatanPemupukanTanaman" />
                        @if (isset($ispo->catatanPemupukanTanaman))
                        <a href="{{('storage/ispo/' . $ispo->catatanPemupukanTanaman)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements The Technical Guidelines For Integrated Pest Management (IPM)</label>
                        <input type="file" class="form-control mb-2 @error('ipm') is-invalid @enderror" name="ipm" />
                        @if (isset($ispo->ipm))
                        <a href="{{('storage/ispo/' . $ispo->ipm)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Pest Control Facilities According To Technical Guidelines And Has Trained Pest Control Teams</label>
                        <input type="file" class="form-control mb-2 @error('suratPengendalianOPT') is-invalid @enderror" name="suratPengendalianOPT" />
                        @if (isset($ispo->suratPengendalianOPT))
                        <a href="{{('storage/ispo/' . $ispo->suratPengendalianOPT)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Technical Guidelines That Specify That Harvested Fruit Is Ripe And Harvested At The Appropriate Time</label>
                        <input type="file" class="form-control mb-2 @error('acuanTeknisPanen') is-invalid @enderror" name="acuanTeknisPanen" />
                        @if (isset($ispo->acuanTeknisPanen))
                        <a href="{{('storage/ispo/' . $ispo->acuanTeknisPanen)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of Harvesting Implementation*</label>
                        <input type="file" class="form-control mb-2 @error('catatanPelaksanaanPemanenan') is-invalid @enderror" name="catatanPelaksanaanPemanenan" />
                        @if (isset($ispo->catatanPelaksanaanPemanenan))
                        <a href="{{('storage/ispo/' . $ispo->catatanPelaksanaanPemanenan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements Technical Guidelines For Transporting FFB (Fresh Fruit Bunches)*</label>
                        <input type="file" class="form-control mb-2 @error('petunjukTeknis') is-invalid @enderror" name="petunjukTeknis" />
                        @if (isset($ispo->petunjukTeknis))
                        <a href="{{('storage/ispo/' . $ispo->petunjukTeknis)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                </div>
            </div>


            <!-- Principle 3 -->
            <h3>Principle 3</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Implements Fire Prevention And Control Measures Together With Nearby Residents And Relevant Authorities, In Accordance With Fire Prevention And Control Guidelines</label>
                        <input type="file" class="form-control mb-2 @error('pencegahanPenanggulanganKebakaran') is-invalid @enderror" name="pencegahanPenanggulanganKebakaran" />
                        @if (isset($ispo->pencegahanPenanggulanganKebakaran))
                        <a href="{{('storage/ispo/' . $ispo->pencegahanPenanggulanganKebakaran)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Has Records Of The Presence Of Wildlife And Plants In And Around The Plantation</label>
                        <input type="file" class="form-control mb-2 @error('keberadaanSatwaTumbuhan') is-invalid @enderror" name="keberadaanSatwaTumbuhan" />
                        @if (isset($ispo->keberadaanSatwaTumbuhan))
                        <a href="{{('storage/ispo/' . $ispo->keberadaanSatwaTumbuhan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Aware Of The Presence Of Wildlife And Plants In And Around The Plantation Area Before And After The Establishment Of The Plantation</label>
                        <input type="file" class="form-control mb-2 @error('keberadaanSatwaTumbuhanKebun') is-invalid @enderror" name="keberadaanSatwaTumbuhanKebun" />
                        @if (isset($ispo->keberadaanSatwaTumbuhanKebun))
                        <a href="{{('storage/ispo/' . $ispo->keberadaanSatwaTumbuhanKebun)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                </div>

            </div>

            <!-- Principle 4 -->
            <h3>Principle 4</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Has Information On FFB Prices Based On The Price Set By The FFB Price Determination Team For Each Sales Destination</label>
                        <input type="file" class="form-control mb-2 @error('informasiHargaTBS') is-invalid @enderror" name="informasiHargaTBS" />
                        @if (isset($ispo->informasiHargaTBS))
                        <a href="{{('storage/ispo/' . $ispo->informasiHargaTBS)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of FFB Prices And Purchase Realizations By Companies/Mills, And A Source Of FFB Price Information That Is Regularly Monitored By Farmers, Farmer Groups, And/Or Cooperatives</label>
                        <input type="file" class="form-control mb-2 @error('catatanHargaTBSRealisasiPembelian') is-invalid @enderror" name="catatanHargaTBSRealisasiPembelian" />
                        @if (isset($ispo->catatanHargaTBSRealisasiPembelian))
                        <a href="{{('storage/ispo/' . $ispo->catatanHargaTBSRealisasiPembelian)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">SOP For Information Services</label>
                        <input type="file" class="form-control mb-2 @error('sopPelayanan') is-invalid @enderror" name="sopPelayanan" />
                        @if (isset($ispo->sopPelayanan))
                        <a href="{{('storage/ispo/' . $ispo->sopPelayanan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Has Documents For Providing Information To Stakeholders In Accordance With Applicable Regulations</label>
                        <input type="file" class="form-control mb-2 @error('pemberianInformasiKepadaPemangkuKepentingan') is-invalid @enderror" name="pemberianInformasiKepadaPemangkuKepentingan" />
                        @if (isset($ispo->pemberianInformasiKepadaPemangkuKepentingan))
                        <a href="{{('storage/ispo/' . $ispo->pemberianInformasiKepadaPemangkuKepentingan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Documents Of Responses Or Information Services To Stakeholders' Information Requests</label>
                        <input type="file" class="form-control mb-2 @error('tanggapanPermintaanInformasiDariPemangkuKepentingan') is-invalid @enderror" name="tanggapanPermintaanInformasiDariPemangkuKepentingan" />
                        @if (isset($ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan))
                        <a href="{{('storage/ispo/' . $ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Principle 5 -->
            <h3>Principle 5</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Documents Of The Results Of Sustainable Business Improvements/Enhancements</label>
                        <input type="file" class="form-control mb-2 @error('perbaikanUsaha') is-invalid @enderror" name="perbaikanUsaha" />
                        @if (isset($ispo->perbaikanUsaha))
                        <a href="{{('storage/ispo/' . $ispo->perbaikanUsaha)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start mt-4">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>
</x-layouts>