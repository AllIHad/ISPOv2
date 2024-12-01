<x-layouts>
    <x-slot:head>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    </x-slot:head>

    <x-slot:slot>
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
                                            @if(isset($ispo->sertifikatTanah))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sertifikatTanah)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Spatial Planning Regulations </strong>( pdf )
                                            @if(isset($ispo->penetapanTataRuang))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->penetapanTataRuang)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Dispute Resolution</strong> ( pdf )
                                            @if(isset($ispo->penyelesaianSengketa))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->penyelesaianSengketa)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Settlement Agreement</strong> ( pdf )
                                            @if(isset($ispo->salinanPerjanjian))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->salinanPerjanjian)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>STDB</strong> ( pdf )
                                            @if(isset($ispo->stdb))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->stdb)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Environmental Permit Letter</strong> ( pdf )
                                            @if(isset($ispo->suratIzinLingkungan))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->suratIzinLingkungan)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Implementation Notes</strong> ( pdf )
                                            @if(isset($ispo->catatanPelaksanaan))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanPelaksanaan)}}" class="badge bg-dark px-3 py-2">Open</a></p>
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
                                            @if(isset($ispo->suratMemilikiKelambagaan))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->suratMemilikiKelambagaan)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>The Establishment Of A Farmer Group</strong> ( pdf )
                                            @if(isset($ispo->suratKelompokTani))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->suratKelompokTani)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Uses Seeds From Seed Producers Certified</strong> ( pdf )
                                            @if(isset($ispo->sertifikat))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sertifikat)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Report Of The Activities Of The Farmer</strong> ( pdf )
                                            @if(isset($ispo->laporanKegiatanPerkebun))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->laporanKegiatanPerkebun)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Implements SOP And Work Instructions For Land Clearing Without Burning</strong> ( pdf )
                                            @if(isset($ispo->sop))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sop)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Operational Plan Document</strong> ( pdf )
                                            @if(isset($ispo->dokumenRencanaKegiatan))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->dokumenRencanaKegiatan)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Record Of Seed Origin</strong> ( pdf )
                                            @if(isset($ispo->catatanAsalBenih))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanAsalBenih)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Implements SOP For Planting According To Good Agriculture Practice</strong> ( pdf )
                                            @if(isset($ispo->sopPenanaman))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sopPenanaman)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Records Of Planting Implementation</strong> ( pdf )
                                            @if(isset($ispo->catatanPelaksanaanPenanaman))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanPelaksanaanPenanaman)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Records For Planting On Peatlands</strong>( pdf )
                                            @if(isset($ispo->catatanPenanaman))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanPenanaman)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>SOP And Work Instructions For Plant Maintenance</strong> ( pdf )
                                            @if(isset($ispo->sopPemeliharaanTanaman))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sopPemeliharaanTanaman)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Records of Fertilization And Plant Maintenance Activities</strong> ( pdf )
                                            @if(isset($ispo->catatanPemupukanTanaman))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanPemupukanTanaman)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Implements The Technical Guidelines For Integrated Pest Management</strong> ( pdf )
                                            @if(isset($ispo->ipm))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->ipm)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Pest Control Facilities According To Technical Guidelines</strong> ( pdf )
                                            @if(isset($ispo->suratPengendalianOPT))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->suratPengendalianOPT)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Technical Guidelines Harvested </strong> ( pdf )
                                            @if(isset($ispo->acuanTeknisPanen))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->acuanTeknisPanen)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Records Of Harvesting Implementation</strong> ( pdf )
                                            @if(isset($ispo->catatanPelaksanaanPemanenan))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanPelaksanaanPemanenan)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Implements Technical Guidelines For Transporting FFB </strong> ( pdf )
                                            @if(isset($ispo->petunjukTeknis))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->petunjukTeknis)}}" class="badge bg-dark px-3 py-2">Open</a></p>
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
                                            @if(isset($ispo->pencegahanPenanggulanganKebakaran))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->pencegahanPenanggulanganKebakaran)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Records Of The Presence Of Wildlife And Plants </strong> ( pdf )
                                            @if(isset($ispo->keberadaanSatwaTumbuhan))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->keberadaanSatwaTumbuhan)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Aware Of The Presence Of Wildlife And Plants </strong> ( pdf )
                                            @if(isset($ispo->keberadaanSatwaTumbuhanKebun))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->keberadaanSatwaTumbuhanKebun)}}" class="badge bg-dark px-3 py-2">Open</a></p>
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
                                            @if(isset($ispo->informasiHargaTBS))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->informasiHargaTBS)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>FFB Price Notes & Purchase Realization</strong> ( pdf )
                                            @if(isset($ispo->catatanHargaTBSRealisasiPembelian))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->catatanHargaTBSRealisasiPembelian)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>SOP Information Services</strong> ( pdf )
                                            @if(isset($ispo->sopPelayanan))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->sopPelayanan)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Information To Shakeholders In Accordance With Applicable Regulation</strong> ( pdf )
                                            @if(isset($ispo->pemberianInformasiKepadaPemangkuKepentingan))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->pemberianInformasiKepadaPemangkuKepentingan)}}" class="badge bg-dark px-3 py-2">Open</a></p>
                                            @endif
                                        </li>
                                        <li><strong>Information Services To Stakeholders' Information Request</strong> ( pdf )
                                            @if(isset($ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan)}}" class="badge bg-dark px-3 py-2">Open</a></p>
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
                                            @if(isset($ispo->perbaikanUsaha))
                                            <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{('storage/ispo/' . $ispo->perbaikanUsaha)}}" class="badge bg-dark px-3 py-2">Open</a></p>
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

            <div class="p-3 mt-2 mb-4 bg-light text-dark d-flex justify-content-center rounded">
                <h4>Percentage of ISPO Oil Palm Smallholder Data</h4>
            </div>
            <div class="row">
                <!-- First Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Oil Palm Smallholder Uploaded Documents</h5>
                            <figure class="highcharts-figure">
                                <div id="highCharts1"></div>
                                <p class="highcharts-description">
                                    Pie charts are very popular for showing a compact overview of a
                                    composition or comparison. While they can be harder to read than
                                    column charts, they remain a popular choice for small datasets.
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- Second Chart -->

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Oil Palm Smallholder Uploaded Documents</h5>
                            <figure class="highcharts-figure">
                                <div id="highCharts2"></div>
                                <p class="highcharts-description">
                                    Pie charts are very popular for showing a compact overview of a
                                    composition or comparison. While they can be harder to read than
                                    column charts, they remain a popular choice for small datasets.
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:slot>

    <x-slot:script>
        <script>
            Highcharts.chart('highCharts1', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Egg Yolk Composition'
                },
                tooltip: {
                    valueSuffix: '%'
                },
                subtitle: {
                    text: 'Source:<a href="https://www.mdpi.com/2072-6643/11/3/684/htm" target="_default">MDPI</a>'
                },
                plotOptions: {
                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: [{
                            enabled: true,
                            distance: 20
                        }, {
                            enabled: true,
                            distance: -40,
                            format: '{point.percentage:.1f}%',
                            style: {
                                fontSize: '1.2em',
                                textOutline: 'none',
                                opacity: 0.7
                            },
                            filter: {
                                operator: '>',
                                property: 'percentage',
                                value: 10
                            }
                        }]
                    }
                },
                series: [{
                    name: 'Percentage',
                    colorByPoint: true,
                    data: [{
                            name: 'Water',
                            y: 55.02
                        },
                        {
                            name: 'Fat',
                            sliced: true,
                            selected: true,
                            y: 26.71
                        },
                        {
                            name: 'Carbohydrates',
                            y: 1.09
                        },
                        {
                            name: 'Protein',
                            y: 15.5
                        },
                        {
                            name: 'Ash',
                            y: 1.68
                        }
                    ]
                }]
            });

            Highcharts.chart('highCharts2', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Egg Yolk Composition'
                },
                tooltip: {
                    valueSuffix: '%'
                },
                subtitle: {
                    text: 'Source:<a href="https://www.mdpi.com/2072-6643/11/3/684/htm" target="_default">MDPI</a>'
                },
                plotOptions: {
                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: [{
                            enabled: true,
                            distance: 20
                        }, {
                            enabled: true,
                            distance: -40,
                            format: '{point.percentage:.1f}%',
                            style: {
                                fontSize: '1.2em',
                                textOutline: 'none',
                                opacity: 0.7
                            },
                            filter: {
                                operator: '>',
                                property: 'percentage',
                                value: 10
                            }
                        }]
                    }
                },
                series: [{
                    name: 'Percentage',
                    colorByPoint: true,
                    data: [{
                            name: 'Water',
                            y: 55.02
                        },
                        {
                            name: 'Fat',
                            sliced: true,
                            selected: true,
                            y: 26.71
                        },
                        {
                            name: 'Carbohydrates',
                            y: 1.09
                        },
                        {
                            name: 'Protein',
                            y: 15.5
                        },
                        {
                            name: 'Ash',
                            y: 1.68
                        }
                    ]
                }]
            });
        </script>
    </x-slot:script>
</x-layouts>