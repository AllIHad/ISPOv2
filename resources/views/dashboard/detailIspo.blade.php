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
                            <th class="text-center" style="width: 15%;">Oil Palm Smallholder Name</th>
                            <th class="text-center" style="width: 70%;">ISPO Documents</th>
                            <th class="text-center" style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="5" class="align-baseline text-center">{{ $user->username }}</td>
                            <td>
                                <div>
                                    <strong>Principle 1</strong>
                                    <ul>
                                        <li><strong>Land Certificate</strong> ( pdf )</li>
                                        <li><strong>Spatial Planning Regulations </strong>( pdf )</li>
                                        <li><strong>Dispute Resolution</strong> ( pdf )</li>
                                        <li><strong>Settlement Agreement</strong> ( pdf )</li>
                                        <li><strong>STDB</strong> ( pdf )</li>
                                        <li><strong>Environmental Permit Letter</strong> ( pdf )</li>
                                        <li><strong>Implementation Notes</strong> ( pdf )</li>
                                    </ul>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column">
                                    <strong>Documents</strong>

                                    @if(isset($ispo->sertifikatTanah))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->sertifikatTanah)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm' ) }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->penetapanTataRuang))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->penetapanTataRuang)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm' ) }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->penyelesaianSengketa))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->penyelesaianSengketa)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->salinanPerjanjian))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->salinanPerjanjian)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->stdb))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->stdb)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->suratIzinLingkungan))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->suratIzinLingkungan)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->catatanPelaksanaan))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->catatanPelaksanaan)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                </div>
                            </td>
                        </tr>

                        <!-- Principle 2 -->
                        <tr>
                            <td>
                                <strong>Principle 2</strong>
                                <ul>
                                    <li><strong>Organization In The Form Of A Farmer Group</strong> ( pdf )</li>
                                    <li><strong>The Establishment Of A Farmer Group</strong> ( pdf )</li>
                                    <li><strong>Uses Seeds From Seed Producers Certified</strong> ( pdf )</li>
                                    <li><strong>Report Of The Activities Of The Farmer</strong> ( pdf )</li>
                                    <li><strong>Implements SOP And Work Instructions For Land Clearing Without Burning</strong> ( pdf )</li>
                                    <li><strong>Operational Plan Document</strong> ( pdf )</li>
                                    <li><strong>Record Of Seed Origin</strong> ( pdf )</li>
                                    <li><strong>Implements SOP For Planting According To Good Agriculture Practice</strong> ( pdf )</li>
                                    <li><strong>Records Of Planting Implementation</strong> ( pdf )</li>
                                    <li><strong>Records For Planting On Peatlands</strong>( pdf )</li>
                                    <li><strong>SOP And Work Instructions For Plant Maintenance</strong> ( pdf )</li>
                                    <li><strong>Records of Fertilization And Plant Maintenance Activities</strong> ( pdf )</li>
                                    <li><strong>Implements The Technical Guidelines For Integrated Pest Management</strong> ( pdf )</li>
                                    <li><strong>Pest Control Facilities According To Technical Guidelines</strong> ( pdf )</li>
                                    <li><strong>Technical Guidelines Harvested </strong> ( pdf )</li>
                                    <li><strong>Records Of Harvesting Implementation</strong> ( pdf )</li>
                                    <li><strong>Implements Technical Guidelines For Transporting FFB </strong> ( pdf )</li>
                                </ul>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column">
                                    <strong>Documents</strong>

                                    @if(isset($ispo->suratMemilikiKelambagaan))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->suratMemilikiKelambagaan)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->suratKelompokTani))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->suratKelompokTani)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->sertifikat))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->sertifikat)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->laporanKegiatanPerkebun))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->laporanKegiatanPerkebun)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->sop))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->sop)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->dokumenRencanaKegiatan))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->catatanAsalBenih)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->catatanAsalBenih))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->catatanAsalBenih)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->sopPenanaman))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->sopPenanaman)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->catatanPelaksanaanPenanaman))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->catatanPelaksanaanPenanaman)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->catatanPenanaman))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->catatanPenanaman)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->sopPemeliharaanTanaman))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->sopPemeliharaanTanaman)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->catatanPemupukanTanaman))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->catatanPemupukanTanaman)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->ipm))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->ipm)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->suratPengendalianOPT))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->suratPengendalianOPT)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->acuanTeknisPanen))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->acuanTeknisPanen)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->catatanPelaksanaanPemanenan))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->catatanPelaksanaanPemanenan)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->petunjukTeknis))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->petunjukTeknis)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                </div>
                            </td>

                        </tr>

                        <!-- Principle 3 -->
                        <tr>
                            <td>
                                <div>
                                    <strong>Principle 3</strong>
                                    <ul>
                                        <li><strong>Fire Prevention And Management</strong> ( pdf )</li>
                                        <li><strong>Records Of The Presence Of Wildlife And Plants </strong> ( pdf )</li>
                                        <li><strong>Aware Of The Presence Of Wildlife And Plants </strong> ( pdf )</li>
                                    </ul>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column">
                                    <strong>Documents</strong>

                                    @if(isset($ispo->pencegahanPenanggulanganKebakaran))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->pencegahanPenanggulanganKebakaran)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->keberadaanSatwaTumbuhan))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->keberadaanSatwaTumbuhan)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->keberadaanSatwaTumbuhanKebun))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->keberadaanSatwaTumbuhanKebun)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif
                                </div>
                            </td>
                        </tr>

                        <!-- Principle 4 -->
                        <tr>
                            <td>
                                <div>
                                    <strong>Principle 4</strong>
                                    <ul>
                                        <li><strong>The Price Set By The FBB Price Determination Team</strong> ( pdf )</li>
                                        <li><strong>FFB Price Notes & Purchase Realization</strong> ( pdf )</li>
                                        <li><strong>SOP Information Services</strong> ( pdf )</li>
                                        <li><strong>Information To Shakeholders In Accordance With Applicable Regulation</strong> ( pdf )</li>
                                        <li><strong>Information Services To Stakeholders' Information Request</strong> ( pdf )</li>
                                    </ul>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column">
                                    <strong>Documents</strong>

                                    @if(isset($ispo->informasiHargaTBS))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->informasiHargaTBS)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->catatanHargaTBSRealisasiPembelian))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->catatanHargaTBSRealisasiPembelian)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->sopPelayanan))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->sopPelayanan)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->pemberianInformasiKepadaPemangkuKepentingan))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->pemberianInformasiKepadaPemangkuKepentingan)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif

                                    @if(isset($ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan)}}" class="text-primary">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif
                                </div>
                            </td>
                        </tr>

                        <!-- Principle 5 -->
                        <tr>
                            <td>
                                <div>
                                    <strong>Principle 5</strong>
                                    <ul>
                                        <li><strong>Business Improvement</strong> ( pdf )</li>
                                    </ul>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column">
                                    <strong>Documents</strong>

                                    @if(isset($ispo->perbaikanUsaha))
                                    <div>
                                        <a href="{{('storage/ispo/' . $ispo->perbaikanUsaha)}}" class="text-primary col">Open</a> |
                                        <a href="{{ route('ispoForm') }}" class="text-primary">ReUpload</a>
                                    </div>
                                    @else
                                    <a href="{{ route('ispoForm') }}" class="text-primary">Upload</a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <td class="text-center"><strong>ISPO Document Status</strong></td>
                            <td colspan="2" class="text-center">Applying for ISPO Certificate can now be done</td>
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

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
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
                <!-- Second Chart -->

            </div>
        </div>
    </x-slot:slot>

    <x-slot:script>
        <script>
            let jumlahTidakNull = <?php echo json_encode($jumlahTidakNull) ?>;
            let jumlahNull = <?php echo json_encode($jumlahNull) ?>;
            let validCount = <?php echo json_encode($validCount) ?>;
            let noDocumentCount = <?php echo json_encode($noDocumentCount) ?>;
            let inValidCount = <?php echo json_encode($inValidCount) ?>;

            Highcharts.chart('highCharts1', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Oil Palm Smallholder Uploaded Documents'
                },
                tooltip: {
                    valueSuffix: ' Files'
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
                    name: 'Number Of Files',
                    colorByPoint: true,
                    data: [{
                            name: 'Uploaded Documents',
                            y: jumlahTidakNull
                        },
                        {
                            name: 'Unuploaded Documents',
                            color: 'red',
                            y: jumlahNull
                        },
                    ]
                }]
            });

            Highcharts.chart('highCharts2', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Data Status of Oil Palm Smallholder Based on Validator'
                },
                tooltip: {
                    valueSuffix: ' Files'
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
                    name: 'Number Of Files',
                    colorByPoint: true,
                    data: [{
                            name: 'Documents Are Valid',
                            y: validCount
                        },
                        {
                            name: 'Invalid Documents',
                            color: 'gray',
                            y: inValidCount
                        },
                        {
                            name: "Haven't Filled Out The Document",
                            color: 'red',
                            y: noDocumentCount
                        },
                    ]
                }]
            });
        </script>
    </x-slot:script>
</x-layouts>