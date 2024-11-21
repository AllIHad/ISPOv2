<x-layouts>
    <div class="container my-5">
        <h1 class="border-bottom mb-4 pb-3">Standard ISPO (Permen No. 38 Tahun 2020)</h1>
        <form action="" method="POST">
            @csrf
            @method('PUT')

            <!-- Principle 1 -->
            <h3>Principle 1</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Owns Land Certificates, Sale And Purchase Deeds, Girik(Traditional Land Onwership Document), Or Other Valid Ownership Evidence (Format .pdf)</label>
                        <input type="file" class="form-control" placeholder="Sertifikat_Tanah.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">The Farmer's Land Adheres To The Spatial Planning Regulations</label>
                        <input type="file" class="form-control" placeholder="Penetapan_Tata_Ruang.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Progress Of Dispute Resolution Meetings And Provides Maps Of Disputed Land Locations</label>
                        <input type="file" class="form-control" placeholder="Dokumen_Penyelesaian_Sengketa.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Copy Of The Agreed-Upon Settlement Agreement</label>
                        <input type="file" class="form-control" placeholder="Salinan_Perjanjian.pdf"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Plantation Business Registration Certificate For Cultivation (STDB)</label>
                        <input type="file" class="form-control" placeholder="STDB.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has an Environmental Permiot According To SPPL</label>
                        <input type="file" class="form-control" placeholder="Surat_Izin_Lingkungan.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of SPPL Implementation</label>
                        <input type="file" class="form-control" placeholder="Catatan_Pelaksanaan.pdf"/>
                    </div>
                </div>
            </div>

            <!-- Principle 2 -->
            <h3>Principle 2</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">The Farmer Has An Organization In The Form Of A Farmer Group Or Cooperative (Fromat .pdf)</label>
                        <input type="file" class="form-control" placeholder="Surat_Memiliki_Kelambagaan.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Document Of The Establishment Of A Farmer Group Or Cooperative Recognized By An Authorized Official</label>
                        <input type="file" class="form-control" placeholder="Surat_Kelompok_Tani.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Uses Seeds From Seed Producers Certified By The Authorized Institution And Recognized By The Mitistry Of Agriculture</label>
                        <input type="file" class="form-control" placeholder="Sertifikat.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Report Of The Activities Of The Farmer, Farmer Group, And/Or Cooperative</label>
                        <input type="file" class="form-control" placeholder="Laporan_Kegiatan_Perkebun.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements SOP And Work Instructions For Land Clearing Without Burning</label>
                        <input type="file" class="form-control" placeholder="SOP.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has An Operational Plan Document For The Farmer, Farmer Group, And/Or Cooperative</label>
                        <input type="file" class="form-control" placeholder="Dokumen_Rencana_Kegiatan.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has A Record Of Seed Origin</label>
                        <input type="file" class="form-control" placeholder="Catatan_Ssal_Benih.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements SOP For Planting According To Good Agriculture Practice (GAP)</label>
                        <input type="file" class="form-control" placeholder="SOP_Penanaman.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of Planting Implementation</label>
                        <input type="file" class="form-control" placeholder="Catatan_Pelaksanaan_Penanaman.pdf"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Has Records For Planting On Peatlands That Comply With Applicable Regulations</label>
                        <input type="file" class="form-control" placeholder="Catatan_Penanaman.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has SOP And Work Instructions For Plant Maintenance</label>
                        <input type="file" class="form-control" placeholder="SOP_Pemeliharaan_Tanaman.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records of Fertilization And Plant Maintenance Activities</label>
                        <input type="file" class="form-control" placeholder="Catatan_Pemupukan_Tanaman.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements The Technical Guidelines For Integrated Pest Management (IPM)</label>
                        <input type="file" class="form-control" placeholder="IPM.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Pest Control Facilities According To Technical Guidelines And Has Trained Pest Control Teams</label>
                        <input type="file" class="form-control" placeholder="Surat_Pengendalian_OPT.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Technical Guidelines That Specify That Harvested Fruit Is Ripe And Harvested At The Appropriate Time</label>
                        <input type="file" class="form-control" placeholder="Acuan_Teknis_Panen.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of Harvesting Implementation*</label>
                        <input type="file" class="form-control" placeholder="Catatan_Pelaksanaan_Pemanenenan.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has And Implements Technical Guidelines For Transporting FFB (Fresh Fruit Bunches)*</label>
                        <input type="file" class="form-control" placeholder="Petunjuk_Teknis.pdf"/>
                    </div>
                </div>
            </div>


            <!-- Principle 3 -->
            <h3>Principle 3</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Implements Fire Prevention And Control Measures Together With Nearby Residents And Relevant Authorities, In Accordance With Fire Prevention And Control Guidelines</label>
                        <input type="file" class="form-control" placeholder="Pencegahan_dan_Penanggulangan_Kebakaran_Bersama_Sama.pdf"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Has Records Of The Presence Of Wildlife And Plants In And Around The Plantation</label>
                        <input type="file" class="form-control" placeholder="Keberadaan_Satwa_dan_Tumbuhan.pdf"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Aware Of The Presence Of Wildlife And Plants In And Around The Plantation Area Before And After The Establishment Of The Plantation</label>
                        <input type="file" class="form-control" placeholder="Keberadaan_Satwa_dan_Tumbuhan_di_Area_Kebun.pdf"/>
                    </div>
                </div>

            </div>

            <!-- Principle 4 -->
            <h3>Principle 4</h3>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Has Information On FFB Prices Based On The Price Set By The FFB Price Determination Team For Each Sales Destination</label>
                        <input type="file" class="form-control" placeholder="Informasi_Harga_TBS.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Records Of FFB Prices And Purchase Realizations By Companies/Mills, And A Source Of FFB Price Information That Is Regularly Monitored By Farmers, Farmer Groups, And/Or Cooperatives</label>
                        <input type="file" class="form-control" placeholder="Catatan_Harga_TBS_dan_Realisasi_Pembelian.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">SOP For Information Services</label>
                        <input type="file" class="form-control" placeholder="SOP_Pelayanan.pdf"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Has Documents For Providing Information To Stakeholders In Accordance With Applicable Regulations</label>
                        <input type="file" class="form-control" placeholder="Pemberian_Informasi_Kepada_Pemangku_Kepentingan.pdf"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has Documents Of Responses Or Information Services To Stakeholders' Information Requests</label>
                        <input type="file" class="form-control" placeholder="Tanggapan_Permintaan_Informasi_Dari_Pemangku_Kepentingan.pdf"/>
                    </div>
                </div>
            </div>

            <!-- Principle 5 -->
            <h3>Principle 5</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Documents Of The Results Of Sustainable Business Improvements/Enhancements</label>
                        <input type="file" class="form-control" placeholder="Perbaikan_Usaha.pdf"/>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start mt-4">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>
</x-layouts>