@extends('front.layout.main')

@section('container')
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Lowongan Pekerjaan</span></h2>
                    <p> <span class="card" style="color: red;">hati-hati penipuan!</span> PT. TRI Lestari Sandang Industri tidak memungut biaya sepeserpun!.</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($loker as $l)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow">
                                <img src="https://th.bing.com/th/id/OIP.q2Bhu3uI4M21MTzAjZWjLgAAAA?rs=1&pid=ImgDetMain" class="card-img-top" alt="MR. LEE" style="height: 200px;width:100%; object-fit: cover;">
                                <div class="card-body text-center" style="overflow: hidden;">
                                    <h3 class="card-title mt-3">{{ $l->nama_posisi }}</h3>
                                    <p class="card-text mt-3">{{ $l->jobdesk }}</p>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection