<x-layouts>
    <div class="container my-5 vh-100 ">
        <div class="row g-4 justify-content-center">

            <!-- Kerja Praktek Card -->
            <div class="col-md-4 col-lg-4 ">
                <div class="card h-100 shadow-sm">
                    <img src="{{asset('img/pohonsawit.jpg')}}" class="card-img-top img-thumbnail" alt="Kerja Praktek Image">
                    <div class="card-body ">
                        <h3 class="card-title">IDENTITY OF THE OIL PALM <br>SMALLHOLDER</h3>
                        <p class="card-text text-muted"><br>Information</p>
                        <span class="status status-pending">Have Filled in the Oil palm smallholder's Identity <br><br></span>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('identityForm') }}" class="btn btn-outline-primary">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skripsi Card -->
            <div class="col-md-4 col-lg-4 ">
                <div class="card h-100 shadow-sm">
                    <img src="{{asset('img/minyaksawit.jpg')}}" class="card-img-top img-thumbnail" alt="Skripsi Image">
                    <div class="card-body">
                        <h3 class="card-title ">PLANTATION <br>PERFORMANCE </h3>
                        <p class="card-text text-muted"><br>Information</p>
                        <span class="status status-pending">Have Filled in the Plantation Performance <br><br></span>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('plantationForm') }}" class="btn btn-outline-primary">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skripsi Card -->
            <div class="col-md-4 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{asset('img/buahsawit.jpg')}}" class="card-img-top img-thumbnail" alt="Skripsi Image">
                    <div class="card-body">
                        <h3 class="card-title ">ISPO <br>STANDART </h3>
                        <p class="card-text text-muted"><br>Information</p>
                        <span class="status status-pending">Have Filled in the ISPO STANDART <br><br></span>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('ispoForm') }}" class="btn btn-outline-primary">Click Here</a>
                            <a href="{{ route('ispoDetail') }}" class="btn btn-outline-primary ">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-layouts>