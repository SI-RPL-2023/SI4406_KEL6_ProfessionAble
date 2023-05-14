@include('layout.head')

@extends('layout.main')
@section('content')

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card border-light shadow ">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <img src="logo-telkom-indonesia.png" alt="logo-telkom-indonesia" width="200">
                            <h4 class="mt-4 mb-2 fw-bold">Telkom Indonesia</h4>
                            <h6 class="text-secondary">www.telkom.co.id</h6>
                            <h6 class="text-secondary pb-3">(022) 7274272</h6>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-10">
                            <hr>
                            <div class="row pb-1">
                                <div class="col">
                                    <h5 class="fw-bold">Deskripsi Perusahaan</h5>
                                </div>
                                <div class="col-auto mx-3">
                                    <a href="#"><img src="iconEdit.png" alt="iconEdit" width="22"></a>
                                </div>
                            </div>
                            <div class="row">
                                <p class="pb-2 text-justify text-body-secondary">Telkom Indonesia adalah perusahaan telekomunikasi terbesar di Indonesia yang menyediakan layanan telekomunikasi, informasi, dan teknologi digital. Telkom Indonesia memiliki jaringan telepon kabel, jaringan telepon seluler, serta jaringan internet dan data. Perusahaan ini juga menyediakan solusi bisnis dan layanan korporat, dan memiliki anak perusahaan di berbagai sektor. Telkom Indonesia terus berinovasi untuk meningkatkan kualitas layanannya dan memperluas jangkauannya di seluruh Indonesia.</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-10">
                            <h5 class="fw-bold">Identitas Perusahaan</h5>
                            <div class="row mt-3">
                                <div class="col-6 fw-semibold">
                                  Nama Perusahaan
                                </div>
                                <div class="col-6 text-body-secondary">
                                  Telkom Indonesia
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Website
                                </div>
                                <div class="col-6 text-body-secondary">
                                  www.telkom.co.id
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Kontak
                                </div>
                                <div class="col-6 text-body-secondary">
                                  (022) 7274272
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Email
                                </div>
                                <div class="col-6 text-body-secondary">
                                  telkomindo@gmail.com
                                </div>
                            </div>
                            <div class="row mt-2 pb-2">
                                <div class="col-6 fw-semibold">
                                  Url LinkedIn
                                </div>
                                <div class="col-6 text-body-secondary">
                                  https://www.linkedin.com/company/telkom-indonesia/
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-2 mb-4 justify-content-center">
                        <div class="col-10">
                            <h5 class="fw-bold">Detail Perusahaan</h5>
                            <form action="#" class="my-4">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium text-secondary">Industri*</label>
                                    <input type="text" name="industry" class="form-control text-secondary" value="Telekomunikasi dan Jaringan" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium text-secondary">Ukuran Perusahaan*</label>
                                    <input type="text" name="size_company" class="form-control text-secondary" value=">200 Karyawan" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium text-secondary">Jenis Perusahaan*</label>
                                    <input type="text" name="size_company" class="form-control text-secondary" value="Perusahaan Publik" readonly>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

@include('layout.footer')
@endsection