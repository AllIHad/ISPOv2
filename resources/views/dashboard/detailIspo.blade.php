<x-layouts>
    <div class="container my-5">
        <h4 class="border-bottom mb-4 pb-3">Data On Oil Palm Smallholders Who Fulfill ISPO Standards</h4>
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="text-center" style="width: 25%;">Oil Palm Smallholder Name</th>
                        <th class="text-center" style="width: 75%;">ISPO Documents</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="5" class="align-baseline text-center">Sumitro Purwasono</td>
                        <td>
                            <div>
                                <strong>Principle 1</strong>
                                <ul>
                                    <li><strong>Land Certificate</strong> ( pdf )
                                        @if($ispo->sertifikatTanah)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sertifikatTanah)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Spatial Planning Regulations </strong>( pdf )
                                        @if($ispo->penetapanTataRuang)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->penetapanTataRuang)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Dispute Resolution</strong> ( pdf )
                                        @if($ispo->penyelesaianSengketa)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->penyelesaianSengketa)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Settlement Agreement</strong> ( pdf )
                                        @if($ispo->salinanPerjanjian)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->salinanPerjanjian)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>STDB</strong> ( pdf )
                                        @if($ispo->stdb)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->stdb)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Environmental Permit Letter</strong> ( pdf )
                                        @if($ispo->suratIzinLingkungan)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->suratIzinLingkungan)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Implementation Notes</strong> ( pdf )
                                        @if($ispo->catatanPelaksanaan)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanPelaksanaan)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <!-- Principle 2 -->
                    <tr>
                        <td>
                            <div>
                                <strong>Principle 2</strong>
                                <ul>
                                    <li><strong>Organization In The Form Of A Farmer Group</strong> ( pdf )
                                        @if($ispo->suratMemilikiKelambagaan)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->suratMemilikiKelambagaan)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>The Establishment Of A Farmer Group</strong> ( pdf )
                                        @if($ispo->suratKelompokTani)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->suratKelompokTani)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Uses Seeds From Seed Producers Certified</strong> ( pdf )
                                        @if($ispo->sertifikat)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sertifikat)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Report Of The Activities Of The Farmer</strong> ( pdf )
                                        @if($ispo->laporanKegiatanPerkebun)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->laporanKegiatanPerkebun)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Implements SOP And Work Instructions For Land Clearing Without Burning</strong> ( pdf )
                                        @if($ispo->sop)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sop)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Operational Plan Document</strong> ( pdf )
                                        @if($ispo->dokumenRencanaKegiatan)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->dokumenRencanaKegiatan)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Record Of Seed Origin</strong> ( pdf )
                                        @if($ispo->catatanAsalBenih)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanAsalBenih)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Implements SOP For Planting According To Good Agriculture Practice</strong> ( pdf )
                                        @if($ispo->sopPenanaman)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sopPenanaman)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Records Of Planting Implementation</strong> ( pdf )
                                        @if($ispo->catatanPelaksanaanPenanaman)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanPelaksanaanPenanaman)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Records For Planting On Peatlands</strong>( pdf )
                                        @if($ispo->catatanPenanaman)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanPenanaman)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>SOP And Work Instructions For Plant Maintenance</strong> ( pdf )
                                        @if($ispo->sopPemeliharaanTanaman)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sopPemeliharaanTanaman)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Records of Fertilization And Plant Maintenance Activities</strong> ( pdf )
                                        @if($ispo->catatanPemupukanTanaman)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanPemupukanTanaman)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Implements The Technical Guidelines For Integrated Pest Management</strong> ( pdf )
                                        @if($ispo->ipm)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->ipm)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Pest Control Facilities According To Technical Guidelines</strong> ( pdf )
                                        @if($ispo->suratPengendalianOPT)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->suratPengendalianOPT)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Technical Guidelines Harvested </strong> ( pdf )
                                        @if($ispo->acuanTeknisPanen)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->acuanTeknisPanen)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Records Of Harvesting Implementation</strong> ( pdf )
                                        @if($ispo->catatanPelaksanaanPemanenan)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanPelaksanaanPemanenan)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Implements Technical Guidelines For Transporting FFB </strong> ( pdf )
                                        @if($ispo->petunjukTeknis)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->petunjukTeknis)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <!-- Principle 3 -->
                    <tr>
                        <td>
                            <div>
                                <strong>Principle 3</strong>
                                <ul>
                                    <li><strong>Fire Prevention And Management</strong> ( pdf )
                                        @if($ispo->pencegahanPenanggulanganKebakaran)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->pencegahanPenanggulanganKebakaran)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Records Of The Presence Of Wildlife And Plants </strong> ( pdf )
                                        @if($ispo->keberadaanSatwaTumbuhan)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->keberadaanSatwaTumbuhan)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Aware Of The Presence Of Wildlife And Plants </strong> ( pdf )
                                        @if($ispo->keberadaanSatwaTumbuhanKebun)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->keberadaanSatwaTumbuhanKebun)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <!-- Principle 4 -->
                    <tr>
                        <td>
                            <div>
                                <strong>Principle 4</strong>
                                <ul>
                                    <li><strong>The Price Set By The FBB Price Determination Team</strong> ( pdf )
                                        @if($ispo->informasiHargaTBS)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->informasiHargaTBS)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>FFB Price Notes & Purchase Realization</strong> ( pdf )
                                        @if($ispo->catatanHargaTBSRealisasiPembelian)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanHargaTBSRealisasiPembelian)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>SOP Information Services</strong> ( pdf )
                                        @if($ispo->sopPelayanan)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sopPelayanan)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Information To Shakeholders In Accordance With Applicable Regulation</strong> ( pdf )
                                        @if($ispo->pemberianInformasiKepadaPemangkuKepentingan)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->pemberianInformasiKepadaPemangkuKepentingan)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                    <li><strong>Information Services To Stakeholders' Information Request</strong> ( pdf )
                                        @if($ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <!-- Principle 5 -->
                    <tr>
                        <td>
                            <div>
                                <strong>Principle 5</strong>
                                <ul>
                                    <li><strong>Business Improvement</strong> ( pdf )
                                        @if($ispo->perbaikanUsaha)
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->perbaikanUsaha)}}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="table-light">
                    <tr>
                        <td class="text-center"><strong>ISPO Document Status</strong></td>
                        <td class="text-center">Applying for ISPO Certificate can now be done</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</x-layouts>