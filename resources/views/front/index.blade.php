@extends('front.layout.main')

@section('container')

 <!-- Header -->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center justify-content-between">
            <div class="col-xxl-5 col-md-6">
                <!-- Header text content -->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase">Industri Garment</div>
                    </div>
                    @foreach ($perusahaan as $p)
                    <div class="fs-3 fw-light text-muted"><strong>{{ $p->nama_perusahaan }}</strong></div>
                    @endforeach
                    <h1 class="display-3 fw-bolder mb-5">
                        <span class="text-gradient d-inline" style="font-size: 0.7em;">Memproduksi Bahan Pakaian yang Berkualitas</span>
                    </h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/tentangkami">Tentang Kami</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="/blog">Blogs</a>
                    </div>
                </div>
            </div>
            
            <div class="col-xxl-6 col-md-6">
                <!-- Header profile picture -->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        <img class="profile-img" src="/assets_frontend/assets/logotlsi.jpg" style="height: 500px; width: 100%; object-fit: cover;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Berita Perusahaan</span></h2>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-facebook"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-instagram"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Pimpinan Perusahaan</span></h2>
                    <p>Dibawah ini adalah beberapa pimpinan perusahaan di PT. TRi Lestari Sandang Industri.</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow">
                                <img src="https://th.bing.com/th/id/OIP.q2Bhu3uI4M21MTzAjZWjLgAAAA?rs=1&pid=ImgDetMain" class="card-img-top" alt="MR. LEE" style="height: 200px;width:100%; object-fit: cover;">
                                <div class="card-body text-center" style="overflow: hidden;">
                                    <h3 class="card-title mt-3">MR. LEE</h3>
                                    <p class="card-text mt-3">Hello world</p>
                                    <div class="d-flex justify-content-center flex-wrap fs-2 gap-3 mb-3">
                                        <a class="text-gradient" style="color: rgb(16, 144, 248);" href="#!"><i class="bi bi-linkedin"></i></a>
                                        <a class="text-gradient" style="color: blue;" href="#!"><i class="bi bi-facebook"></i></a>
                                        <a class="text-gradient" style="color: red;" href="#!"><i class="bi bi-instagram"></i></a>
                                        <a class="text-gradient" style="color: black;" href="#!"><i class="bi bi-tiktok"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tambahkan div.col-lg-3 col-md-6 mb-4 lainnya jika ada lebih banyak pimpinan -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow">
                                <img src="https://th.bing.com/th/id/OIP.q2Bhu3uI4M21MTzAjZWjLgAAAA?rs=1&pid=ImgDetMain" class="card-img-top" alt="MR. LEE" style="height: 200px;width:100%; object-fit: cover;">
                                <div class="card-body text-center" style="overflow: hidden;">
                                    <h3 class="card-title mt-3">MR. LEE</h3>
                                    <p class="card-text mt-3">Hello world</p>
                                    <div class="d-flex justify-content-center flex-wrap fs-2 gap-3 mb-3">
                                        <a class="text-gradient" style="color: rgb(16, 144, 248);" href="#!"><i class="bi bi-linkedin"></i></a>
                                        <a class="text-gradient" style="color: blue;" href="#!"><i class="bi bi-facebook"></i></a>
                                        <a class="text-gradient" style="color: red;" href="#!"><i class="bi bi-instagram"></i></a>
                                        <a class="text-gradient" style="color: black;" href="#!"><i class="bi bi-tiktok"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow">
                                <img src="https://th.bing.com/th/id/OIP.q2Bhu3uI4M21MTzAjZWjLgAAAA?rs=1&pid=ImgDetMain" class="card-img-top" alt="MR. LEE" style="height: 200px;width:100%; object-fit: cover;">
                                <div class="card-body text-center" style="overflow: hidden;">
                                    <h3 class="card-title mt-3">MR. LEE</h3>
                                    <p class="card-text mt-3">Hello world</p>
                                    <div class="d-flex justify-content-center flex-wrap fs-2 gap-3 mb-3">
                                        <a class="text-gradient" style="color: rgb(16, 144, 248);" href="#!"><i class="bi bi-linkedin"></i></a>
                                        <a class="text-gradient" style="color: blue;" href="#!"><i class="bi bi-facebook"></i></a>
                                        <a class="text-gradient" style="color: red;" href="#!"><i class="bi bi-instagram"></i></a>
                                        <a class="text-gradient" style="color: black;" href="#!"><i class="bi bi-tiktok"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            
<section class="bg-light py-4">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.073400265774!2d109.18000727891926!3d-6.945837047554587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb8ab18ffd637%3A0x2be2eee8b447767d!2sPT.%20Tri%20Lestari%20Sandang%20Industri!5e0!3m2!1sid!2sid!4v1731570830408!5m2!1sid!2sid" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

@endsection