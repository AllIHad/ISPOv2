<x-layouts>
    <div class="container my-5">
        <h1 class="border-bottom mb-4 pb-3">Standard ISPO (Permen No. 38 Tahun 2020)</h1>
        <form action="{{ isset($validCheck) ? route('editValidate', $validCheck->userID) : route('validate', $ispo->userID) }}" method="post">
            @csrf
            @if($validCheck)
            @method('put')
            @endif
            <!-- Principle 1 -->
            <h3>Principle 1</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">1. Owns Land Certificates, Sale And Purchase Deeds, Girik(Traditional Land Onwership Document), Or Other Valid Ownership Evidence (Format .pdf)</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->sertifikatTanah))
                            <a href="{{('storage/ispo/' . $ispo->sertifikatTanah)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file1" style="width: auto;">
                                <option value="{{( isset($validCheck->file1) ? $validCheck->file1 : 'No Document')}}" selected>{{( isset($validCheck->file1) ? $validCheck->file1 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">2. The Farmer's Land Adheres To The Spatial Planning Regulations</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->penetapanTataRuang))
                            <a href="{{('storage/ispo/' . $ispo->penetapanTataRuang)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file2" style="width: auto;">
                                <option value="{{( isset($validCheck->file2) ? $validCheck->file2 : 'No Document')}}" selected>{{( isset($validCheck->file2) ? $validCheck->file2 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">3. Has Progress Of Dispute Resolution Meetings And Provides Maps Of Disputed Land Locations</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->penyelesaianSengketa))
                            <a href="{{('storage/ispo/' . $ispo->penyelesaianSengketa)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file3" style="width: auto;">
                                <option value="{{( isset($validCheck->file3) ? $validCheck->file3 : 'No Document')}}" selected >{{( isset($validCheck->file3) ? $validCheck->file3 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">4. Has A Copy Of The Agreed-Upon Settlement Agreement</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->salinanPerjanjian))
                            <a href="{{('storage/ispo/' . $ispo->salinanPerjanjian)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file4" style="width: auto;">
                                <option value="{{( isset($validCheck->file4) ? $validCheck->file4 : 'No Document')}}" selected>{{( isset($validCheck->file4) ? $validCheck->file4 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">5. Plantation Business Registration Certificate For Cultivation (STDB)</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->stdb))
                            <a href="{{('storage/ispo/' . $ispo->stdb)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file5" style="width: auto;">
                                <option value="{{( isset($validCheck->file5) ? $validCheck->file5 : 'No Document')}}" selected>{{( isset($validCheck->file5) ? $validCheck->file5 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">6. Has an Environmental Permiot According To SPPL</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->suratIzinLingkungan))
                            <a href="{{('storage/ispo/' . $ispo->suratIzinLingkungan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file6" style="width: auto;">
                                <option value="{{( isset($validCheck->file6) ? $validCheck->file6 : 'No Document')}}" selected>{{( isset($validCheck->file6) ? $validCheck->file6 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">7. Has Records Of SPPL Implementation</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->catatanPelaksanaan))
                            <a href="{{('storage/ispo/' . $ispo->catatanPelaksanaan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file7" style="width: auto;">
                                <option value="{{( isset($validCheck->file7) ? $validCheck->file7 : 'No Document')}}" selected>{{( isset($validCheck->file7) ? $validCheck->file7 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Principle 2 -->
            <h3>Principle 2</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">8. The Farmer Has An Organization In The Form Of A Farmer Group Or Cooperative (Fromat .pdf)</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->suratMemilikiKelambagaan))
                            <a href="{{('storage/ispo/' . $ispo->suratMemilikiKelambagaan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file8" style="width: auto;">
                                <option value="{{( isset($validCheck->file8) ? $validCheck->file8 : 'No Document')}}" selected>{{( isset($validCheck->file8) ? $validCheck->file8 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">9. Has A Document Of The Establishment Of A Farmer Group Or Cooperative Recognized By An Authorized Official</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->suratKelompokTani))
                            <a href="{{('storage/ispo/' . $ispo->suratKelompokTani)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file9" style="width: auto;">
                                <option value="{{( isset($validCheck->file9) ? $validCheck->file9 : 'No Document')}}" selected>{{( isset($validCheck->file9) ? $validCheck->file9 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">1d0. Uses Seeds From Seed Produ cers Certified By The Authorized Institution And Recognized By The Mitistry Of Agriculture</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->sertifikat))
                            <a href="{{('storage/ispo/' . $ispo->sertifikat)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file10" style="width: auto;">
                                <option value="{{( isset($validCheck->file10) ? $validCheck->file10 : 'No Document')}}" selected>{{( isset($validCheck->file10) ? $validCheck->file10 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">11. Has A Report Of The Activities Of The Farmer, Farmer Group, And/Or Cooperative</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->laporanKegiatanPerkebun))
                            <a href="{{('storage/ispo/' . $ispo->laporanKegiatanPerkebun)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file11" style="width: auto;">
                                <option value="{{( isset($validCheck->file11) ? $validCheck->file11 : 'No Document')}}" option selected>{{( isset($validCheck->file11) ? $validCheck->file11 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">12. Has And Implements SOP And Work Instructions For Land Clearing Without Burning</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->sop))
                            <a href="{{('storage/ispo/' . $ispo->sop)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file12" style="width: auto;">
                                <option value="{{( isset($validCheck->file12) ? $validCheck->file12 : 'No Document')}}" selected>{{( isset($validCheck->file12) ? $validCheck->file12 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">13. Has An Operational Plan Document For The Farmer, Farmer Group, And/Or Cooperative</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->dokumenRencanaKegiatan))
                            <a href="{{('storage/ispo/' . $ispo->dokumenRencanaKegiatan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file13" style="width: auto;">
                                <option value="{{( isset($validCheck->file13) ? $validCheck->file13 : 'No Document')}}" selected>{{( isset($validCheck->file13) ? $validCheck->file13 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">14. Has A Record Of Seed Origin</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->catatanAsalBenih))
                            <a href="{{('storage/ispo/' . $ispo->catatanAsalBenih)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file14" style="width: auto;">
                                <option value="{{( isset($validCheck->file14) ? $validCheck->file14 : 'No Document')}}" selected>{{( isset($validCheck->file14) ? $validCheck->file14 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">15. Has And Implements SOP For Planting According To Good Agriculture Practice (GAP)</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->sopPenanaman))
                            <a href="{{('storage/ispo/' . $ispo->sopPenanaman)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file15" style="width: auto;">
                                <option value="{{( isset($validCheck->file15) ? $validCheck->file15 : 'No Document')}}" selected>{{( isset($validCheck->file15) ? $validCheck->file15 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">16. Has Records Of Planting Implementation</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->catatanPelaksanaanPenanaman))
                            <a href="{{('storage/ispo/' . $ispo->catatanPelaksanaanPenanaman)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file16" style="width: auto;">
                                <option value="{{( isset($validCheck->file16) ? $validCheck->file16 : 'No Document')}}" selected>{{( isset($validCheck->file16) ? $validCheck->file16 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">17. Has Records For Planting On Peatlands That Comply With Applicable Regulations</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->catatanPenanaman))
                            <a href="{{('storage/ispo/' . $ispo->catatanPenanaman)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file17" style="width: auto;">
                                <option value="{{( isset($validCheck->file17) ? $validCheck->file17 : 'No Document')}}" selected>{{( isset($validCheck->file17) ? $validCheck->file17 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">18. Has SOP And Work Instructions For Plant Maintenance</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->sopPemeliharaanTanaman))
                            <a href="{{('storage/ispo/' . $ispo->sopPemeliharaanTanaman)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file18" style="width: auto;">
                                <option value="{{( isset($validCheck->file18) ? $validCheck->file18 : 'No Document')}}" selected>{{( isset($validCheck->file18) ? $validCheck->file18 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">19. Has Records of Fertilization And Plant Maintenance Activities</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->catatanPemupukanTanaman))
                            <a href="{{('storage/ispo/' . $ispo->catatanPemupukanTanaman)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file19" style="width: auto;">
                                <option value="{{( isset($validCheck->file19) ? $validCheck->file19 : 'No Document')}}" selected>{{( isset($validCheck->file19) ? $validCheck->file19 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">20. Has And Implements The Technical Guidelines For Integrated Pest Management (IPM)</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->ipm))
                            <a href="{{('storage/ispo/' . $ispo->ipm)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file20" style="width: auto;">
                                <option value="{{( isset($validCheck->file20) ? $validCheck->file20 : 'No Document')}}" selected>{{( isset($validCheck->file20) ? $validCheck->file20 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">21. Has Pest Control Facilities According To Technical Guidelines And Has Trained Pest Control Teams</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->suratPengendalianOPT))
                            <a href="{{('storage/ispo/' . $ispo->suratPengendalianOPT)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file21" style="width: auto;">
                                <option value="{{( isset($validCheck->file21) ? $validCheck->file21 : 'No Document')}}" selected>{{( isset($validCheck->file21) ? $validCheck->file21 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">22. Has Technical Guidelines That Specify That Harvested Fruit Is Ripe And Harvested At The Appropriate Time</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->acuanTeknisPanen))
                            <a href="{{('storage/ispo/' . $ispo->acuanTeknisPanen)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file22" style="width: auto;">
                                <option value="{{( isset($validCheck->file22) ? $validCheck->file22 : 'No Document')}}" selected>{{( isset($validCheck->file22) ? $validCheck->file22 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">23. Has Records Of Harvesting Implementation</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->catatanPelaksanaanPemanenan))
                            <a href="{{('storage/ispo/' . $ispo->catatanPelaksanaanPemanenan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file23" style="width: auto;">
                                <option value="{{( isset($validCheck->file23) ? $validCheck->file23 : 'No Document')}}" selected>{{( isset($validCheck->file23) ? $validCheck->file23 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">24. Has And Implements Technical Guidelines For Transporting FFB (Fresh Fruit Bunches)</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->petunjukTeknis))
                            <a href="{{('storage/ispo/' . $ispo->petunjukTeknis)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file24" style="width: auto;">
                                <option value="{{( isset($validCheck->file24) ? $validCheck->file24 : 'No Document')}}" selected>{{( isset($validCheck->file24) ? $validCheck->file24 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Principle 3 -->
            <h3>Principle 3</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">25. Implements Fire Prevention And Control Measures Together With Nearby Residents And Relevant Authorities, In Accordance With Fire Prevention And Control Guidelines</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->pencegahanPenanggulanganKebakaran))
                            <a href="{{('storage/ispo/' . $ispo->pencegahanPenanggulanganKebakaran)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file25" style="width: auto;">
                                <option value="{{( isset($validCheck->file25) ? $validCheck->file25 : 'No Document')}}" selected>{{( isset($validCheck->file25) ? $validCheck->file25 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">26. Has Records Of The Presence Of Wildlife And Plants In And Around The Plantation</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->keberadaanSatwaTumbuhan))
                            <a href="{{('storage/ispo/' . $ispo->keberadaanSatwaTumbuhan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file26" style="width: auto;">
                                <option value="{{( isset($validCheck->file26) ? $validCheck->file26 : 'No Document')}}" selected>{{( isset($validCheck->file26) ? $validCheck->file26 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">27. Aware Of The Presence Of Wildlife And Plants In And Around The Plantation Area Before And After The Establishment Of The Plantation</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->keberadaanSatwaTumbuhanKebun))
                            <a href="{{('storage/ispo/' . $ispo->keberadaanSatwaTumbuhanKebun)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file27" style="width: auto;">
                                <option value="{{( isset($validCheck->file27) ? $validCheck->file27 : 'No Document')}}" selected>{{( isset($validCheck->file27) ? $validCheck->file27 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Principle 4 -->
            <h3>Principle 4</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">28. Has Information On FFB Prices Based On The Price Set By The FFB Price Determination Team For Each Sales Destination</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->informasiHargaTBS))
                            <a href="{{('storage/ispo/' . $ispo->informasiHargaTBS)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file28" style="width: auto;">
                                <option value="{{( isset($validCheck->file28) ? $validCheck->file28 : 'No Document')}}" selected>{{( isset($validCheck->file28) ? $validCheck->file28 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">29. Has Records Of FFB Prices And Purchase Realizations By Companies/Mills, And A Source Of FFB Price Information That Is Regularly Monitored By Farmers, Farmer Groups, And/Or Cooperatives</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->catatanHargaTBSRealisasiPembelian))
                            <a href="{{('storage/ispo/' . $ispo->catatanHargaTBSRealisasiPembelian)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file29" style="width: auto;">
                                <option value="{{( isset($validCheck->file29) ? $validCheck->file29 : 'No Document')}}" selected>{{( isset($validCheck->file29) ? $validCheck->file29 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">30. SOP For Information Services</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->sopPelayanan))
                            <a href="{{('storage/ispo/' . $ispo->sopPelayanan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file30" style="width: auto;">
                                <option value="{{( isset($validCheck->file30) ? $validCheck->file30 : 'No Document')}}" selected>{{( isset($validCheck->file30) ? $validCheck->file30 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">31. Has Documents For Providing Information To Stakeholders In Accordance With Applicable Regulations</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->pemberianInformasiKepadaPemangkuKepentingan))
                            <a href="{{('storage/ispo/' . $ispo->pemberianInformasiKepadaPemangkuKepentingan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file31" style="width: auto;">
                                <option value="{{( isset($validCheck->file31) ? $validCheck->file31 : 'No Document')}}" selected>{{( isset($validCheck->file31) ? $validCheck->file31 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">32. Has Documents Of Responses Or Information Services To Stakeholders' Information Requests</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan))
                            <a href="{{('storage/ispo/' . $ispo->tanggapanPermintaanInformasiDariPemangkuKepentingan)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file32" style="width: auto;">
                                <option value="{{( isset($validCheck->file32) ? $validCheck->file32 : 'No Document')}}" selected>{{( isset($validCheck->file32) ? $validCheck->file32 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Principle 5 -->
            <h3>Principle 5</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">33. Documents Of The Results Of Sustainable Business Improvements/Enhancements</label>
                        <div class="d-flex align-items-center gap-3">
                            @if (isset($ispo->perbaikanUsaha))
                            <a href="{{('storage/ispo/' . $ispo->perbaikanUsaha)}}" target="_blank">View Uploaded File <i class="fa fa-file"></i></a>
                            @endif
                            <select class="form-select" aria-label="Default select example" name="file33" style="width: auto;">
                                <option value="{{( isset($validCheck->file33) ? $validCheck->file33 : 'No Document')}}" selected>{{( isset($validCheck->file33) ? $validCheck->file33 : 'No Document')}}</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                                <option value="No Document">No Document</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start mt-4">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>
</x-layouts>